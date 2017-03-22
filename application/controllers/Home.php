<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	// hàm khởi tạo để load tất cả module cần thiết
	public function __construct() {
		parent::__construct();

		$this->load->helper("url");
		$this->load->library("template_front_end");
		$this->template_front_end->setLayout("template_front_end/main"); // load file layout chính (view/template_front_end/main)
	}

	public function index() {
		$this->template_front_end->view("front_end/home");
	}

}
