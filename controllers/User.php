<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

 	function __construct(){
    	parent::__construct(); 
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}  
	}

	public function index()
	{
		redirect('user/user_list');
	}

	public function user_list()
	{
		 $data['getRecord'] = $this->db->get('user')->result();
		// $this->load->view('shift/view_shift',$data);
		$this->load->view('user/user_list',$data);
	}

	public function add_user()
	{
			$this->load->view('user/add_user');
	}

	
	public function insert()
	{
		$data = array(
'Username' => $this->input->post('Username'),
'Email' => $this->input->post('Email'),
'Password' => $this->input->post('Password'),
'Last_Login' => date('Y-m-d'),
'Creation_Date' => date('Y-m-d')
		);
		 $this->db->insert('user',$data); 
         // print_r($this->db->last_query());
		redirect('user/user_list');
	}

	public function edit_user($Id_User){
		$this->db->where('Id_User',$Id_User);
		$data['edit_user'] = $this->db->get('user')->row();
		$this->load->view('user/edit_user',$data);
	}


	public function update()
	{

		$data = array( 
'Username' => $this->input->post('Username'),
'Email' => $this->input->post('Email'),
'Password' => $this->input->post('Password'),
'Last_Login' => date('Y-m-d'),
'Creation_Date' => date('Y-m-d')

		);
		$this->db->where('Id_User',$this->input->post('Id_User')); 
        $this->db->update('user',$data); 
      	redirect('user/user_list');
	}
	public function delete($Id_User)
	{

		$this->db->where('Id_User',$Id_User); 
        $this->db->delete('user'); 
      	redirect('user/user_list');
	}
}
?>