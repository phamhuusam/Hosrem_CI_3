<?php
class MBacSi extends CI_Model {
	public function count_all() {
		return $this->db->count_all('bacsi');
	}

	public function listall() {
		$query = $this->db->get('bacsi');
		return $query->result_array();
	}
}
?>