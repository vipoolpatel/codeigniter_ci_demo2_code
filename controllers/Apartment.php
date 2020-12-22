<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Apartment extends CI_Controller {

 	function __construct(){
    	parent::__construct();   
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}
	}

	public function index()
	{
		redirect('apartment/apartment_list');
	}
	public function apartment_list()
	{
    // as Status_Property_Name
    $this->db->select('apartment.*,status_property.Status_Property,user.Username,broker_out.Name,broker_in.Name,developer.NameCompany,particular.Name,cat_comission_type.Comission_Type,cat_transaction_type.Transaction_Type');
    $this->db->from('apartment');

    $this->db->join('status_property', 'status_property.Id_Status_Property = apartment.Status_Property'); 

    $this->db->join('user', 'user.Id_User = apartment.Id_User'); 

    $this->db->join('broker_out', 'broker_out.Id_Broker_Out = apartment.Id_Broker_Out'); 

    $this->db->join('broker_in', 'broker_in.Broker_In = apartment.Id_Broker_In');

    $this->db->join('developer', 'developer.Id_Developer = apartment.Id_Developer');

    $this->db->join('particular', 'particular.Id_Particular = apartment.Id_Particular');

    $this->db->join('cat_comission_type', 'cat_comission_type.Id_Cat_Comission_Type = apartment.Id_Comission_Type');

    $this->db->join('cat_transaction_type', 'cat_transaction_type.Id_Cat_Transaction_Type = apartment.Id_Transaction_Type');

    $query = $this->db->get();

// print_r($this->db->last_query());
//         die;
    $data['getRecord'] = $query->result();

    $this->load->view('apartment/apartment_list/index',$data);
    
		  // $this->load->view('requirement_apartment/requirement_apartment/index');
	}
	
    public function add()
	 {
		$data['status_property'] = $this->db->get('status_property')->result();
		$data['user'] = $this->db->get('user')->result();
		$data['broker_out'] = $this->db->get('broker_out')->result();
		$data['broker_in'] = $this->db->get('broker_in')->result();
		$data['developer'] = $this->db->get('developer')->result();
		$data['particular'] = $this->db->get('particular')->result();
		$data['cat_comission_type'] = $this->db->get('cat_comission_type')->result();
		$data['cat_transaction_type'] = $this->db->get('cat_transaction_type')->result();
		$data['cat_department'] = $this->db->get('cat_department')->result();
		$data['cat_city'] = $this->db->get('cat_city')->result();
		$data['cat_zone'] = $this->db->get('cat_zone')->result();
		$data['cat_area'] = $this->db->get('cat_area')->result();
		$data['cat_road_to'] = $this->db->get('cat_road_to')->result();
		$data['cat_enter_to'] = $this->db->get('cat_enter_to')->result();
		$data['cat_type_laundry'] = $this->db->get('cat_type_laundry')->result();
		$data['cat_type_apartment'] = $this->db->get('cat_type_apartment')->result();

		// $this->load->view('requirement_apartment/requirement_apartment/add',$data);
	    $this->load->view('apartment/apartment_list/add',$data);
	    // redirect('apartment/apartment_list');

     }

	public function insert()
	{

		if (!empty($_FILES["Photo1"]["name"])) {
	        $Photo1 = $_FILES["Photo1"]["name"];
	        $upload_image = $_FILES["Photo1"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo1"]["tmp_name"], $folder . $_FILES["Photo1"]["name"]);
    	} else {
        	$Photo1 = '';
	    }

		if (!empty($_FILES["Photo2"]["name"])) {
	        $Photo2 = $_FILES["Photo2"]["name"];
	        $upload_image = $_FILES["Photo2"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo2"]["tmp_name"], $folder . $_FILES["Photo2"]["name"]);
    	} else {
        	$Photo2 = '';
	    }
 
	   if (!empty($_FILES["Photo3"]["name"])) {
	        $Photo3 = $_FILES["Photo3"]["name"];
	        $upload_image = $_FILES["Photo3"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo3"]["tmp_name"], $folder . $_FILES["Photo3"]["name"]);
    	} else {
        	$Photo3 = '';
	    }

	   if (!empty($_FILES["Photo4"]["name"])) {
	        $Photo4 = $_FILES["Photo4"]["name"];
	        $upload_image = $_FILES["Photo4"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo4"]["tmp_name"], $folder . $_FILES["Photo4"]["name"]);
    	} else {
        	$Photo4 = '';
	    }

	   if (!empty($_FILES["Photo5"]["name"])) {
	        $Photo5 = $_FILES["Photo5"]["name"];
	        $upload_image = $_FILES["Photo5"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo5"]["tmp_name"], $folder . $_FILES["Photo5"]["name"]);
    	} else {
        	$Photo5 = '';
	    }

	   if (!empty($_FILES["photo6"]["name"])) {
	        $photo6 = $_FILES["photo6"]["name"];
	        $upload_image = $_FILES["photo6"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo6"]["tmp_name"], $folder . $_FILES["photo6"]["name"]);
    	} else {
        	$photo6 = '';
	    }

	     if (!empty($_FILES["photo7"]["name"])) {
	        $photo7 = $_FILES["photo7"]["name"];
	        $upload_image = $_FILES["photo7"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo7"]["tmp_name"], $folder . $_FILES["photo7"]["name"]);
    	} else {
        	$photo7 = '';
	    }

	   if (!empty($_FILES["photo8"]["name"])) {
	        $photo8 = $_FILES["photo8"]["name"];
	        $upload_image = $_FILES["photo8"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo8"]["tmp_name"], $folder . $_FILES["photo8"]["name"]);
    	} else {
        	$photo8 = '';
	    }

	   if (!empty($_FILES["photo9"]["name"])) {
	        $photo9 = $_FILES["photo9"]["name"];
	        $upload_image = $_FILES["photo9"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo9"]["tmp_name"], $folder . $_FILES["photo9"]["name"]);
    	} else {
        	$photo9 = '';
	    }

	   if (!empty($_FILES["photo10"]["name"])) {
	        $photo10 = $_FILES["photo10"]["name"];
	        $upload_image = $_FILES["photo10"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo10"]["tmp_name"], $folder . $_FILES["photo10"]["name"]);
    	} else {
        	$photo10 = '';
	    }

	 
	   	   

		

		$data = array(
			
  			'Status_Property' => $this->input->post('Status_Property'),
			'Id_User' => $this->session->userdata('Id_User'),
			'Id_Broker_Out' => $this->input->post('Id_Broker_Out'),
			'Id_Broker_In' => $this->input->post('Id_Broker_In'),
			'Id_Developer' => $this->input->post('Id_Developer'),
			'Id_Particular' => $this->input->post('Id_Particular'),
			'Date_In' => date('Y-m-d'),
			'Date_Out' => date('Y-m-d'),	
			'Expiration_Date' => date('Y-m-d'),
			'Price_dollar' => $this->input->post('Price_dollar'),
			'Photo1' => $Photo1,
			'Photo2' => $Photo2,
			'Photo3' => $Photo3,
			'Photo4' => $Photo4,
			'Photo5' => $Photo5,
			'photo6' => $photo6,
			'photo7' => $photo7,
			'photo8' => $photo8,
			'photo9' => $photo9,
			'photo10' => $photo10,
			'Id_Comission_Type' => $this->input->post('Id_Comission_Type'),
			'Id_Transaction_Type' => $this->input->post('Id_Transaction_Type'),
			'Id_Cat_Department' => $this->input->post('Id_Cat_Department'),
			'Id_Cat_City' => $this->input->post('Id_Cat_City'),
			'Id_Cat_Zone' => $this->input->post('Id_Cat_Zone'),
			'Id_Cat_Area' => $this->input->post('Id_Cat_Area'),
			'Id_Cat_Road_To' => $this->input->post('Id_Cat_Road_To'),
			'Id_Cat_Enter_To' => $this->input->post('Id_Cat_Enter_To'),
			'Address' => $this->input->post('Address'),
			'Mts2' => $this->input->post('Mts2'),
			'Rooms' => $this->input->post('Rooms'),
			'Principal_Room_Walking_Closet' => $this->input->post('Principal_Room_Walking_Closet'),
			'Principal_Room_Bathroom' => $this->input->post('Principal_Room_Bathroom'),
			'Service_Room' => $this->input->post('Service_Room'),
			'Studio' => $this->input->post('Studio'),
			'Qty_Bathrooms' => $this->input->post('Qty_Bathrooms'),
			'Balcony' => $this->input->post('Balcony'),
			'Balcony_mts2' => $this->input->post('Balcony_mts2'),
			'Living_Room' => $this->input->post('Living_Room'),
			'Dining_Room' => $this->input->post('Dining_Room'),
			'Family_Room' => $this->input->post('Family_Room'),
			'Kitchen' => $this->input->post('Kitchen'),
			'Storage' => $this->input->post('Storage'),
			'Storage_mts2' => $this->input->post('Storage_mts2'),
			'Parking' => $this->input->post('Parking'),
			'Recreational_Areas' => $this->input->post('Recreational_Areas'),
			'Business_Center' => $this->input->post('Business_Center'),
			'Building_Garden' => $this->input->post('Building_Garden'),
			'Gym' => $this->input->post('Gym'),
			'Cat_Type_Laundry' => $this->input->post('Cat_Type_Laundry'),
			'Level' => $this->input->post('Level'),
			'Elevator' => $this->input->post('Elevator'),
			'Id_Type_Apartment' => $this->input->post('Id_Type_Apartment'),
			'Penthouse' => $this->input->post('Penthouse'),
			'Apartment_Garden' => $this->input->post('Apartment_Garden'),
			'Pergola' => $this->input->post('Pergola'),
			'Comments' => $this->input->post('Comments'),
			'Created_Date' => date('Y-m-d')

		);
		 $this->db->insert('apartment',$data); 
        

		
		redirect('apartment/apartment_list');
	}

    public function view($Id_Apartment)
	 {


	$this->db->select('apartment.*,status_property.Status_Property,user.Username,broker_out.Name,broker_in.Name,developer.NameCompany,particular.Name,cat_comission_type.Comission_Type,cat_transaction_type.Transaction_Type,cat_department.Department,cat_city.City,cat_zone.Zone,cat_area.Area,cat_road_to.Road_To,cat_enter_to.Enter_To,cat_type_laundry.Type_Laundry,cat_type_apartment.Type_Apartment');
    $this->db->from('apartment');
    $this->db->join('status_property', 'status_property.Id_Status_Property = apartment.Status_Property'); 
    $this->db->join('user', 'user.Id_User = apartment.Id_User'); 
    
    $this->db->join('broker_out', 'broker_out.Id_Broker_Out = apartment.Id_Broker_Out'); 

    $this->db->join('broker_in', 'broker_in.Broker_In = apartment.Id_Broker_In');

    $this->db->join('developer', 'developer.Id_Developer = apartment.Id_Developer');

    $this->db->join('particular', 'particular.Id_Particular = apartment.Id_Particular');

    $this->db->join('cat_comission_type', 'cat_comission_type.Id_Cat_Comission_Type = apartment.Id_Comission_Type');

    $this->db->join('cat_transaction_type', 'cat_transaction_type.Id_Cat_Transaction_Type = apartment.Id_Transaction_Type');

    $this->db->join('cat_department', 'cat_department.Id_Department = apartment.Id_Cat_Department');

    $this->db->join('cat_city', 'cat_city.Id_Cat_City = apartment.Id_Cat_City');

    $this->db->join('cat_zone', 'cat_zone.Id_Zone = apartment.Id_Cat_Zone');

    $this->db->join('cat_area', 'cat_area.Id_Cat_Area = apartment.Id_Cat_Area');

    $this->db->join('cat_road_to', 'cat_road_to.Id_Road_To = apartment.Id_Cat_Road_To');

    $this->db->join('cat_enter_to', 'cat_enter_to.Id_Enter_To = apartment.Id_Cat_Enter_To');

    $this->db->join('cat_type_laundry', 'cat_type_laundry.Id_Type_Laundry = apartment.Cat_Type_Laundry');

    $this->db->join('cat_type_apartment', 'cat_type_apartment.Id_Cat_Type_Apartment = apartment.Id_Type_Apartment');

    $this->db->where('Id_Apartment',$Id_Apartment);


	$data['row'] = $this->db->get()->row(); 

    // $query = $this->db->get();
    //  $data['getRecord'] = $query->result();
    $this->load->view('apartment/apartment_list/view',$data);
	
	}

	public function delete($Id_Apartment)
	{

		$this->db->where('Id_Apartment',$Id_Apartment); 
        $this->db->delete('apartment'); 
      	redirect('apartment/apartment_list');
	}

    public function edit($Id_Apartment)
    {
    	$data['status_property'] = $this->db->get('status_property')->result();
		$data['user'] = $this->db->get('user')->result();
		$data['broker_out'] = $this->db->get('broker_out')->result();
		$data['broker_in'] = $this->db->get('broker_in')->result();
		$data['developer'] = $this->db->get('developer')->result();
		$data['particular'] = $this->db->get('particular')->result();
		$data['cat_comission_type'] = $this->db->get('cat_comission_type')->result();
		$data['cat_transaction_type'] = $this->db->get('cat_transaction_type')->result();
		$data['cat_department'] = $this->db->get('cat_department')->result();
		$data['cat_city'] = $this->db->get('cat_city')->result();
		$data['cat_zone'] = $this->db->get('cat_zone')->result();
		$data['cat_area'] = $this->db->get('cat_area')->result();
		$data['cat_road_to'] = $this->db->get('cat_road_to')->result();
		$data['cat_enter_to'] = $this->db->get('cat_enter_to')->result();
		$data['cat_type_laundry'] = $this->db->get('cat_type_laundry')->result();
		$data['cat_type_apartment'] = $this->db->get('cat_type_apartment')->result();


		

		$edit = $this->db->where('Id_Apartment',$Id_Apartment); 
		$edit = $this->db->get('apartment')->row(); 
		$data['edit'] = $edit;

 		

    	$this->load->view('apartment/apartment_list/edit',$data);
    }

    public function update()
	{

	    if (!empty($_FILES["Photo1"]["name"])) {
	        $Photo1 = $_FILES["Photo1"]["name"];
	        $upload_image = $_FILES["Photo1"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo1"]["tmp_name"], $folder . $_FILES["Photo1"]["name"]);
	    } else {
	        $Photo1 = $this->input->post('old_imagename1');
	    }

        if (!empty($_FILES["Photo2"]["name"])) {
	        $Photo2 = $_FILES["Photo2"]["name"];
	        $upload_image = $_FILES["Photo2"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo2"]["tmp_name"], $folder . $_FILES["Photo2"]["name"]);
    	} else {
        	$Photo2 = $this->input->post('old_imagename2');
	    }

	   if (!empty($_FILES["Photo3"]["name"])) {
	        $Photo3 = $_FILES["Photo3"]["name"];
	        $upload_image = $_FILES["Photo3"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo3"]["tmp_name"], $folder . $_FILES["Photo3"]["name"]);
    	} else {
        	$Photo3 = $this->input->post('old_imagename3');
	    }

	   if (!empty($_FILES["Photo4"]["name"])) {
	        $Photo4 = $_FILES["Photo4"]["name"];
	        $upload_image = $_FILES["Photo4"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo4"]["tmp_name"], $folder . $_FILES["Photo4"]["name"]);
    	} else {
        	$Photo4 = $this->input->post('old_imagename4');
	    }

	   if (!empty($_FILES["Photo5"]["name"])) {
	        $Photo5 = $_FILES["Photo5"]["name"];
	        $upload_image = $_FILES["Photo5"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["Photo5"]["tmp_name"], $folder . $_FILES["Photo5"]["name"]);
    	} else {
        	$Photo5 = $this->input->post('old_imagename5');
	    }

	   if (!empty($_FILES["photo6"]["name"])) {
	        $photo6 = $_FILES["photo6"]["name"];
	        $upload_image = $_FILES["photo6"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo6"]["tmp_name"], $folder . $_FILES["photo6"]["name"]);
    	} else {
        	$photo6 = $this->input->post('old_imagename6');
	    }

	     if (!empty($_FILES["photo7"]["name"])) {
	        $photo7 = $_FILES["photo7"]["name"];
	        $upload_image = $_FILES["photo7"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo7"]["tmp_name"], $folder . $_FILES["photo7"]["name"]);
    	} else {
        	$photo7 = $this->input->post('old_imagename7');
	    }

	   if (!empty($_FILES["photo8"]["name"])) {
	        $photo8 = $_FILES["photo8"]["name"];
	        $upload_image = $_FILES["photo8"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo8"]["tmp_name"], $folder . $_FILES["photo8"]["name"]);
    	} else {
        	$photo8 = $this->input->post('old_imagename8');
	    }

	   if (!empty($_FILES["photo9"]["name"])) {
	        $photo9 = $_FILES["photo9"]["name"];
	        $upload_image = $_FILES["photo9"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo9"]["tmp_name"], $folder . $_FILES["photo9"]["name"]);
    	} else {
        	$photo9 = $this->input->post('old_imagename9');
	    }

	   if (!empty($_FILES["photo10"]["name"])) {
	        $photo10 = $_FILES["photo10"]["name"];
	        $upload_image = $_FILES["photo10"]["name"];
	        $folder = "uploads/";
	        move_uploaded_file($_FILES["photo10"]["tmp_name"], $folder . $_FILES["photo10"]["name"]);
    	} else {
        	$photo10 = $this->input->post('old_imagename10');
	    }

	 
    


		$data = array(
			
			
			'Status_Property' => $this->input->post('Status_Property'),
			'Id_User' => $this->input->post('Id_User'),
			'Id_Broker_Out' => $this->input->post('Id_Broker_Out'),
			'Id_Broker_In' => $this->input->post('Id_Broker_In'),
			'Id_Developer' => $this->input->post('Id_Developer'),
			'Id_Particular' => $this->input->post('Id_Particular'),
			'Date_In' => date('Y-m-d'),
			'Date_Out' => date('Y-m-d'),	
			'Expiration_Date' => date('Y-m-d'),
			'Price_dollar' => $this->input->post('Price_dollar'),
			'Photo1' => $Photo1,
			'Photo2' => $Photo2,
			'Photo3' => $Photo3,
			'Photo4' => $Photo4,
			'Photo5' => $Photo5,
			'photo6' => $photo6,
			'photo7' => $photo7,
			'photo8' => $photo8,
			'photo9' => $photo9,
			'photo10' => $photo10,
			'Id_Comission_Type' => $this->input->post('Id_Comission_Type'),
			'Id_Transaction_Type' => $this->input->post('Id_Transaction_Type'),
			'Id_Cat_Department' => $this->input->post('Id_Cat_Department'),
			'Id_Cat_City' => $this->input->post('Id_Cat_City'),
			'Id_Cat_Zone' => $this->input->post('Id_Cat_Zone'),
			'Id_Cat_Area' => $this->input->post('Id_Cat_Area'),
			'Id_Cat_Road_To' => $this->input->post('Id_Cat_Road_To'),
			'Id_Cat_Enter_To' => $this->input->post('Id_Cat_Enter_To'),
			'Address' => $this->input->post('Address'),
			'Mts2' => $this->input->post('Mts2'),
			'Rooms' => $this->input->post('Rooms'),
			'Principal_Room_Walking_Closet' => $this->input->post('Principal_Room_Walking_Closet'),
			'Principal_Room_Bathroom' => $this->input->post('Principal_Room_Bathroom'),
			'Service_Room' => $this->input->post('Service_Room'),
			'Studio' => $this->input->post('Studio'),
			'Qty_Bathrooms' => $this->input->post('Qty_Bathrooms'),
			'Balcony' => $this->input->post('Balcony'),
			'Balcony_mts2' => $this->input->post('Balcony_mts2'),
			'Living_Room' => $this->input->post('Living_Room'),
			'Dining_Room' => $this->input->post('Dining_Room'),
			'Family_Room' => $this->input->post('Family_Room'),
			'Kitchen' => $this->input->post('Kitchen'),
			'Storage' => $this->input->post('Storage'),
			'Storage_mts2' => $this->input->post('Storage_mts2'),
			'Parking' => $this->input->post('Parking'),
			'Recreational_Areas' => $this->input->post('Recreational_Areas'),
			'Business_Center' => $this->input->post('Business_Center'),
			'Building_Garden' => $this->input->post('Building_Garden'),
			'Gym' => $this->input->post('Gym'),
			'Cat_Type_Laundry' => $this->input->post('Cat_Type_Laundry'),
			'Level' => $this->input->post('Level'),
			'Elevator' => $this->input->post('Elevator'),
			'Id_Type_Apartment' => $this->input->post('Id_Type_Apartment'),
			'Penthouse' => $this->input->post('Penthouse'),
			'Apartment_Garden' => $this->input->post('Apartment_Garden'),
			'Pergola' => $this->input->post('Pergola'),
			'Comments' => $this->input->post('Comments'),
			'Created_Date' => date('Y-m-d')

		);

    $this->db->where('Id_Apartment',$this->input->post('Id_Apartment')); 
    $this->db->update('apartment',$data); 


    redirect('apartment/apartment_list');
	}

}
?>