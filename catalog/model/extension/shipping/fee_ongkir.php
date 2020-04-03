<?php

class ModelExtensionShippingFeeOngkir extends Model {

	function getQuote($address) {
		$this->load->language('extension/shipping/fee_ongkir');

		$method_data = array();
        $quote_data = array();
        
		$origins = $this->config->get('shipping_fee_ongkir_origins');
		$destination = $address['zone_id'];
		$weight = $this->weight->convert($this->cart->getWeight(), $this->config->get('config_weight_class_id'), '2');
        $services = $this->config->get('shipping_fee_ongkir_services');
        $api_key = $this->config->get('shipping_fee_ongkir_api_key');
			
        if ($weight == 0){
            $weight = 1;
		}
		
		$free_desti = $address['country_id'];
		$free_wilayah = $this->config->get('shipping_fee_ongkir_free_wilayah');
		
	  if ($this->config->get('shipping_fee_ongkir_free_status') && in_array($free_desti, $free_wilayah)){
		  $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = '" . (int)$origins . "' AND status = '1'");
		  $querys = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = '" . (int)$destination . "' AND status = '1'");
		  $cty_org = $query->rows[0]['name'];
		  $cty_des = $querys->rows[0]['name'];
		  $coste3 = 0 / $this->currency->getValue('IDR');
		  $quote_data['FreeOngkir'] = array(
				'code'         => 'fee_ongkir'.'.FreeOngkir',
				'title'        => '<b>Free Ongkir</b>',
				'cost'         => $coste3,
				'tax_class_id' => $this->config->get('shipping_fee_ongkir_tax_class_id'),
				'text'         => $this->currency->format($this->tax->calculate($coste3, $this->config->get('shipping_fee_ongkir_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
		  );
		  $title = 'Free ongkir untuk pengiriman dari ';

	  } else {
		
        foreach ( $services as $kurir ) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "origin=".$origins."&destination=".$destination."&weight=".$weight."&courier=".$kurir."",
                CURLOPT_HTTPHEADER => array(
                    "key: $api_key"
                ),
            ));
            $responses = curl_exec($curl);
            $err = curl_error($curl);
            $array = json_decode( $responses, true );
            curl_close ($curl);

            foreach((array)$array as $hasils){

              if ($destination){

                foreach((array)$hasils['results'] as $hasil){
                  $nama = $hasil['name'];
                  $code = $hasil['code'];

                  foreach($hasil['costs'] as $hasil2){
                    $service = $hasil2['service'];

                    foreach($hasil2['cost'] as $hasil3){
                      $coste = $hasil3['value'];
                      $etd = $hasil3['etd'];
			
			          if ($this->config->get('config_secure')){
				        $logos = '<img src="http://localhost/armoni/image/catalog/shipping/rajaongkir/'.$code.'.png"/>&nbsp;';
			          } else {
				        $logos = '<img src="http://localhost/armoni/image/catalog/shipping/rajaongkir/'.$code.'.png"/>&nbsp;';
			          }
			
			          if ($etd) {
				        if ($code=="pos"){
					      $estimasi = ' (Estimasi: '.$etd.')';
				        } else {
					      $estimasi = ' (Estimasi: '.$etd.' HARI)';
				        }
			          }
			
			          //hitung pos asuransi
			          // if ($code=="pos") {
					    // $sub_total = $this->cart->getSubTotal();
					    // $hitung1 = $sub_total * 0.0024;
					    // $hitung2 = $hitung1 + ($hitung1*0.1);
					    // $hitung3 = $hitung2 + 0.1;
					    // $coste2 = $coste + $hitung3;
			          // } else  {
                        // $coste2=$coste;
                      // }
                      $coste2=$coste;
			
			          if ($coste == 0) {
	                  } else {
			            $coste3 = $coste2 / $this->currency->getValue('IDR');
			            $quote_data[$kurir.$service] = array(
				          'code'         => 'fee_ongkir'.'.'.$kurir.$service.'',
				          'title'        => $logos.' '.$nama.' - <b>'.$service.'</b>'.$estimasi,
				          'cost'         => $coste3,
				          'tax_class_id' => $this->config->get('shipping_fee_ongkir_tax_class_id'),
				          'text'         => $this->currency->format($this->tax->calculate($coste3, $this->config->get('shipping_fee_ongkir_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
			            );
			          }
			        }
			      }
                }
			  }
              $cty_org = $hasils['origin_details']['type'].' '.$hasils['origin_details']['city_name'];
              $cty_des = $hasils['destination_details']['type'].' '.$hasils['destination_details']['city_name'];
			}
			$title = $this->language->get('text_title');
		}
	  }

		$method_data = array(
			'code'       => 'fee_ongkir',
			'title'      => $title.$cty_org.' - '.$cty_des.'',
			'quote'      => $quote_data,
			'sort_order' => $this->config->get('shipping_fee_ongkir_sort_order'),
			'error'      => false
		);
		
		return $method_data;
	}
}