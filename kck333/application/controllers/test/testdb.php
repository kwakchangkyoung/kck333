<?php
class Testdb extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_test');
	}
	
	function index()
	{
		for ($i = 0; $i < 10000000; $i++)
		{
			$data 		= array('fchar'=>random_string('alnum', 5),'fvarchar'=>random_string('alnum', 10),'ftext'=>random_string('alnum', 500));
			$insert_id	= $this->m_test->add('idx_test', $data);
			echo $insert_id."<br>";
		}
		//echo "====================END==================";
	}
}
?>