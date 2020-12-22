<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Brokerout extends CI_Controller {

 	function __construct(){
    	parent::__construct();   
    	if(!$this->session->userdata('Id_User'))
    	{
    	    redirect(base_url());
    	}
	}

	public function index()
	{
		redirect('brokerout/broker_out');
	}
	public function broker_out()
	{

			$data['getRecord'] = $this->db->get('broker_out')->result();		

    $this->load->view('apartment/broker_out/index',$data);
    
	}
	public function add()
	  {
		
	    $this->load->view('apartment/broker_out/add');

     }

     // insert database qurty


          public function insert()
	{
				$data = array(
		    'Name' => $this->input->post('Name'),
			'Email' => $this->input->post('Email'),
			'Phone' => $this->input->post('Phone'),
			'Pbx' => $this->input->post('Pbx'),
			'Company' => $this->input->post('Company'),
			'Comment' => $this->input->post('Comment'),
			'Created_Date' => date('Y-m-d H:i:s'),
		
		
		);
		 $this->db->insert('broker_out',$data); 
         // print_r($this->db->last_query());
		redirect('brokerout/broker_out');
	}

     // end indsert database query

//  delete function
 	public function delete($Id_Broker_Out)
	{

		$this->db->where('Id_Broker_Out',$Id_Broker_Out); 
        $this->db->delete('broker_out'); 
      	redirect('brokerout/broker_out');
	}

	// end delete function

	// edite function
    public function edit($Id_Broker_Out){
		$this->db->where('Id_Broker_Out',$Id_Broker_Out);
		$data['edit'] = $this->db->get('broker_out')->row();
		$this->load->view('apartment/broker_out/edit',$data);
	}


	 public function update()
	 {

		$data = array( 
			'Name' => $this->input->post('Name'),
			'Email' => $this->input->post('Email'),
			'Phone' => $this->input->post('Phone'),
			'Pbx' => $this->input->post('Pbx'),
			'Company' => $this->input->post('Company'),
			'Comment' => $this->input->post('Comment'),
			'Created_Date' => date('Y-m-d H:i:s'),
		

		);
		 $this->db->where('Id_Broker_Out',$this->input->post('Id_Broker_Out')); 
        $this->db->update('broker_out',$data); 
      	redirect('brokerout/broker_out');
	}

	// and edit function
  



 }
 ?>