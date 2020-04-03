<?php
class ControllerApiCustom extends Controller {
  public function index() {
    $this->load->language('api/custom');
    $json = array();
 
    if (!isset($this->session->data['api_id'])) {
      $json['error']['warning'] = $this->language->get('error_permission');
    } else {
      // load model
      $this->load->model('catalog/product');
 
      // get products
      $products = $this->model_catalog_product->getProducts();
      $json['success']['products'] = $products;
    }
     
    if (isset($this->request->server['HTTP_ORIGIN'])) {
      $this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
      $this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
      $this->response->addHeader('Access-Control-Max-Age: 1000');
      $this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    }
 
    $this->response->addHeader('Content-Type: application/json');
    $this->response->setOutput(json_encode($json));
  }
}