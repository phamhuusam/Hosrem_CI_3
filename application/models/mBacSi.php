<?php
class MBacSi extends CI_Model {
	public function count_all() {
		return $this->db->count_all('bacsi');
	}

	public function listall() {
		$this->db->flush_cache();
		$this->db->select('bacsi.*');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listall_ChuaDuyet() {
		
		$this->db->select('bacsi.*'); // chỉ lấy trong bảng bacsi
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$this->db->where('tinhtrang.id', 2);
		$this->db->where('FlagHienTai', 1); // chỉ lấy quá trình hiện tại (không lấy quá trình ở quá khứ)
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listall_DaDuyet() {

		$this->db->select('bacsi.*');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$this->db->where('tinhtrang.id', 1);
		$this->db->where('FlagHienTai', 1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listall_Treo() {

		$this->db->select('bacsi.*');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$this->db->where('tinhtrang.id', 3);
		$this->db->where('FlagHienTai', 1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listall_KhongDuyet() {

		$this->db->select('bacsi.*');
		$this->db->from('bacsi');
		$this->db->join('chitietbacsi_tinhtrang', 'bacsi.id = chitietbacsi_tinhtrang.bacsi');
		$this->db->join('tinhtrang', 'tinhtrang.id = chitietbacsi_tinhtrang.tinhtrang');
		$this->db->where('tinhtrang.id', 0);
		$this->db->where('FlagHienTai', 4);
		$query = $this->db->get();
		return $query->result_array();
	}

}
?>