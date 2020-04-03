<?php
class ModelApiProduct extends Model {
	public function addProduct($product, $image) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "product SET model = '" . $this->db->escape($product['model']) . "', sku = '" . $this->db->escape($product['sku']) . "', upc = '" . $this->db->escape($product['upc']) . "', ean = '" . $this->db->escape($product['ean']) . "', jan = '" . $this->db->escape($product['jan']) . "', isbn = '" . $this->db->escape($product['isbn']) . "', mpn = '" . $this->db->escape($product['mpn']) . "', location = '" . $this->db->escape($product['location']) . "', quantity = '" . (int)$product['quantity'] . "', minimum = '" . (int)$product['minimum'] . "', subtract = '" . (int)$product['subtract'] . "', stock_status_id = '" . (int)$product['stock_status_id'] . "', date_available = NOW(), manufacturer_id = '" . (int)$product['manufacturer_id'] . "', shipping = '" . (int)$product['shipping'] . "', price = '" . (float)$product['price'] . "', points = '" . (int)$product['points'] . "', weight = '" . (float)$product['weight'] . "', weight_class_id = '" . (int)$product['weight_class_id'] . "', length = '" . (float)$product['length'] . "', width = '" . (float)$product['width'] . "', height = '" . (float)$product['height'] . "', length_class_id = '" . (int)$product['length_class_id'] . "', status = '" . (int)$product['status'] . "', tax_class_id = '" . (int)$product['tax_class_id'] . "', sort_order = '" . (int)$product['sort_order'] . "', date_added = NOW(), date_modified = NOW()");

		$product_id = $this->db->getLastId();

		if (isset($image['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "product SET image = '" . $this->db->escape($image['image']) . "' WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("INSERT INTO " . DB_PREFIX . "product_image SET product_id = '" . (int)$product_id . "', image = '" . $this->db->escape($image['image']) . "', sort_order = '" . (int)$product['sort_order'] . "'");
            $this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET product_id = '" . (int)$product_id . "', language_id = '" . (int)$product['language_id'] . "', name = '" . $this->db->escape($product['name']) . "', description = '" . $this->db->escape($product['description']) . "', tag = '" . $this->db->escape($product['tag']) . "', meta_title = '" . $this->db->escape($product['meta_title']) . "', meta_description = '" . $this->db->escape($product['meta_description']) . "', meta_keyword = '" . $this->db->escape($product['meta_keyword']) . "'");
            $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$product['product_category'] . "'");
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store SET product_id = '" . (int)$product_id . "', store_id = '" . (int)$product['store_id']. "'");
		}

		$this->cache->delete('product');

		return $product_id;
	}

	public function editProduct($product_id, $product, $image) {

		$this->db->query("UPDATE " . DB_PREFIX . "product SET model = '" . $this->db->escape($product['model']) . "', sku = '" . $this->db->escape($product['sku']) . "', upc = '" . $this->db->escape($product['upc']) . "', ean = '" . $this->db->escape($product['ean']) . "', jan = '" . $this->db->escape($product['jan']) . "', isbn = '" . $this->db->escape($product['isbn']) . "', mpn = '" . $this->db->escape($product['mpn']) . "', location = '" . $this->db->escape($product['location']) . "', quantity = '" . (int)$product['quantity'] . "', minimum = '" . (int)$product['minimum'] . "', subtract = '" . (int)$product['subtract'] . "', stock_status_id = '" . (int)$product['stock_status_id'] . "', date_available = NOW(), manufacturer_id = '" . (int)$product['manufacturer_id'] . "', shipping = '" . (int)$product['shipping'] . "', price = '" . (float)$product['price'] . "', points = '" . (int)$product['points'] . "', weight = '" . (float)$product['weight'] . "', weight_class_id = '" . (int)$product['weight_class_id'] . "', length = '" . (float)$product['length'] . "', width = '" . (float)$product['width'] . "', height = '" . (float)$product['height'] . "', length_class_id = '" . (int)$product['length_class_id'] . "', status = '" . (int)$product['status'] . "', tax_class_id = '" . (int)$product['tax_class_id'] . "', sort_order = '" . (int)$product['sort_order'] . "', date_modified = NOW() WHERE product_id = '" . (int)$product_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "product_description WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int)$product_id . "'");

		if (isset($image['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "product SET image = '" . $this->db->escape($image['image']) . "' WHERE product_id = '" . (int)$product_id . "'");
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET product_id = '" . (int)$product_id . "', language_id = '" . (int)$product['language_id'] . "', name = '" . $this->db->escape($product['name']) . "', description = '" . $this->db->escape($product['description']) . "', tag = '" . $this->db->escape($product['tag']) . "', meta_title = '" . $this->db->escape($product['meta_title']) . "', meta_description = '" . $this->db->escape($product['meta_description']) . "', meta_keyword = '" . $this->db->escape($product['meta_keyword']) . "'");
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_image SET product_id = '" . (int)$product_id . "', image = '" . $this->db->escape($image['image']) . "', sort_order = '" . (int)$product['sort_order'] . "'");
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$product['product_category'] . "'");
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store SET product_id = '" . (int)$product_id . "', store_id = '" . (int)$product['store_id']. "'");
		}

		$this->cache->delete('product');
	}

	public function deleteProduct($product_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_attribute WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_description WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_filter WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_option WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_option_value WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE related_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_reward WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_special WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_download WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_layout WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_recurring WHERE product_id = " . (int)$product_id);
		$this->db->query("DELETE FROM " . DB_PREFIX . "review WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "coupon_product WHERE product_id = '" . (int)$product_id . "'");

		$this->cache->delete('product');
	}

	public function getProduct($product_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE p.product_id = '" . (int)$product_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		if ($query->num_rows) {
			return array(
				'product_id'       => $query->row['product_id'],
				'name'             => $query->row['name'],
				'description'      => trim(strip_tags(html_entity_decode($query->row['description'], ENT_QUOTES, 'UTF-8'))),
				'meta_title'       => $query->row['meta_title'],
				'model'            => $query->row['model'],
				'image'            => $query->row['image'],
				'quantity'         => $query->row['quantity'],
				'minimum'          => $query->row['minimum'],
				'price'            => $query->row['price'],
				'points'           => $query->row['points'],
				'date_available'   => $query->row['date_available'],
				'weight'           => $query->row['weight'],
				'length'           => $query->row['length'],
				'width'            => $query->row['width'],
				'height'           => $query->row['height'],
				'status'           => $query->row['status'],
				'date_added'       => $query->row['date_added'],
				'date_modified'    => $query->row['date_modified'],
				'viewed'           => $query->row['viewed']
			);
		} else {
			return false;
		}
	}

	public function getProduk($product_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE p.product_id = '" . (int)$product_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getProducts($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_model'])) {
			$sql .= " AND p.model LIKE '" . $this->db->escape($data['filter_model']) . "%'";
		}

		if (!empty($data['filter_price'])) {
			$sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
		}

		if (isset($data['filter_quantity']) && $data['filter_quantity'] !== '') {
			$sql .= " AND p.quantity = '" . (int)$data['filter_quantity'] . "'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'p.price',
			'p.quantity',
			'p.status',
			'p.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY pd.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getManufacturer($data = array()) {
		$query = $this->db->query("SELECT manufacturer_id, name FROM `" . DB_PREFIX . "manufacturer`");

		return $query->rows;
	}

	public function getStockStatus($data = array()) {
		$query = $this->db->query("SELECT stock_status_id, name FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` = '1'");

		return $query->rows;
	}
}
