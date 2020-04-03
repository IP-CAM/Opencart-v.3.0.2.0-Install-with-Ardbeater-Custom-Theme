<?php
class ControllerExtensionModuleViewOrder extends Controller {

	public function index() {
			$this->load->language('extension/module/view_order');

			if (isset($this->session->data['order_id'])) {
				$data['order_id'] = $this->session->data['order_id'];
			} else {
				$data['order_id'] = '';
			}

			if (isset($this->session->data['email'])) {
				$data['email'] = $this->session->data['email'];
			} else {
				$data['email'] = '';
			}

			return $this->load->view('extension/module/view_order', $data);
		}

		public function info() {
			$this->load->language('account/order');
			$this->load->language('extension/module/view_order');
	
			$json = array();

			$order_id = $this->request->post['order_id'];
			$email = $this->request->post['e_mail'];

			$json['heading_title'] = $this->language->get('text_order');

			$json['text_order_detail'] = $this->language->get('text_order_detail');
			$json['text_invoice_no'] = $this->language->get('text_invoice_no');
			$json['text_order_id'] = $this->language->get('text_order_id');
			$json['text_date_added'] = $this->language->get('text_date_added');
			$json['text_shipping_method'] = $this->language->get('text_shipping_method');
			$json['text_shipping_address'] = $this->language->get('text_shipping_address');
			$json['text_payment_method'] = $this->language->get('text_payment_method');
			$json['text_payment_address'] = $this->language->get('text_payment_address');
			$json['text_history'] = $this->language->get('text_history');
			$json['text_comment'] = $this->language->get('text_comment');

			$json['column_name'] = $this->language->get('column_name');
			$json['column_model'] = $this->language->get('column_model');
			$json['column_quantity'] = $this->language->get('column_quantity');
			$json['column_price'] = $this->language->get('column_price');
			$json['column_total'] = $this->language->get('column_total');
			$json['column_action'] = $this->language->get('column_action');
			$json['column_date_added'] = $this->language->get('column_date_added');
			$json['column_status'] = $this->language->get('column_status');
			$json['column_comment'] = $this->language->get('column_comment');
			
			$this->load->model('extension/module/view_order');
			
			$order_info = $this->model_extension_module_view_order->getOrder($order_id);

			if (empty($order_info)){
				$json['error']['order_id'] = 'ID Order tidak sesuai!';
			} else {
				if ($order_info && isset($order_info['email']) && $order_info['email'] == $email) {
					$json['id_order'] = $order_id;

					$json['email'] = $order_info['email'];
					
					$json['date_added'] = date($this->language->get('date_format_short'), strtotime($order_info['date_added']));
		
					$json['payment_address'] = $order_info['payment_firstname'].' '.$order_info['payment_lastname'].'</br>'.$order_info['payment_address_1'].'</br>'.$order_info['payment_city'].'</br>'.$order_info['payment_zone'].'</br>'.$order_info['payment_country'].'';
		
					$json['payment_method'] = $order_info['payment_method'];
		
					$json['shipping_address'] = $order_info['shipping_firstname'].' '.$order_info['shipping_lastname'].'</br>'.$order_info['shipping_address_1'].'</br>'.$order_info['shipping_city'].'</br>'.$order_info['shipping_zone'].'</br>'.$order_info['shipping_country'].'';

					$json['shipping_method'] = $order_info['shipping_method'];

					$this->load->model('catalog/product');
					$this->load->model('tool/upload');
		
					// Products
					$json['products'] = array();
		
					$products = $this->model_extension_module_view_order->getOrderProducts($order_id);
		
					foreach ($products as $product) {
						$option_data = array();
		
						$options = $this->model_extension_module_view_order->getOrderOptions($order_id, $product['order_product_id']);
		
						foreach ($options as $option) {
							if ($option['type'] != 'file') {
								$value = $option['value'];
							} else {
								$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);
		
								if ($upload_info) {
									$value = $upload_info['name'];
								} else {
									$value = '';
								}
							}
		
							$option_data[] = array(
								'name'  => $option['name'],
								'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
							);
						}
		
						$product_info = $this->model_catalog_product->getProduct($product['product_id']);
		
						$json['products'][] = array(
							'name'     => $product['name'],
							'model'    => $product['model'],
							'option'   => $option_data,
							'quantity' => $product['quantity'],
							'price'    => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
							'total'    => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']),
						);
					}

					// Voucher
					$json['vouchers'] = array();
		
					$vouchers = $this->model_extension_module_view_order->getOrderVouchers($order_id);
		
					foreach ($vouchers as $voucher) {
						$json['vouchers'][] = array(
							'description' => $voucher['description'],
							'amount'      => $this->currency->format($voucher['amount'], $order_info['currency_code'], $order_info['currency_value'])
						);
					}
		
					// Totals
					$json['totals'] = array();
		
					$totals = $this->model_extension_module_view_order->getOrderTotals($order_id);
		
					foreach ($totals as $total) {
						$json['totals'][] = array(
							'title' => $total['title'],
							'text'  => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value']),
						);
					}

					$json['comment'] = nl2br($order_info['comment']);
		
					// History
					$json['histories'] = array();
		
					$results = $this->model_extension_module_view_order->getOrderHistories($order_id);
		
					foreach ($results as $result) {
						$json['histories'][] = array(
							'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
							'status'     => $result['status'],
							'comment'    => $result['notify'] ? nl2br($result['comment']) : ''
						);
					}
					
				} else {
					$json['error']['e_mail'] = 'E-Mail Address tidak sesuai!';
				}
			}

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		}
}
