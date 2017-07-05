<?php

class Auth_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	public function check_store($store_email) {
		$q = 'select * from stores where store_email = "'.strtolower($store_email).'"';
		return $this->db->query($q)->result_array();
	}
	public function new_store($req) {
		$q = 'INSERT INTO stores(store_name, store_email, store_password, store_key) VALUES ("'.$req['store_name'].'","'.$req['store_email'].'","'.$req['store_password'].'","'.$req['store_key'].'")';
		$this->db->query($q);
	}
	public function login($email, $pass) {
		$q = 'select * from stores where store_email ="'.$email.'" and store_password="'.pwd($pass).'"';
		return $this->db->query($q)->row_array();
	}
}