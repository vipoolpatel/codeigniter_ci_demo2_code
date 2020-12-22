<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_setting extends CI_Controller {

 	function __construct(){
    	parent::__construct();   
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}
	}

	public function index()
	{
	// if (!empty($_FILES["upload_logo"]["name"])) {
	//         $upload_logo = $_FILES["upload_logo"]["name"];
	//         $upload_image = $_FILES["upload_logo"]["name"];
	//         $folder = "uploads/";
	//         move_uploaded_file($_FILES["upload_logo"]["tmp_name"], $folder . $_FILES["upload_logo"]["name"]);
 //    	} else {
 //        	$upload_logo = '';
	//     }
	//     $data = array(
			
 //  			'upload_logo' => $this->input->post('upload_logo')
 //  		);

 //  		$this->db->insert('setting',$data); 
		// $this->db->where('id',$id);
		$data['edit'] = $this->db->get('setting')->row();
		$this->load->view('Admin_setting/index',$data);
	}




	public function update()
	{

	  if (!empty($_FILES["upload_logo"]["name"])) {
	        $upload_logo = $_FILES["upload_logo"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["upload_logo"]["tmp_name"], $folder . $_FILES["upload_logo"]["name"]);
	   } 
	   else {
	        $upload_logo = $this->input->post('old_imagename');
	    }
       if (!empty($_FILES["icon"]["name"])) {
	        $icon = $_FILES["icon"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["icon"]["tmp_name"], $folder . $_FILES["icon"]["name"]);
	   } 
	   else {
	        $icon = $this->input->post('old_imagenameicon');
	    }

		$data = array(

	 	

        'sitename' => $this->input->post('sitename'),
        'email' => $this->input->post('email'),
    	'website_url' => $this->input->post('website_url'),
    	'upload_logo' => $upload_logo,
    	'icon' => $icon
    	);
    	 $this->db->where('id',$this->input->post('id')); 
        $this->db->update('setting',$data); 
        redirect('admin_setting');
      
	}




	
}
?>
