<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Zone extends CI_Controller {

 	function __construct(){
    	parent::__construct(); 
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}  
	}

	public function index()
	{
		redirect('zone/zone');
	}
	public function zone()
	{

    $data['getRecord'] = $this->db->get('cat_zone')->result();
    $this->load->view('category/zone/index',$data);
    
	}
    public function add()
    {
    $this->load->view('category/zone/add');
    }
       

 	public function insert()
	{
		$data = array(

		'Zone' => $this->input->post('Zone'),
	);
		$this->db->insert('cat_zone',$data);
		redirect('zone/zone');
	}

	//  Delete qurey
     public function delete($Id_Zone)
     {
      $this->db->where('Id_Zone',$Id_Zone);
      $this->db->delete('cat_zone');
      redirect('zone/zone');
     }
     
	// End Delete Qurey
	

	//  edit and update function

   
   public function edit($Id_Zone)
	   {

		 
		$this->db->where('Id_Zone',$Id_Zone);
		$data['edit'] = $this->db->get('cat_zone')->row();
		$this->load->view('category/zone/edit',$data);
	  }


	 public function update()
	 {

		$data = array( 
			'Zone' => $this->input->post('Zone')
		
		

		);
		 $this->db->where('Id_Zone',$this->input->post('Id_Zone')); 
        $this->db->update('cat_zone',$data); 
      	redirect('zone/zone');
	}

	
   // End   edit and update function
	
   

}
?>