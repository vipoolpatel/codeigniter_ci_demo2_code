<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requirement_apartment extends CI_Controller {

 	function __construct(){
    	parent::__construct();
    	if(!$this->session->userdata('Id_User'))
    	{
    		redirect(base_url());
    	}
	}

	public function index()
	{
		redirect('requirement_apartment/requirement_apartment_list');
	}

	public function requirement_apartment_list()
	{
	$this->db->select('requirement_apartment.*,status_requirement.Status_Requirement as Status_Requirement_Name,client.Name,cat_department.Department,cat_city.City,cat_zone.Zone,cat_enter_to.Enter_To,cat_road_to.Road_To,cat_area.Area');
    $this->db->from('requirement_apartment');

    $this->db->join('client', 'client.Id_Client = requirement_apartment.Id_Client');

    $this->db->join('status_requirement', 'status_requirement.Id_Status_Requirement = requirement_apartment.Status_Requirement');

 $this->db->join('cat_department', 'cat_department.Id_Department = requirement_apartment.Id_Department');

    $this->db->join('cat_city', 'cat_city.Id_Cat_City = requirement_apartment.Id_City');

    $this->db->join('cat_zone', 'cat_zone.Id_Zone = requirement_apartment.Id_Zone');

    $this->db->join('cat_enter_to', 'cat_enter_to.Id_Enter_To = requirement_apartment.Id_Enter_to');

    $this->db->join('cat_road_to', 'cat_road_to.Id_Road_To = requirement_apartment.Id_Road_To');

    $this->db->join('cat_area', 'cat_area.Id_Cat_Area = requirement_apartment.Id_Area');






    $query = $this->db->get();
    $data['getRecord'] = $query->result();

    $this->load->view('requirement_apartment/requirement_apartment/index',$data);


		 // $this->load->view('requirement_apartment/requirement_apartment/index');
	}
		public function insert()
	{
		$data = array(
			'Status_Requirement' => $this->input->post('Status_Requirement'),
			'Id_Client' => $this->input->post('Id_Client'),
			'Date_Requirement' => date('Y-m-d'),
			'Date_Expiration' => date('Y-m-d'),
			'Id_Department' => $this->input->post('Id_Department'),
			'Id_City' => $this->input->post('Id_City'),
			'Id_Zone' => $this->input->post('Id_Zone'),
			'Id_Enter_to' => $this->input->post('Id_Enter_to'),
			'Id_Road_To' => $this->input->post('Id_Road_To'),
			'Id_Area' => $this->input->post('Id_Area'),
			'Minimun_Rooms' => $this->input->post('Minimun_Rooms'),
			'Minimun_Parking' => $this->input->post('Minimun_Parking'),
			'PriceRequirement' => $this->input->post('PriceRequirement'),
			'Price_Range_dollar_Min' => $this->input->post('Price_Range_dollar_Min'),
			'Price_Range_dollar_Max' => $this->input->post('Price_Range_dollar_Max'),
			'Level_Range_Min' => $this->input->post('Level_Range_Min'),
			'Level_Range_Max' => $this->input->post('Level_Range_Max'),
			'Comments' => $this->input->post('Comments'),
			'Created_Date' => date('Y-m-d')

		);
		 $this->db->insert('requirement_apartment',$data);
         // print_r($this->db->last_query());
		redirect('requirement_apartment/requirement_apartment_list');
	}
	public function add()
	{
		$data['status_requirement'] = $this->db->get('status_requirement')->result();
		$data['client'] = $this->db->get('client')->result();
		$data['cat_department'] = $this->db->get('cat_department')->result();
		$data['cat_city'] = $this->db->get('cat_city')->result();
		$data['cat_zone'] = $this->db->get('cat_zone')->result();
		$data['cat_enter_to'] = $this->db->get('cat_enter_to')->result();
		$data['cat_road_to'] = $this->db->get('cat_road_to')->result();
		$data['cat_area'] = $this->db->get('cat_area')->result();

		$this->load->view('requirement_apartment/requirement_apartment/add',$data);
	}


    public function view($Id_Requirement_Apartment)
	 {

$this->db->select('requirement_apartment.*,status_requirement.Status_Requirement as Status_Requirement_Name,client.Name,cat_department.Department,cat_city.City,cat_zone.Zone,cat_enter_to.Enter_To,cat_road_to.Road_To,cat_area.Area');

    $this->db->from('requirement_apartment');

    $this->db->join('client', 'client.Id_Client = requirement_apartment.Id_Client');

    $this->db->join('status_requirement', 'status_requirement.Id_Status_Requirement = requirement_apartment.Status_Requirement');

    $this->db->join('cat_department', 'cat_department.Id_Department = requirement_apartment.Id_Department');

    $this->db->join('cat_city', 'cat_city.Id_Cat_City = requirement_apartment.Id_City');

    $this->db->join('cat_zone', 'cat_zone.Id_Zone = requirement_apartment.Id_Zone');

    $this->db->join('cat_enter_to', 'cat_enter_to.Id_Enter_To = requirement_apartment.Id_Enter_to');

    $this->db->join('cat_road_to', 'cat_road_to.Id_Road_To = requirement_apartment.Id_Road_To');

    $this->db->join('cat_area', 'cat_area.Id_Cat_Area = requirement_apartment.Id_Area');

	$this->db->where('Id_Requirement_Apartment',$Id_Requirement_Apartment);
	$data['row'] = $this->db->get()->row();


	$this->load->view('requirement_apartment/requirement_apartment/view',$data);
	}


	public function edit($Id_Requirement_Apartment)
	{
		$data['status_requirement'] = $this->db->get('status_requirement')->result();
		$data['client'] = $this->db->get('client')->result();
		$data['cat_department'] = $this->db->get('cat_department')->result();
		$data['cat_city'] = $this->db->get('cat_city')->result();
		$data['cat_zone'] = $this->db->get('cat_zone')->result();
		$data['cat_enter_to'] = $this->db->get('cat_enter_to')->result();
		$data['cat_road_to'] = $this->db->get('cat_road_to')->result();
		$data['cat_area'] = $this->db->get('cat_area')->result();


		$this->db->where('Id_Requirement_Apartment',$Id_Requirement_Apartment);
		$data['edit_requirement_apartment'] = $this->db->get('requirement_apartment')->row();

		$this->load->view('requirement_apartment/requirement_apartment/edit',$data);
	}
	public function update()
	{
		 // echo "<pre>";
		 // print_r($_POST);
		 // die;

		$data = array(
			'Status_Requirement' => $this->input->post('Status_Requirement'),
			'Id_Client' => $this->input->post('Id_Client'),
			'Date_Requirement' => date('Y-m-d'),
			'Date_Expiration' => date('Y-m-d'),
			'Id_Department' => $this->input->post('Id_Department'),
			'Id_City' => $this->input->post('Id_City'),
			'Id_Zone' => $this->input->post('Id_Zone'),
			'Id_Enter_to' => $this->input->post('Id_Enter_to'),
			'Id_Road_To' => $this->input->post('Id_Road_To'),
			'Id_Area' => $this->input->post('Id_Area'),
			'Minimun_Rooms' => $this->input->post('Minimun_Rooms'),
			'Minimun_Parking' => $this->input->post('Minimun_Parking'),
			'PriceRequirement' => $this->input->post('PriceRequirement'),
			'Price_Range_dollar_Min' => $this->input->post('Price_Range_dollar_Min'),
			'Price_Range_dollar_Max' => $this->input->post('Price_Range_dollar_Max'),
			'Level_Range_Min' => $this->input->post('Level_Range_Min'),
			'Level_Range_Max' => $this->input->post('Level_Range_Max'),
			'Comments' => $this->input->post('Comments'),
			'Created_Date' => date('Y-m-d')
    );

    $this->db->where('Id_Requirement_Apartment',$this->input->post('Id_Requirement_Apartment'));
    $this->db->update('requirement_apartment',$data);


    redirect('requirement_apartment/requirement_apartment_list');
	}


	public function delete($Id_Requirement_Apartment)
	{

		$this->db->where('Id_Requirement_Apartment',$Id_Requirement_Apartment);
        $this->db->delete('requirement_apartment');
      	redirect('requirement_apartment/requirement_apartment_list');
	}
}
?>
