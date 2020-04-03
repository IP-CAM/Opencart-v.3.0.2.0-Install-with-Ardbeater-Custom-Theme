<?php
/*
* Rajaongkir cek fee ongkir
*/
class rajaOngkir{
	private $key;

	public function __construct()
	{
		//masukan api key disini
		$this->key = '3174e4fe818848e4d340ef0887ebe6d7';	
	}

	//menampilkan data provinsi
	public function showProvince($api_key, $response='')
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
			CURLOPT_RETURNTRANSFER => true,
    		CURLOPT_ENCODING => "",
    		CURLOPT_MAXREDIRS => 10,
    		CURLOPT_TIMEOUT => 30,
    		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    		CURLOPT_CUSTOMREQUEST => "GET",
    		CURLOPT_HTTPHEADER => array(
      			"key: $api_key"
    		),
		  ));
  		$response = curl_exec($curl);
  		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
			$result = 'error';
			return 'error';
		} else {
			return $response;
		}
	}

	//menampilkan data kabupaten/kota berdasarkan id provinsi
	public function showCity($api_key, $prov_id, $response='')
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
  			CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$prov_id",
  			CURLOPT_RETURNTRANSFER => true,
  			CURLOPT_ENCODING => "",
  			CURLOPT_MAXREDIRS => 10,
  			CURLOPT_TIMEOUT => 30,
  			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  			CURLOPT_CUSTOMREQUEST => "GET",
  			CURLOPT_HTTPHEADER => array(
    			"key: $api_key"
  			),
		));
 
		$response = curl_exec($curl);
		$err = curl_error($curl);
 
		curl_close($curl);
		if ($err) {
			$result = 'error';
			return 'error';
		} else {
			return $response;
		}
	}

	public function allCity($api_key, $response=''){
		$curl = curl_init(); 
  		curl_setopt_array($curl, array(
    		CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
    		CURLOPT_RETURNTRANSFER => true,
    		CURLOPT_ENCODING => "",
    		CURLOPT_MAXREDIRS => 10,
    		CURLOPT_TIMEOUT => 30,
    		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    		CURLOPT_CUSTOMREQUEST => "GET",
    		CURLOPT_HTTPHEADER => array(
      			"key: $api_key"
    		),
		  ));
  		$response = curl_exec($curl);
  		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
			$result = 'error';
			return 'error';
		} else {
			return $response;
		}
	}
}
