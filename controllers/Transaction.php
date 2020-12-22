<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

 	function __construct(){
    	parent::__construct();
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}   
	}

	public function index()
	{
		redirect('transaction/transaction_type');
	}
	public function transaction_type()
	{
	     $data['getRecord'] = $this->db->get('cat_transaction_type')->result();
		 $this->load->view('category/transaction_type/index',$data);
    
	}
	public function add()
	{    
		$this->load->view('category/transaction_type/add');
	}
	public function insert()
	{
		$data = array(
        'Transaction_Type' => $this->input->post('Transaction_Type')
		);
		$this->db->insert('cat_transaction_type',$data);
		redirect('transaction/transaction_type');
	}
	public function delete($Id_Cat_Transaction_Type)
	{
		$this->db->where('Id_Cat_Transaction_Type', $Id_Cat_Transaction_Type);
		$this->db->delete('cat_transaction_type');
		redirect('transaction/transaction_type');
	}

	public function edit($Id_Cat_Transaction_Type)
	{
		$this->db->where('Id_Cat_Transaction_Type', $Id_Cat_Transaction_Type);
		$data['edit'] = $this->db->get('cat_transaction_type')->row();
        $this->load->view('category/transaction_type/edit',$data);
	}
	 public function update()
	 {
	 	$data = array(
	 		 'Transaction_Type' => $this->input->post('Transaction_Type')
	 	);
	 	$this->db->where('Id_Cat_Transaction_Type', $this->input->post('Id_Cat_Transaction_Type'));
	 	$this->db->update('cat_transaction_type',$data);
	 	redirect('transaction/transaction_type');
	 }

    
    

	
	
}
?>