<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_requirement extends CI_Controller {

 	function __construct(){
    	parent::__construct(); 
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}  
	}

	public function index()
	{
		redirect('status_requirement/status_requirement_list');
	}

	public function status_requirement_list()
	{
		 $data['getRecord'] = $this->db->get('status_requirement')->result();
		$this->load->view('requirement_apartment/status_requirement/index',$data);
	}


	public function add_status_requirement()
	{
		 
		$this->load->view('requirement_apartment/status_requirement/add');
	}

 //    public function edit_status_requirement()
	// {
		 
	// 	$this->load->view('requirement_apartment/status_requirement/edit');
	// }
				

	public function insert()
	{
		$data = array(
       'Status_Requirement' => $this->input->post('Status_Requirement'),
       'Description' => $this->input->post('Description')
     
		);
		 $this->db->insert('status_requirement',$data); 
          // print_r($this->db->last_query());
		redirect('status_requirement/status_requirement_list');
	}

	public function delete($Id_Status_Requirement)
	{

		$this->db->where('Id_Status_Requirement',$Id_Status_Requirement); 
        $this->db->delete('status_requirement'); 
      	redirect('status_requirement/status_requirement_list');
	}

	public function edit_status_requirement($Id_Status_Requirement)
	{

		$this->db->where('Id_Status_Requirement',$Id_Status_Requirement); 
		$data['edit_status_requirement'] = $this->db->get('status_requirement')->row(); 
		$this->load->view('requirement_apartment/status_requirement/edit',$data);
	}


	public function update()
	{
		// echo "<pre>";
		// print_r($_POST);
		// die;

		$data = array( 
        'Status_Requirement' => $this->input->post('Status_Requirement'),
        'Description' => $this->input->post('Description')      
         ); 
	
		$this->db->where('Id_Status_Requirement',$this->input->post('Id_Status_Requirement')); 
        $this->db->update('status_requirement',$data); 


      	redirect('status_requirement/status_requirement_list');
	}

	
	

}
?>