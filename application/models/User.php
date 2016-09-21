<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}	

	function login($table,$field1,$field2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field1);
		$this->db->where($field2);
		$query = $this->db->get();

		if ($query->num_rows() == 0){
			return FALSE;			
		}else{
			return $query->result();
		}
	}

	function user_id()
	{
		$this->session->userdata('user_id');
	}

	function name()
	{
		$this->session->userdata('name');
	}

	function username()
	{
		$this->session->userdata('username');
	}

	function password()
	{
		$this->session->userdata('password');
	}

	function email()
	{
		$this->session->userdata('email');
	}

	function logout()
	{
		$this->session->session_destroy();
	}
}

/* End of file User.php */
/* Location: ./application/models/User.php */