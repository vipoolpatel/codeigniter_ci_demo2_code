<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

 	function __construct(){
    	parent::__construct();   
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}
	}

	public function index()
	{
		redirect('area/area');
	}
	public function area()
	{
		$data['getRecord'] = $this->db->get('cat_area')->result();

    $this->load->view('category/area/index',$data);
    
	}
	public function add()
	{
		$this->load->view('category/area/add');
	}

	/// Indser database query

	public function insert()
	{
		$data = array(
		'Area' =>$this->input->post('Area'),

	   );
		$this->db->insert('cat_area',$data);
		redirect('area/area');
	}

	// end Insert database query


	// edit query 

	   public function edit($Id_Cat_Area)
	   {

		 
		$this->db->where('Id_Cat_Area',$Id_Cat_Area);
		$data['edit'] = $this->db->get('cat_area')->row();
		$this->load->view('category/area/edit',$data);
	  }


	 public function update()
	 {

		$data = array( 
			'Area' => $this->input->post('Area')
		
		

		);
		 $this->db->where('Id_Cat_Area',$this->input->post('Id_Cat_Area')); 
        $this->db->update('cat_area',$data); 
      	redirect('area/area');
	}

    // end edit query 

   //  delete function Start


 	public function delete($Id_Cat_Area)
	{

		$this->db->where('Id_Cat_Area',$Id_Cat_Area); 
        $this->db->delete('cat_area'); 
      	redirect('area/area');
	}

	// end delete function End

	
	
}
?>
