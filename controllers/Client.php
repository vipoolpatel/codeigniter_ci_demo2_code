<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct(){
		parent::__construct();   
		if(!$this->session->userdata('Id_User'))
		{
			redirect(base_url());
		}
	}

	public function index()
	{
		redirect('client/client_list');
	}

	// select query Start

	public function client_list()
	{
		$data['getRecord'] = $this->db->get('client')->result();
		// $this->load->view('shift/view_shift',$data);
		$this->load->view('client/client_list',$data);
	}

    // End select query

	public function add_client()
	{
		
		$this->load->view('client/add_client');
	}

    // insert database query

	public function insert()
	{
		
		

		$data = array(
			'Name' => $this->input->post('Name'),
			'Tel' => $this->input->post('Tel'),
			'Email' => $this->input->post('Email'),
			'Comment' => $this->input->post('Comment'),
			'Creation_Date' => date('Y-m-d H:i:s')
		
		);
		// echo "<pre>";
		//  print_r($data);
		//  die;

		$this->db->insert('client',$data); 
		// echo "<pre>";
  //         print_r($this->db->last_query());
  //         die;
		redirect('client/client_list');
	}

    // end insert database query

	//delete query
	public function delete($Id_Client){
		$this->db->where('Id_Client',$Id_Client);
		$this->db->delete('client');
		redirect('client/client_list');  
	}

    // end //delete query

	// edit query

	public function edit_client($Id_Client){
		$this->db->where('Id_Client',$Id_Client);
		$data['edit_client'] = $this->db->get('client')->row();
		$this->load->view('client/edit_client',$data);
 	//
	}

	public function update()
	{
		$data = array(
			'Name' => $this->input->post('Name'),
			'Tel' => $this->input->post('Tel'),
			'Email' => $this->input->post('Email'),
			'Comment' => $this->input->post('Comment'),
			'Creation_Date' => date('Y-m-d H:i:s')
		);
		$this->db->where('Id_Client',$this->input->post('Id_Client')); 
		$this->db->update('client',$data); 
		redirect('client/client_list');
	}
 	// redirect('client/client_list');
	//  end edit query
}
?>

