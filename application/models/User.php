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

	function list_member()
	{
		$member = $this->db->get('tbl_member');
		return $member ;
	}

	function user_id()
	{
		return $this->session->userdata('user_id');
	}

	function name()
	{
		return $this->session->userdata('name');
	}

	function username()
	{
		return $this->session->userdata('username');
	}

	function password()
	{
		return $this->session->userdata('password');
	}

	function email()
	{
		return $this->session->userdata('email');
	}

	function logout()
	{
		$this->session->sess_destroy();
	}
}

/* End of file User.php */
/* Location: ./application/models/User.php */