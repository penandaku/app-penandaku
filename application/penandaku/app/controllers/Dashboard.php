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
			$data = array ('title' => ' <i class="pe-7s-graph"></i> Dashboard',
				'dashboard' => TRUE
				);
			$this->load->view('part/header', $data);
			$this->load->view('part/sidebar');
			$this->load->view('part/navbar');
			$this->load->view('layout/v_dashboard');
			$this->load->view('part/footer');
			
		}else{

			redirect('login');
		}
		
		
	}

	public function list_member()
	{
		$data = array ( 'title' => '<i class="pe-7s-server"></i> Data Member',
			'member' => TRUE
			);
		$this->load->view('part/header',$data);
		$this->load->view('part/sidebar');
		$this->load->view('part/navbar');
		$this->load->view('layout/v_listmember');
		$this->load->view('part/footer');
	}

	public function profile()
	{
		$data = array ( 'title' => '<i class="pe-7s-user"></i> Profile',
			'profile' => TRUE
			);
		$this->load->view('part/header', $data);
		$this->load->view('part/sidebar');
		$this->load->view('part/navbar');
		$this->load->view('layout/v_profile');
		$this->load->view('part/footer');
	}

	function logout()
	{
		$this->user->logout();
		redirect(base_url('login'));

	}
}

/* End of file Dashboard.php */
/* Location: ./application/penandaku/app/controllers/Dashboard.php */