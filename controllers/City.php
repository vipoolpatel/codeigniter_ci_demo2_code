<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {

 	function __construct(){
    	parent::__construct();   
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}
	}

	public function index()
	{
		redirect('city/city');
	}
	public function city()
	{
     $data['getRecord'] = $this->db->get('cat_city')->result();
    $this->load->view('category/city/index',$data);
    
	}
	public function add()
	{
    $this->load->view('category/city/add');
	}


   // Insert Data base Query
	public function insert()
	{
		$data = array(

		'City' => $this->input->post('City'),
	);
		$this->db->insert('cat_city',$data);
		redirect('city/city');
	}

	// End Insert Data base Query

	// Delete query
     public function delete($Id_Cat_City)
     {
     	$this->db->where('Id_Cat_City',$Id_Cat_City);
     	$this->db->delete('cat_city');
     	redirect('city/city');
     }
    // End Delete query
  


	

   public function edit($Id_Cat_City)
	   {

		 
		$this->db->where('Id_Cat_City',$Id_Cat_City);
		$data['edit'] = $this->db->get('cat_city')->row();
		$this->load->view('category/city/edit',$data);
	  }


	 public function update()
	 {

		$data = array( 
			'City' => $this->input->post('City')
		
		

		);
		 $this->db->where('Id_Cat_City',$this->input->post('Id_Cat_City')); 
        $this->db->update('cat_city',$data); 
      	redirect('city/city');
	}
	
	
	
}
?>