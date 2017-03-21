<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	// hàm khởi tạo để load tất cả module cần thiết
	public function __construct() {
		parent::__construct();
		//load file
		$this->load->Model("MBacSi");

		$this->load->helper("url");
		$this->load->library("template_back_end");
		$this->template_back_end->setLayout("template_back_end/main"); // load file layout chính (view/template_front_end/main)
	}

	public function index() {

		$data['dsBacSi'] = $this->MBacSi->listall();
		$this->template_back_end->view("back_end/home", $data);
	}
}
