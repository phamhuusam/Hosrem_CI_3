<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class template_back_end {

	var $obj;
	var $layout;

	function template_back_end($layout = "") {
		// load thư viện
		$this->obj = &get_instance();
		$this->layout = $layout;
		$this->obj->load->helper(array('form', 'url'));
		$this->obj->load->library('form_validation');
		$this->obj->load->library('pagination');
		$this->obj->load->helper("url");
		$this->obj->load->library('session');

	}

	function setLayout($layout) {
		$this->layout = $layout;
	}

	function view($view, $data = null, $return = false) {

		//coi chừng bị loop
		if ($view != 'back_end/login') {
			$sess = $this->obj->session->userdata('users_Id');
			if ($sess == null) {
				redirect('admin/login');
			}
		}

		$loadedData = array();
		$loadedData['content_for_layout'] = $this->obj->load->view($view, $data, true);

		//---------------------------------------- load giỏ hàng -----------------------------------------

		//$data['dataShop'] = $this->getProductInShoppingCart();
		//$loadedData['content_for_viewCart'] = $this->obj->load->view('frontend/small_cart',$data,true);

		//---------------------------------------- load login -----------------------------------------
		if ($return) {
			$output = $this->obj->load->view($this->layout, $loadedData, true);
			return $output;
		} else {
			$this->obj->load->view($this->layout, $loadedData, false);
		}
	}
}