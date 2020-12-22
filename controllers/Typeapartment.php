<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Typeapartment extends CI_Controller {

 	function __construct(){
    	parent::__construct();
        if(!$this->session->userdata('Id_User'))
        {
            redirect(base_url());
        }   
	}

	public function index()
	{
		redirect('typeapartment/type_apartment');
	}
	public function type_apartment()
	{ 
	$data['getRecord'] = $this->db->get('cat_type_apartment')->result();
    $this->load->view('category/type_apartment/index',$data);
    
	}
    public function add()
    {
    	$this->load->view('category/type_apartment/add');
    }
    public function insert(){
    	$data = array(
    		'Type_Apartment' => $this->input->post('Type_Apartment') 
    	);
    	$this->db->insert('cat_type_apartment',$data);
    	redirect('typeapartment/type_apartment');
    }
    public function delete($Id_Cat_Type_Apartment)
    {
    	$this->db->where('Id_Cat_Type_Apartment',$Id_Cat_Type_Apartment);
    	$this->db->delete('cat_type_apartment');
    	redirect('typeapartment/type_apartment');
    }
    // Edit Function
    public function edit($Id_Cat_Type_Apartment)
    {
    	$this->db->where('Id_Cat_Type_Apartment',$Id_Cat_Type_Apartment);
    	$data['edit'] = $this->db->get('cat_type_apartment')->row();
    	$this->load->view('category/type_apartment/edit',$data);
    }
    public function update()
    {
    	$data = array(
    		'Type_Apartment' => $this->input->post('Type_Apartment') 
    	);
    	$this->db->where('Id_Cat_Type_Apartment',$this->input->post('Id_Cat_Type_Apartment'));
    	$this->db->update('cat_type_apartment',$data);
    	redirect('typeapartment/type_apartment');
    }
    // End Edit Function
    
    

	
	
}
?>