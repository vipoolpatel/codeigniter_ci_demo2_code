<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Brokerin extends CI_Controller {

	function __construct(){
		parent::__construct();   
		if(!$this->session->userdata('Id_User'))
		{
			redirect(base_url());
		}
	}

	public function index()
	{
		redirect('brokerin/broker_in');
	}

//select query index file _list

	public function broker_in()
	{
		
		$data['getRecord'] = $this->db->get('broker_in')->result();
		$this->load->view('apartment/broker_in/index',$data);
		
	}




// end  select query index file _list
	public function add()
	{
		
		$this->load->view('apartment/broker_in/add');

	}

        // insert database qurty


	public function insert()
	{
		$data = array(
			'Name' => $this->input->post('Name'),
			'Email' => $this->input->post('Email'),
			'Phone' => $this->input->post('Phone'),
			'Created_Date' => date('Y-m-d H:i:s'),
		);
		$this->db->insert('broker_in',$data); 
         // print_r($this->db->last_query());
		redirect('brokerin/broker_in');
	}

     // end indsert database query


	// Delete query
	public function delete($Broker_In){
		$this->db->where('Broker_In',$Broker_In);
		$this->db->delete('broker_in');
		redirect('brokerin/broker_in');


	}

     // End Delete Query
 // edite function
	public function edit($Broker_In){
		$this->db->where('Broker_In',$Broker_In);
		$data['edit'] = $this->db->get('broker_in')->row();
		$this->load->view('apartment/broker_in/edit',$data);
	}


	public function update()
	{

		$data = array( 
			'Name' => $this->input->post('Name'),
			'Email' => $this->input->post('Email'),
			'Phone' => $this->input->post('Phone'),
			'Created_Date' => date('Y-m-d H:i:s'),
			

		);
		$this->db->where('Broker_In',$this->input->post('Broker_In')); 
		$this->db->update('broker_in',$data); 
		redirect('brokerin/broker_in');
	}

	// and edit function
	
	
}
?>
