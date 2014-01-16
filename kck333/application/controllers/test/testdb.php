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
		
// 		echo random_string('alnum', 500);
		
// 		exit;
		for ($i = 0; $i > 10; $i++)
		{
			$data 		= array('char'=>random_string('alnum', 5),'varchar'=>random_string('alnum', 10),'text'=>random_string('alnum', 500));
			$insert_id	= $this->m_test->add('idx_test', $data);
			
			echo $insert_id;
		}
		echo "====================END==================";
		
	}
}
?>