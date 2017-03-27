<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	// hàm khởi tạo để load tất cả module cần thiết
	public function __construct() {
		parent::__construct();
		//load file
		$this->load->Model("MBacSi");
		$this->load->Model("MUser");
		$this->load->helper("url");
		$this->load->library("template_back_end");
		$this->template_back_end->setLayout("template_back_end/main"); // load file layout chính (view/template_front_end/main)

	}
	// Controller mặc định cho trang chủ
	public function index($msg = NULL) {
		$data['msg'] = $msg;
		$data['title'] = 'Đăng Nhập Trang Admin';
		if (isset($_REQUEST["username"])) {
			$Username = $_REQUEST["username"];
			$Password = $_REQUEST['password'];
			$result = $this->MUser->login($Username, $Password);

			if (!$result) {
				$msg = "<div class='error'>Username hay Password không đúng</div>";
				$data['msg'] = $msg;
				$this->template_back_end->view('back_end/login', $data);
			} else {
				$dataLogin = array(
					'users_Id' => $result->Id,
					'users_FullName' => $result->FullName,
					'users_LoaiNguoiDung' => $result->LoaiNguoiDung,
				);
				$this->session->set_userdata($dataLogin);
				redirect('/admin/home', 'refresh');
			}

		} else {
			$this->template_back_end->view('back_end/login', $data);
		}
	}

	public function do_logout() {
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
