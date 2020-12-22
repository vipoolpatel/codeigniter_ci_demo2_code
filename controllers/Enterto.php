<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enterto extends CI_Controller {

 	function __construct(){
    	parent::__construct();  
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	} 
	}

	public function index()
	{
		redirect('enterto/enter_to');
	}
	public function enter_to()
	{
     $data['getRecord'] = $this->db->get('cat_enter_to')->result();
    $this->load->view('category/enter_to/index',$data);
    
	}

    public function add()
    {
    	$this->load->view('category/enter_to/add');
    }

    public function insert()
    {
    	$data = array(
    'Enter_To' => $this->input->post('Enter_To')
    	);
    	$this->db->insert('cat_enter_to',$data);
    	redirect('enterto/enter_to');
    }

    public function delete($Id_Enter_To)
    {
    	$this->db->where('Id_Enter_To',$Id_Enter_To);
    	$this->db->delete('cat_enter_to');
    	redirect('enterto/enter_to');
    }
    
   
	// edit query

	   public function edit($Id_Enter_To)
	   {

		 
		$this->db->where('Id_Enter_To',$Id_Enter_To);
		$data['edit'] = $this->db->get('cat_enter_to')->row();
		$this->load->view('category/enter_to/edit',$data);
	  }


	 public function update()
	 {

		$data = array( 
			'Enter_To' => $this->input->post('Enter_To')
		
		

		);
		 $this->db->where('Id_Enter_To',$this->input->post('Id_Enter_To')); 
        $this->db->update('cat_enter_to',$data); 
      	redirect('enterto/enter_to');
	}

    // end edit query
	
}
?>