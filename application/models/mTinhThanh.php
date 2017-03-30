<?php
class MTinhThanh extends CI_Model {
	public function listall_Tinhthanh() {
		$this->db->flush_cache();
		$this->db->select('tinhthanh.Id,tinhthanh.TenTinh');
		$this->db->from('tinhthanh');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>

