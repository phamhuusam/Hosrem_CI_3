<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
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
		$this->load->helper(array('form'));
		$this->template_back_end->view('back_end/login');
	}

	public function verifylogin() {

		//This method will have the credentials validation
	   $this->load->library('form_validation');
	 
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	 
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	     $this->template_back_end->view('back_end/login');
	   }
	   else
	   {
	     //Go to private area
	     redirect('home', 'refresh');
	   }

	}
}
