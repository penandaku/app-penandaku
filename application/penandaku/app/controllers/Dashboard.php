<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		if ($this->user->user_id()) 
		{
			$this->load->view('v_dashboard');
			
		}else{
			redirect('login');
		}
		
		
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));

	}
}

/* End of file Dashboard.php */
/* Location: ./application/penandaku/app/controllers/Dashboard.php */