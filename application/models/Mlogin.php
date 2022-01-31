<?php

class Mlogin extends CI_Model{

	public function cek_login($u, $p){
		$q = $this->db->get_where('tbl_member', array('username' => $u, 'passwd' => $p));
		return $q;
	}

	public function cek_user($u, $p){
		$q = $this->db->get_where('tbl_member', array('userName' => $u, 'passwd' => $p));
		return $q;
	}

	public function lvl($where){
		return $this->db->get_where('tbl_admin',array('userName' => $where));
	}
}