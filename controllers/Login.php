<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 	function __construct(){
    	parent::__construct();  
    	
    	 
	}
	public function logout()
	{

		 $this->session->unset_userdata('Id_User');
		 $this->session->unset_userdata('Username');
		 return redirect('login');
	}




	public function index()
	{
		if($this->session->userdata('Id_User'))
    	{
    		redirect('dashboard');
    	}
    	
		$this->load->view('login/login');
	}

	public function authenticate()
	{
		$data['title'] = 'CodeIgniter Simple Login Form With Sessions';
		$this->load->view("login", $data);
	}
	public function login_validation()
	{
		// $this->load->view('dashboard/index');

  

		// redirect('http://localhost/ci_demo2');
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('Username', 'Username', 'required');
		 $this->form_validation->set_rules('Password', 'Password', 'required');
		 if($this->form_validation->run())
		 {
		 	 
			// true
			$Username = $this->input->post('Username');
			$Password = $this->input->post('Password');
			// model function
			$this->load->model('Main_model');

			$getdata   = $this->Main_model->can_login($Username, $Password);
			// print_r($getdata);
			// die;
			if($getdata)
			{
				$sessions_data = array(
					'Username' => $Username,
					'Id_User' => $getdata->Id_User
				);

				$this->session->set_userdata($sessions_data);
				 redirect(base_url() . 'dashboard');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect(base_url() . 'login/');
			}
		}
		else
		{
			// false
			$this->login();

		}
	}
	
     // function enter(){
     // 	if($this->session->userdata('Username') != '')
     // 	{
     // 		echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
     // 		echo '<label> <a href="'.base_url().'login/logout">Logout</a></label>';
     // 	}
     // 	else
     // 	{
     // 		redirect(base_url() . 'login/login');
     // 	}
     // }

     // public function logout()
     // {
     // 	// if( ! $this->session->unset_userdata('Id_User'));
     // 	 $this->session->unset_userdata('Id_User');
     // 	// return redirect(base_url(). 'login');
     // 	 redirect(base_url(). 'login');
     // }

     //   function logout()
     // {
     // 	$this->session->session_destroy('Id_User');
     // 	// return redirect(base_url(). 'login');
     // 	redirect('login');
     // }
}
?>