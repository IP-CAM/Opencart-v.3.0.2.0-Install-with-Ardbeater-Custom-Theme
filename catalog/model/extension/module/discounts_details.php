<?php
class ModelExtensionModuleDiscountsDetails extends Model {

	public function getDiscountsDetailsById($produk_id) {
		if ($this->customer->isLogged()) {
			$customer_group_id = $this->customer->getCustomerGroupId();
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}	
				
		$query = $this->db->query("SELECT ps.product_id ,ps.price, ps.date_start, ps.date_end FROM " . DB_PREFIX . "product_special ps LEFT JOIN " . DB_PREFIX . "product p ON (p.product_id = ps.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE ps.product_id = $produk_id AND ps.customer_group_id = '" . (int)$customer_group_id . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1");
		
		if ($query->num_rows) {
			return array(
				'product_id'    => $query->row['product_id'],
				'price'     	=> $query->row['price'],
				'date_start'    => $query->row['date_start'],
				'date_end'      => $query->row['date_end']
			);
		} else {
			return false;
		}
	}
}
?>