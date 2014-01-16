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
		print_r($table);
		print_r($data);
		exit;
		
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
}
?>