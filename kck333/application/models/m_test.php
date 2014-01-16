<?php
class M_test extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function dbInsert()
	{
		
	}
	
	function add($table, $data)
	{
		
		$this->db->insert($table, $data);
		echo "<pre>";
		print_r($this->db);
		return $this->db->insert_id();
	}
}