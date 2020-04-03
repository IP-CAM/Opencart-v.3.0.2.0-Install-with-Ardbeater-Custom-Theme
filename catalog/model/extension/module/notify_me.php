<?php
class ModelExtensionModuleNotifyMe extends Model {

	public function add_notify_request($data = array()) {

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_description WHERE product_id = '".$this->db->escape($data['product_id'])."'");
		foreach ($query->rows as $result) {
			$bata = [
				'product_name' 	=> $result['name'],
			];
		}

		$this->db->query("INSERT INTO " . DB_PREFIX . "notify_me SET name = '".$this->db->escape($data['name'])."', email = '".$this->db->escape($data['email'])."', product_id = '".$this->db->escape($data['product_id'])."', product_name = '".$this->db->escape($bata['product_name'])."', customer_id = '".$this->db->escape($data['customer_id'])."', language_id = '" . (int)$this->config->get('config_language_id')."', date_added = NOW()");

	}

}