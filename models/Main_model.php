<?php
  
  class Main_model extends CI_Model
  {
	  	function can_login($Username, $Password)
	  	{
	  		$this->db->where('Username', $Username);
	  		$this->db->where('Password', $Password);
	  		$query = $this->db->get('user');

	  		// SELECT * FROM user WhERE Username = '$Username' AND Password = '$Password'

	  		if($query ->num_rows() > 0)
	  		{
	  			return $query ->row();
	  		}
	  		else
	  		{
	  			return false;
	  		}
	  	}
  
// how to get session data in using codeigniter
	  	
	  	public function set_session($Username,$Password)
	  	{
	  		$sql = "SELECT Id_User FROM user WHERE Username = '" . $Username . "' LIMIT 1";
	  		$result = $this->db->query($sql);
	  		$row = $result->row();

	  		$sess_data = array(
	  			'Id_User' => $row->Id_User,
	  			'Username' => $Username,
	  			'Password' => $Password
	  		);
	  		$this->session->set_userdata('sess_data');
	  	}
  }

?>