<?php
    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Api extends CI_Controller {

        function __construct(){
            parent::__construct();

            $this->load->model('api_model', '', TRUE);
        }

        public function get_apartment()
        {
            $result = array();
            //$r = $this->db->get('apartment')->result();
            $r = $this->api_model->read_apartment();
            // print_r($r);
            // die();
            // echo json_encode($r);
            foreach($r as $key => $value) 
            {
                $data = array();
                $data['id'] = $value->Id_Apartment;
                $data['Status_Property'] = $value->Status_Property;
                $data['Id_User'] = $value->Username;
                $result[] = $data;
            }   
            $json = array('status' => 1, 'statusmsg' => 'success', 'data'=>$result);
            echo json_encode($json);
        }

        public function put_apartment()
        {
            $id = $this->uri->segment(3);
            $data = array(
                'Status_Property' => $this->input->get('Status_Property'),
                'Id_User'         => $this->input->get('Id_User'),
                'Id_Broker_Out'   => $this->input->get('Id_Broker_Out')
            );

           $getr = $this->api_model->update_apartment($id, $data);
           echo json_encode($getr);
        }

        public function get_broker_in()
        {
            $result = array();
            $re = $this->api_model->read_broker_in();
            // echo json_encode($re);
            foreach($re as $key => $value)
            {
                $data = array();
                $data['id'] = $value->Broker_In;
                $data['Name'] = $value->Name;
                $data['Email'] = $value->Email;
                $data['Phone'] = $value->Phone;
                $data['Created_Date'] = $value->Created_Date;
                $result[] = $data;
            }
            $json = array('status' => '1', 'statusmsg' => 'success', 'data' => $result);
            echo json_encode($json);

        }

        public function get_broker_out()
        {
            echo "string";
            die();
        }

    }

?>