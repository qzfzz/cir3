<?php

class Ad extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}	
	
	public function getInfo()
	{
		$query = $this->db->get( 'ad', 10 );
		
		return $query->result_array();
	}
}

?>