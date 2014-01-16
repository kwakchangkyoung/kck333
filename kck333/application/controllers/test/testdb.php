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
		echo "aa";
		$data 		= array('char'=>'AAAA','varchar'=>'BBBB','text'=>'¹«±ÃÈ­²ÉÀÌÇÇ¾ú½À´Ï´Ù');
		$insert_id	= $this->m_test->add('idx_test', $data);
		
		echo $insert_id; 
	}
}