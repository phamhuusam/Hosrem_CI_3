<?php
class MTinhTrang extends CI_model {
	// đếm tổng số record trong table book
	public function count_all() {
		return $this->db->count_all('tinhtrang');
	}
	public function listall() {
		$query = $this->db->get("tinhtrang");
		return $query->result_array();
	}
}
?>