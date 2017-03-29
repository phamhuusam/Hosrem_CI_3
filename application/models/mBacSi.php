<?php
class MBacSi extends CI_Model {
	public function count_all() {
		return $this->db->count_all('bacsi');
	}
	public function listall_Danhba() {
		$this->db->flush_cache();
		$this->db->select('bacsi.*');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');		
		$this->db->where('tinhtrang.id', 1);
		$query = $this->db->get();
		return $query->result_array();
	}	

	public function listall() {
		$this->db->flush_cache();
		$this->db->select('bacsi.*,NgayCapNhatTinhTrang, LyDoTuChoi, FullName');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('nguoidung', 'nguoidung.id = chitietbacsi_tinhtrang.NguoiDuyet');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listall_ChuaDuyet() {

		$this->db->select('bacsi.*,NgayCapNhatTinhTrang, LyDoTuChoi, FullName'); // chỉ lấy trong bảng bacsi
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('nguoidung', 'nguoidung.id = chitietbacsi_tinhtrang.NguoiDuyet');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');

		$this->db->where('tinhtrang.id', 2);
		$this->db->where('FlagHienTai', 1); // chỉ lấy quá trình hiện tại (không lấy quá trình ở quá khứ)
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listall_DaDuyet() {

		$this->db->select('bacsi.*,NgayCapNhatTinhTrang, LyDoTuChoi, FullName');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('nguoidung', 'nguoidung.id = chitietbacsi_tinhtrang.NguoiDuyet');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$this->db->where('tinhtrang.id', 1);
		$this->db->where('FlagHienTai', 1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listall_Treo() {

		$this->db->select('bacsi.*,NgayCapNhatTinhTrang, LyDoTuChoi, FullName');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('nguoidung', 'nguoidung.id = chitietbacsi_tinhtrang.NguoiDuyet');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$this->db->where('tinhtrang.id', 3);
		$this->db->where('FlagHienTai', 1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listall_KhongDuyet() {

		$this->db->select('bacsi.*,NgayCapNhatTinhTrang, LyDoTuChoi, FullName');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('nguoidung', 'nguoidung.id = chitietbacsi_tinhtrang.NguoiDuyet');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$this->db->where('tinhtrang.id', 4);
		$this->db->where('FlagHienTai', 1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function UpdateTinhTrang($data) {
		//trước khi upate data vào set cờ = flase cho tình trạng trước
		$data_1 = array(
			'FlagHienTai' => 0,
		);
		$this->db->where('bacsi', $data['bacsi']);
		$this->db->update('chitietbacsi_tinhtrang', $data_1);
		//sau đó insert record mới vào.  với cái cờ check là hiện tại
		$this->db->insert('chitietbacsi_tinhtrang', $data);
	}
	public function InsertDanhba($data){
		$this->db->insert('bacsi',$data);
		$id=$this->db->insert_id();		
		$data_2 = array(
			'FlagHienTai' => 1,
			'bacsi'=>$id,
			'NgayCapNhatTinhTrang'=>date("Y-m-d"),
			'TinhTrang'=>2,
			'NguoiDuyet'=>1
		);
		$this->db->insert('chitietbacsi_tinhtrang', $data_2);		
	}
}
?>