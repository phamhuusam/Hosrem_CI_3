<?php

Class MUser extends CI_Model {
	function login($username, $password) {
		$this->db->select('*');
		$this->db->from('nguoidung');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}
}

?>