<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load library 
		$this->load->library('form_validation');

		//load model
		$this->load->model('user');
	}

	public function index()
	{	
		//jika session sudah terdaftar 
		if (!empty($this->session->userdata('user_id'))) {
			//dialihkan ke dashboad
			redirect('dashboard');
			
		}else{
			

			//form validation
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			//pesan from validation 
			$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  					</button>
  					<strong><i class="fa fa-times-circle"></i> Warning!</strong> {field} Harus Diisi.
			  		</div>');

			//cek validasi form
			if ($this->form_validation->run() == TRUE) {

				//get form 
				$username = $this->input->post('username', TRUE);
				$password = SHA1(MD5(MD5(SHA1($this->input->post('password', TRUE)))));
				/*print_r($username);
				print_r($password);
				exit(); */
				
				//check data dari model
				$check = $this->user->login('tbl_user', array('username' => $username), array('password' => $password));
				if ($check != FALSE ) {

					foreach ($check as $user) {

						$this->session->set_userdata(array(
                  			'user_id' 	=> $user->id_user,
                  			'username'  => $user->username,
                  			'password'  => $user->password,
                  			'name'      => $user->nama_user,
                  			'email'		=> $user->email
              				));

						//print_r($_SESSION['user_id']);
						//exit();	
              			}


              			redirect('dashboard');
              			
					}else{

						$data = array('title' => 'Login &rsaquo; Penandaku');
						$this->load->view('v_login', $data);

					}

			}else{
				$data = array('title' => 'Login &rsaquo; Penandaku');
				$this->load->view('v_login', $data);

				
			}			
						
		}
	}

}

/* End of file Login.php */
/* Location: ./application/penandaku/app/controllers/Login.php */