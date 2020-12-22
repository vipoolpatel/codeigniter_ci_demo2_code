<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roadto extends CI_Controller {

 	function __construct(){
    	parent::__construct();
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}   
	}

	public function index()
	{
		redirect('roadto/road_to');
	}
	public function road_to()
	{
     $data['getRecord'] = $this->db->get('cat_road_to')->result();
    $this->load->view('category/road_to/index',$data);
    
	}
	public function add()
	{
		$this->load->view('category/road_to/add');
	}

	public function insert()
	{
		$data = array(
		 'Road_To' => $this->input->post('Road_To')
		);
		$this->db->insert('cat_road_to',$data);
		redirect('roadto/road_to');
	}
	public function edit($Id_Road_To)
	{
		$this->db->where('Id_Road_To',$Id_Road_To);
		$data['edit'] =$this->db->get('cat_road_to')->row();
		$this->load->view('category/road_to/edit',$data);
	}
	public function update()
	{
		$data = array(
		 'Road_To' => $this->input->post('Road_To')
		);
		$this->db->where('Id_Road_To', $this->input->post('Id_Road_To'));
		$this->db->update('cat_road_to',$data);
		redirect('roadto/road_to');
	}

	public function delete($Id_Road_To)
	{
		$this->db->where('Id_Road_To',$Id_Road_To);
		$this->db->delete('cat_road_to');
		redirect('roadto/road_to');
	}

    
    

	
	
}
?>