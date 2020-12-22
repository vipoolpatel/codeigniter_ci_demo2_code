<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {

 	function __construct(){
    	parent::__construct(); 
        if(!$this->session->userdata('Id_User'))
        {
            redirect(base_url());
        }  
	}

	public function index()
	{
		redirect('developer/developer');
	}
	public function developer()
	{
      // $data['getRecord'] = $this->db->get('status_property')->result();
      $data['getRecord'] = $this->db->get('developer')->result();
    $this->load->view('apartment/developer/index',$data);
    
	}

	public function add()
	{

    $this->load->view('apartment/developer/add');
    
	}

	// Insert Query form datase

    public function insert(){

    	$data = array (
        'NameCompany' => $this->input->post('NameCompany'),
        'NameContact1' => $this->input->post('NameContact1'),
        'Tel1' => $this->input->post('Tel1'),
        'Email1' => $this->input->post('Email1'),
        'Position1' => $this->input->post('Position1'),
        'NameContact2' => $this->input->post('NameContact2'),
        'Tel2' => $this->input->post('Tel2'),
        'Email2' => $this->input->post('Email2'),
        'Position2' => $this->input->post('Position2'),
        'Web' => $this->input->post('Web'),
        'Address' => $this->input->post('Address'),
        'Nit' => $this->input->post('Nit'),
        'Comment' => $this->input->post('Comment'),
        'Created_Date' => date('Y-m-d H:i:s')

    	);
    	$this->db->insert('developer',$data);
    	redirect('developer/developer');
    }
	// End Insert Query form datase


   // delete function index file
   public function delete($Id_Developer)
   {
   	$this->db->where('Id_Developer', $Id_Developer);
   	$this->db->delete('developer');
   	redirect('developer/developer');
   }

    // end delete function index file


   // Edit function index file
    public function edit($Id_Developer){
    	$this->db->where('Id_Developer', $Id_Developer);
    	$data['edit'] = $this->db->get('developer')->row();
    	$this->load->view('apartment/developer/edit', $data);


    }

    public function update()
    {
        $data = array(
       'NameCompany' => $this->input->post('NameCompany'),
        'NameContact1' => $this->input->post('NameContact1'),
        'Tel1' => $this->input->post('Tel1'),
        'Email1' => $this->input->post('Email1'),
        'Position1' => $this->input->post('Position1'),
        'NameContact2' => $this->input->post('NameContact2'),
        'Tel2' => $this->input->post('Tel2'),
        'Email2' => $this->input->post('Email2'),
        'Position2' => $this->input->post('Position2'),
        'Web' => $this->input->post('Web'),
        'Address' => $this->input->post('Address'),
        'Nit' => $this->input->post('Nit'),
        'Comment' => $this->input->post('Comment'),
        'Created_Date' => date('Y-m-d H:i:s')


     );
    $this->db->where('Id_Developer', $this->input->post('Id_Developer'));
    $this->db->update('developer', $data);
    redirect('developer/developer');
    }

   // And Edit function index file


   // View file function
     public function view($Id_Developer)
     {
     	 $this->db->where('Id_Developer',$Id_Developer); 
     	 // $data['getRecord'] = $this->db->get('developer')->result();

        $data['row'] = $this->db->get('developer')->row(); 
     	$this->load->view('apartment/developer/view', $data);
     }
    // end View function
	
}
?>