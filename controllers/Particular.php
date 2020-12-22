<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Particular extends CI_Controller {

 	function __construct(){
    	parent::__construct();   
      if(!$this->session->userdata('Id_User'))
      {
        redirect(base_url());
      }
	}

	        public function index()
	{
	         	redirect('particular/particular');
	}
	public function particular()
	{      $data['getRecord'] = $this->db->get('particular')->result();

        $this->load->view('apartment/particular/index',$data);
    
	}

	public function add()
	{
         $this->load->view('apartment/particular/add'); 
	}


		// insert query function add file

	public function insert(){

    $data = array(
       'Name' => $this->input->post('Name'),
       'Email' => $this->input->post('Email'),
       'Phone' => $this->input->post('Phone'),
       'Comment' => $this->input->post('Comment'),
       'Created_Date' => date('Y-m-d H:i:s')
    );
    $this->db->insert('particular' ,$data);
    redirect('particular/particular');

	}

		//end insert query function add file	

	// Delete function index file
   public function delete($Id_Particular){

   	$this->db->where('Id_Particular', $Id_Particular);
   	$this->db->delete('particular');
   	redirect('particular/particular');
   }
	// end Delete function

   // edit function file name edit

    public function edit($Id_Particular){
    	$this->db->where('Id_Particular', $Id_Particular);
    	$data['edit'] = $this->db->get('particular')->row();


    $this->load->view('apartment/particular/edit',$data);
    }
   
   // and edit function

    // edite  update function
    public function update()
    {
    	$data = array(
       'Name' => $this->input->post('Name'),
       'Email' => $this->input->post('Email'),
       'Phone' => $this->input->post('Phone'),
       'Comment' => $this->input->post('Comment'),
       'Created_Date' => date('Y-m-d H:i:s')	
    	);
    	$this->db->where('Id_Particular',$this->input->post('Id_Particular'));
    	$this->db->update('particular', $data);
    	redirect('particular/particular');
    	
    }
    //and edit update function 
	
}
?>