<?php
class ControllerExtensionModulePointSystem extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/point_system');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		$data['user_token'] = $this->session->data['user_token'];

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			
			$this->model_setting_setting->editSetting('module_point_system', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));

		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['reward_point'])) {
			$data['error_reward_point'] = $this->error['reward_point'];
		} else {
			$data['error_reward_point'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/point_system', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/point_system', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_point_system_reward'])) {
			$data['module_point_system_reward'] = $this->request->post['module_point_system_reward'];
		} else if($this->config->get('module_point_system_reward')){
			$data['module_point_system_reward'] = $this->config->get('module_point_system_reward');
		}else {
			$data['module_point_system_reward'] = 10;
		}

		if (isset($this->request->post['module_point_system_status'])) {
			$data['module_point_system_status'] = $this->request->post['module_point_system_status'];
		} else {
			$data['module_point_system_status'] = $this->config->get('module_point_system_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/point_system', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/point_system')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['module_point_system_reward']) < 1) || (utf8_strlen($this->request->post['module_point_system_reward']) > 64)) {
			$this->error['reward_point'] = $this->language->get('error_reward_point');
		}

		return !$this->error;
	}
}
