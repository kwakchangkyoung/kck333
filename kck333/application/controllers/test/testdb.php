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
		$data 		= array('char'=>'AAAA','varchar'=>'BBBB','text'=>'����ȭ�����Ǿ����ϴ�');
		$insert_id	= $this->m_test->getRoleDropdownList();
		
		echo $insert_id;
	}
}