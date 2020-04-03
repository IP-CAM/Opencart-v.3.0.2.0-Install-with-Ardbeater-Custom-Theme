<?php
class ControllerExtensionModuleCekOngkir extends Controller {

	public function index() {
			$this->load->language('extension/module/cek_ongkir');

			if (isset($this->session->data['country_id'])) {
				$data['country_id'] = $this->session->data['country_id'];
			} else {
				$data['country_id'] = $this->config->get('config_country_id');
			}

			$this->load->model('localisation/country');
	
			$data['countries'] = $this->model_localisation_country->getCountries();

			if (isset($this->session->data['zone_id'])) {
				$data['zone_id'] = $this->session->data['zone_id'];
			} else {
				$data['zone_id'] = '';
			}

			if (isset($this->session->data['weight'])) {
				$data['weight'] = $this->session->data['weight'];
			} else {
				$data['weight'] = '1000';
			}

			return $this->load->view('extension/module/cek_ongkir', $data);
		}

		public function country() {
			$json = array();
	
			$this->load->model('localisation/country');
	
			$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);
	
			if ($country_info) {
				$this->load->model('localisation/zone');
	
				$json = array(
					'country_id'        => $country_info['country_id'],
					'name'              => $country_info['name'],
					'iso_code_2'        => $country_info['iso_code_2'],
					'iso_code_3'        => $country_info['iso_code_3'],
					'address_format'    => $country_info['address_format'],
					'postcode_required' => $country_info['postcode_required'],
					'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
					'status'            => $country_info['status']
				);
			}
	
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		}

		public function quote() {
			$this->load->language('extension/total/shipping');
	
			$json = array();
	
			if ($this->request->post['country_id'] == '') {
				$json['error']['country'] = $this->language->get('error_country');
			}
	
			if (!isset($this->request->post['zone_id']) || $this->request->post['zone_id'] == '') {
				$json['error']['zone'] = $this->language->get('error_zone');
			}
	
			$this->load->model('localisation/country');
	
			$country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);
	
			if ($country_info && $country_info['postcode_required'] && (utf8_strlen(trim($this->request->post['postcode'])) < 2 || utf8_strlen(trim($this->request->post['postcode'])) > 10)) {
				$json['error']['postcode'] = $this->language->get('error_postcode');
			}

			if (utf8_strlen(trim($this->request->post['weight'])) < 1 || utf8_strlen(trim($this->request->post['weight'])) > 10) {
				$json['error']['weight'] = 'Berat harus berisi antara 1 sampai 10 karakter!';
			}
	
			if (!$json) {
				$this->tax->setShippingAddress($this->request->post['country_id'], $this->request->post['zone_id']);
	
				if ($country_info) {
					$country = $country_info['name'];
					$iso_code_2 = $country_info['iso_code_2'];
					$iso_code_3 = $country_info['iso_code_3'];
					$address_format = $country_info['address_format'];
				} else {
					$country = '';
					$iso_code_2 = '';
					$iso_code_3 = '';
					$address_format = '';
				}
	
				$this->load->model('localisation/zone');
	
				$zone_info = $this->model_localisation_zone->getZone($this->request->post['zone_id']);
	
				if ($zone_info) {
					$zone = $zone_info['name'];
					$zone_code = $zone_info['code'];
				} else {
					$zone = '';
					$zone_code = '';
				}
	
				$this->session->data['cek_ongkir'] = array(
					'firstname'      => '',
					'lastname'       => '',
					'company'        => '',
					'address_1'      => '',
					'address_2'      => '',
					'weight'         => $this->request->post['weight'],
					'city'           => '',
					'zone_id'        => $this->request->post['zone_id'],
					'zone'           => $zone,
					'zone_code'      => $zone_code,
					'country_id'     => $this->request->post['country_id'],
					'country'        => $country,
					'iso_code_2'     => $iso_code_2,
					'iso_code_3'     => $iso_code_3,
					'address_format' => $address_format
				);
	
				$quote_data = array();
	
				$this->load->model('setting/extension');
	
				$results = $this->model_setting_extension->getModulemodel('cek_ongkir');
	
				foreach ($results as $result) {
					if ($this->config->get('module_' . $result['code'] . '_status')) {
						$this->load->model('extension/module/' . $result['code']);
	
						$quote = $this->{'model_extension_module_' . $result['code']}->getQuote($this->session->data['cek_ongkir']);
	
						if ($quote) {
							$quote_data[$result['code']] = array(
								'title'      => $quote['title'],
								'quote'      => $quote['quote'],
								'sort_order' => $quote['sort_order'],
								'error'      => $quote['error']
							);
						}
					}
				}
	
				$sort_order = array();
	
				foreach ($quote_data as $key => $value) {
					$sort_order[$key] = $value['sort_order'];
				}
	
				array_multisort($sort_order, SORT_ASC, $quote_data);
	
				$this->session->data['shipping_methods'] = $quote_data;
	
				if ($this->session->data['shipping_methods']) {
					$json['shipping_method'] = $this->session->data['shipping_methods'];
				} else {
					$json['error']['warning'] = sprintf($this->language->get('error_no_shipping'), $this->url->link('information/contact'));
				}
			}
	
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		}

}