<?php
class C_laporan extends CI_Controller{
	
	function __construct(){
		parent :: __construct();
		$this->load->model('m_laporan');
		$this->load->helper(array('url','form'));

	}
	
	function index(){
	
        $data['hasil'] = $this->m_laporan->bacadata();
        $this->load->view('v_laporan',$data);
		
	}

	

	
}
?>