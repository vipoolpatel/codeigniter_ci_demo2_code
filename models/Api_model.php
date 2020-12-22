<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Api_model extends CI_Model {
 
        public function read_apartment()
        {
            //$query = $this->db->query("SELECT * FROM `apartment`");
            //return $query->result();
            // return $query->result_array();

            $this->db->select('apartment.*,status_property.Status_Property,user.Username');
            $this->db->from('apartment');
            $this->db->join('status_property', 'status_property.Id_Status_Property = apartment.Status_Property');
            $this->db->join('user', 'user.Id_User = apartment.Id_User');
            $q = $this->db->get();
            return $q->result();
        }

        public function update_apartment($id, $data)
        {
            //$this->Status_Property = $data['Status_Property']
            //https://www.cloudways.com/blog/rest-api-in-codeigniter/
        }

        public function read_broker_in()
        {
            $q = $this->db->query("SELECT * FROM `broker_in`");
            return $q->result();
        }

    }

?>