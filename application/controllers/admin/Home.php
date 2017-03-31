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

		$data['dsBacSi_ChuaDuyet'] = $this->MBacSi->listall_ChuaDuyet();
		$data['dsBacSi_DaDuyet'] = $this->MBacSi->listall_DaDuyet();
		$data['dsBacSi_Treo'] = $this->MBacSi->listall_Treo();
		$data['dsBacSi_KhongDuyet'] = $this->MBacSi->listall_KhongDuyet();

		$this->template_back_end->view("back_end/home", $data);
	}

	public function onUpdateRecord() {
		if (isset($_POST["data"])) {
			$data = $_POST["data"];
			$myArray = json_decode($data);

			$data = array(
				'bacsi' => $myArray->Id,
				'FlagHienTai' => 1,
				'NgayCapNhatTinhTrang' => date('Y-m-d'),
				'NguoiDuyet' => $this->session->userdata('users_Id'),
				'LyDoTuChoi' => $myArray->Value,
			);

			switch ($myArray->Status) {
			case 'DaDuyet':
				$data['TinhTrang'] = 1;
				break;
			case 'Treo':
				$data['TinhTrang'] = 3;
				break;
			case 'KhongDuyet':
				$data['TinhTrang'] = 4;
				break;
			}

			$this->MBacSi->UpdateTinhTrang($data);
		}
		// trả về dữ liệu bằng echo không bằng return;
		echo "true";
	}

	public function onUpdateRecord_2() {//ngu như bò do không tính trước.... đáng lý phải tạo 2 file	
		if (isset($_POST["data"])) {
			$data = $_POST["data"];			
			$myArray = json_decode($data);
			$data = array(
				'Id' => $myArray->Id,
				'Display' => $myArray->Display,
			);
			$this->MBacSi->UpdateBacSi($data);
		}
	}
}
