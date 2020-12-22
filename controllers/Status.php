<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

 	function __construct(){
    	parent::__construct();  
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	} 
	}

	public function index()
	{

		redirect('status/status_property');
	}
	public function status_property()
	{
 		$data['getRecord'] = $this->db->get('status_property')->result();		
	    $this->load->view('apartment/status_property/index',$data);
    
	}

	// public function status()
	// {

		 // $data['getRecord'] = $this->db->get('status_property')->result();
		// $this->load->view('shift/view_shift',$data);
	// 	$this->load->view('apartment/status_property');
	// }
	 public function add()
	  {
		
	    $this->load->view('apartment/status_property/add');

     }
     public function insert()
	{
				$data = array(
			'Status_Property' => $this->input->post('Status_Property'),
			'Description' => $this->input->post('Description'),
		
		
		
		);
		 $this->db->insert('status_property',$data); 
         // print_r($this->db->last_query());
		redirect('status/status_property');
	}


	public function delete($Id_Status_Property)
	{

		$this->db->where('Id_Status_Property',$Id_Status_Property); 
        $this->db->delete('status_property'); 
      	redirect('status/status_property');
	}


    public function edit($Id_Status_Property){
		$this->db->where('Id_Status_Property',$Id_Status_Property);
		$data['edit'] = $this->db->get('status_property')->row();
		$this->load->view('apartment/status_property/edit',$data);
	}


	 public function update()
	 {

		$data = array( 
				'Status_Property' => $this->input->post('Status_Property'),
			'Description' => $this->input->post('Description'),
		

		);
		 $this->db->where('Id_Status_Property',$this->input->post('Id_Status_Property')); 
        $this->db->update('status_property',$data); 
      	redirect('status/status_property');
	}


 }
 ?>