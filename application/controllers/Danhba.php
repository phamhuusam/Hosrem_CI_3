<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Danhba extends CI_Controller {
	// hàm khởi tạo để load tất cả module cần thiết
	public function __construct() {
		parent::__construct();
		$this->load->Model("MBacSi");
		$this->load->helper("url");
		$this->load->library("template_front_end");
		$this->template_front_end->setLayout("template_front_end/main"); // load file layout chính (view/template_front_end/main)
	}

	public function index() {
		$this->template_front_end->view("front_end/home");
	}
	public function dangky() {
		$this->load->helper('form');
		$this->load->library("form_validation");
		if($this->input->post("submit")){
			$this->form_validation->set_rules('cauchamngon', 'Câu châm ngôn yêu thích', 'required');
			$this->form_validation->set_message('required', '%s không được để trống.');
			
			if($this->form_validation->run()){
				$data=array(
					"CauChamNgon"=>$this->input->post("cauchamngon"),
					"Ten"=>$this->input->post("hoten")
					);
					$this->MBacSi->InsertDanhba($data);
			}
			
		}
		$this->template_front_end->view("front_end/dangky");
	}

	public function danhsach() {
		$this->template_front_end->view("front_end/danhsach");
	}
}
