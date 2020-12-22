<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

 	function __construct(){
    	parent::__construct();   
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}
	}

	public function index()
	{
		redirect('department/department');
	}
	public function department()
	{
     $data['getRecord'] = $this->db->get('cat_department')->result();
    $this->load->view('category/department/index',$data);
    
	}
	public function add()
	{
		$this->load->view('category/department/add');
	}

	public function insert()
	{
		$data = array(
       'Department' => $this->input->post('Department')
		);
		$this->db->insert('cat_department',$data);
		redirect('department/department');
	}
     // Delete function 
	public function delete($Id_Department)
	{
		$this->db->where('Id_Department',$Id_Department);
		$this->db->delete('cat_department');
		redirect('department/department');
	}
	// End Delete function 

	// Edit Function 
 	public function edit($Id_Department)
 	{	
 		$this->db->where('Id_Department',$Id_Department);
 		$data['edit'] = $this->db->get('cat_department')->row();
 		$this->load->view('category/department/edit',$data);
 	}
 	public function update()
 	{
 		$data = array(
 'Department' => $this->input->post('Department')
 		);
 		$this->db->where('Id_Department',$this->input->post('Id_Department'));
 		$this->db->update('cat_department',$data);
 		redirect('department/department');
 	}
 	
	// And Edit Function



    
    

	
	
}
?>