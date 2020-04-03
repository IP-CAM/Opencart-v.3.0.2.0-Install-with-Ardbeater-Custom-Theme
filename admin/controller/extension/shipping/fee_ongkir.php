<?php
class ControllerExtensionShippingFeeOngkir extends Controller { 
	private $error = array();

	public function __construct($registry) {
        parent::__construct($registry);
        $this->load->library('rajaongkir');
	}

	public function index() {

		$this->load->language('extension/shipping/fee_ongkir');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('shipping_fee_ongkir', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array(); 

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/shipping/fee_ongkir', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/shipping/fee_ongkir', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true);
		
		if (isset($this->request->post['shipping_fee_ongkir_api_key'])) {
			$data['shipping_fee_ongkir_api_key'] = $this->request->post['shipping_fee_ongkir_api_key'];
		} else {
			$data['shipping_fee_ongkir_api_key'] = $this->config->get('shipping_fee_ongkir_api_key');
		}

		$api_key = $this->config->get('shipping_fee_ongkir_api_key');

		$rajaongkir = new rajaOngkir();
		$datacity = $rajaongkir->allCity($api_key);
		$cities = json_decode($datacity,true);

		if (isset($cities['rajaongkir']['results'])){
			$data['origins'] = $cities['rajaongkir']['results'];
		} else {
			$data['error_warning'] = 'Peringatan: API Key tidak cocok!';
		}
		
		$data['origin'] = $this->config->get('shipping_fee_ongkir_origins');

		$apikey = $this->config->get('shipping_fee_ongkir_api_key');

		if (isset($this->request->post['shipping_fee_ongkir_origins'])) {
			$data['shipping_fee_ongkir_origins'] = $this->request->post['shipping_fee_ongkir_origins'];
		} else {
			$data['shipping_fee_ongkir_origins'] = $this->config->get('shipping_fee_ongkir_origins');
		}

		if (isset($this->request->post['shipping_fee_ongkir_services'])) {
			$data['shipping_fee_ongkir_services'] = $this->request->post['shipping_fee_ongkir_services'];
		} else {
			$data['shipping_fee_ongkir_services'] = $this->config->get('shipping_fee_ongkir_services');
		}

		if (isset($this->request->post['shipping_fee_ongkir_free_status'])) {
			$data['shipping_fee_ongkir_free_status'] = $this->request->post['shipping_fee_ongkir_free_status'];
		} else {
			$data['shipping_fee_ongkir_free_status'] = $this->config->get('shipping_fee_ongkir_free_status');
		}

		$rajaongkir = new rajaOngkir();
		$dataprovinsi = $rajaongkir->showProvince($api_key);
		$provinsi = json_decode($dataprovinsi,true);
		
		$data['wilayah_free_ongkir'] = $provinsi['rajaongkir']['results'];

		if (isset($this->request->post['shipping_fee_ongkir_free_wilayah'])) {
			$data['shipping_fee_ongkir_free_wilayah'] = $this->request->post['shipping_fee_ongkir_free_wilayah'];
		} else {
			$data['shipping_fee_ongkir_free_wilayah'] = $this->config->get('shipping_fee_ongkir_free_wilayah');
		}

		if (isset($this->request->post['shipping_fee_ongkir_tax_class_id'])) {
			$data['shipping_fee_ongkir_tax_class_id'] = $this->request->post['shipping_fee_ongkir_tax_class_id'];
		} else {
			$data['shipping_fee_ongkir_tax_class_id'] = $this->config->get('shipping_fee_ongkir_tax_class_id');
		}

		$this->load->model('localisation/tax_class');

		$data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

		if (isset($this->request->post['shipping_fee_ongkir_geo_zone_id'])) {
			$data['shipping_fee_ongkir_geo_zone_id'] = $this->request->post['shipping_fee_ongkir_geo_zone_id'];
		} else {
			$data['shipping_fee_ongkir_geo_zone_id'] = $this->config->get('shipping_fee_ongkir_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['shipping_fee_ongkir_status'])) {
			$data['shipping_fee_ongkir_status'] = $this->request->post['shipping_fee_ongkir_status'];
		} else {
			$data['shipping_fee_ongkir_status'] = $this->config->get('shipping_fee_ongkir_status');
		}

		if (isset($this->request->post['shipping_fee_ongkir_sort_order'])) {
			$data['shipping_fee_ongkir_sort_order'] = $this->request->post['shipping_fee_ongkir_sort_order'];
		} else {
			$data['shipping_fee_ongkir_sort_order'] = $this->config->get('shipping_fee_ongkir_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/shipping/fee_ongkir', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/shipping/fee_ongkir')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}