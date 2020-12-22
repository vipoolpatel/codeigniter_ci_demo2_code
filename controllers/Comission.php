<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comission extends CI_Controller {

 	function __construct(){
    	parent::__construct(); 
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}  
	}

	public function index()
	{
		redirect('comission/comission_type');
	}
	public function comission_type()
	{
		$data['getRecord'] = $this->db->get('cat_comission_type')->result();

    $this->load->view('category/comission_type/index',$data);
    
	}
	public function add()
	{
		$this->load->view('category/comission_type/add');
	}

   // Insert Query database

	public function insert()
	{
		$data = array(
      'Comission_Type' => $this->input->post('Comission_Type'),
		);
		$this->db->insert('cat_comission_type',$data);
		 redirect('comission/comission_type'); 
	}
	// End Insert Query database
    
    // Delete Query
	public function delete($Id_Cat_Comission_Type)
	{
     $this->db->where('Id_Cat_Comission_Type', $Id_Cat_Comission_Type);
     $this->db->delete('cat_comission_type');
     redirect('comission/comission_type');
	}
    // End Delete Query
    
    // Edit query fanction
     public function edit($Id_Cat_Comission_Type)
     {
     	$this->db->where('Id_Cat_Comission_Type',$Id_Cat_Comission_Type);
     	$data['edit'] = $this->db->get('cat_comission_type')->row();

     	$this->load->view('category/comission_type/edit',$data);
     }
     public function update()
     {
     	$data = array(
 	'Comission_Type' => $this->input->post('Comission_Type')
     	);
     	$this->db->where('Id_Cat_Comission_Type', $this->input->post('Id_Cat_Comission_Type'));
     	$this->db->update('cat_comission_type', $data);
     	redirect('comission/comission_type');
     }

 

    // End Edit query fanction

	
	
}
?>