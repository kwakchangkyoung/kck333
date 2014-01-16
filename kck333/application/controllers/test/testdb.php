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
		$data 		= array('char'=>'AAAA','varchar'=>'BBBB','text'=>'무궁화꽃이피었습니다');
		
		$insert_id	= $this->m_test->add('idx_test', $data);
		
		echo $insert_id; 
	}
}
?>