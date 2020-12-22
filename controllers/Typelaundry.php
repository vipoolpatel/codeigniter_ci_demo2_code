<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Typelaundry extends CI_Controller {

 	function __construct(){
    	parent::__construct();  
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	} 
	}

	public function index()
	{
		redirect('typelaundry/type_laundry');
	}
	public function type_laundry()
	{
    $data['getRecord'] = $this->db->get('cat_type_laundry')->result();
    $this->load->view('category/type_laundry/index',$data);
    }
 
 	public function add()
 	{
 		$this->load->view('category/type_laundry/add');
 	}

	public function delete($Id_Type_Laundry)
	{
		$this->db->where('Id_Type_Laundry',$Id_Type_Laundry);
		$this->db->delete('cat_type_laundry');
		redirect('typelaundry/type_laundry');
	}

	public function insert()
	{
		$data = array(
     'Type_Laundry' => $this->input->post('Type_Laundry')
		);
		$this->db->insert('cat_type_laundry', $data);
		redirect('typelaundry/type_laundry');
	}

	public function edit($Id_Type_Laundry)
	{
		$this->db->where('Id_Type_Laundry',$Id_Type_Laundry);
		$data['edit'] = $this->db->get('cat_type_laundry')->row();
		$this->load->view('category/type_laundry/edit',$data);
	}
	 public function update()
	 {

		$data = array( 
			'Type_Laundry' => $this->input->post('Type_Laundry')
		
		

		);
		 $this->db->where('Id_Type_Laundry',$this->input->post('Id_Type_Laundry')); 
        $this->db->update('cat_type_laundry',$data); 
      	redirect('typelaundry/type_laundry');
	}

    
    

	
	
}
?>