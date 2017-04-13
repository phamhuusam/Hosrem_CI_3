<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Danhba extends CI_Controller {
	// hàm khởi tạo để load tất cả module cần thiết
	public function __construct() {
		parent::__construct();
		$this->load->Model("MBacSi");
		$this->load->Model("MTinhThanh");
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
		$default_order = 0;
		if ($this->input->post("submit")) {
			//$this->form_validation->set_rules('hoten', 'Họ và tên', 'required');
			//$this->form_validation->set_message('required', '%s không được để trống.');
			//$this->form_validation->set_rules('donvicongtac', 'Đơn vị công tác hiện tại', 'required');
			//$this->form_validation->set_message('required', '%s không được để trống.');
			//$this->form_validation->set_rules('dt', 'Điện thoại', 'required|numeric|min_length[7]|max_length[12]');
			//$this->form_validation->set_message('required', '%s không được để trống.');
			//$this->form_validation->set_message('numeric', '%s không đúng định dạng.');
			//$this->form_validation->set_message('min_length', '%s không được dưới %d kí tự.');
			//$this->form_validation->set_message('max_length', '%s không được vượt quá %d kí tự.');
			//$this->form_validation->set_rules('email', 'Địa chỉ email', 'required|valid_email');
			//$this->form_validation->set_message('required', '%s không được để trống.');
			//$this->form_validation->set_message('valid_email', '%s không đúng định dạng.');
			//$this->form_validation->set_rules('quatrinhhoctap', 'Quá trình học tập', 'required');
			//$this->form_validation->set_message('required', '%s không được để trống.');
			//$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
			//if ($this->form_validation->run()) {
			$data = array(
				"CauChamNgon" => $this->input->post("cauchamngon"),
				"Ten" => $this->input->post("hoten"),
				"DienThoai" => $this->input->post("dt"),
				"Email" => $this->input->post("email"),
				"Facebook" => $this->input->post("facebook"),
				"DonViCongTac" => $this->input->post("donvicongtac"),
				"Tinh" => $this->input->post("TinhThanh"),
				"NamSinh" => $this->input->post("namsinh"),
				"GioiTinh" => $this->input->post("gioitinh"),
				"ShowPrivateInfo" => $this->input->post("showhide"),
				"QuaTrinhHocTapVaCongTac" => $this->input->post("quatrinhhoctap"),
				"KinhNghiemCongTac" => $this->input->post("kinhnghiemcongtac"),
				"BaiVietChuyenNganh" => $this->input->post("baivietchuyennganh"),
				"CongTacBaoCao" => $this->input->post("congtacbaocao"),
				"NghienCuuNoiBat" => $this->input->post("nghiencuunoibat"),
				"HinhAnh" => $this->input->post("txtImage"),
				"Display" => 1,
			);
			$this->MBacSi->InsertDanhba($data);
			redirect("danhba/success#");
			//}

		}
		$TinhThanh = $this->MTinhThanh->listall_Tinhthanh();
		//convert here
		$TinhThanhConvert = [];
		$TinhThanhConvert[0] = "----- Chọn tỉnh thành -----";
		foreach ($TinhThanh as $key => $value) {
			$TinhThanhConvert[$value["Id"]] = $value["TenTinh"];
		}
		$data['TinhThanh'] = $TinhThanhConvert;
		$this->template_front_end->view("front_end/dangky", $data);
	}

	public function danhsach() {
		$data['danhsach_Bacsi'] = $this->MBacSi->listall_Danhba();
		$this->template_front_end->view("front_end/danhsach", $data);
	}
	public function success() {
		$this->template_front_end->view("front_end/success");
	}

	public function UploadFile() {
		$data = $_POST['image'];
		list($type, $data) = explode(';', $data);
		list(, $data) = explode(',', $data);
		$data = base64_decode($data);
		$imageName = time() . '.png';
		file_put_contents(dirname(__DIR__) . '/../public/images/hinh_bacsi/' . $imageName, $data);
		echo $imageName;
	}
	public function Search() {
		$key = $_POST['keys'];
		$data['danhsach_Bacsi'] = $this->MBacSi->listall_Danhba_by_key($key);
		$this->template_front_end->view("front_end/danhsach", $data);

	}
}
