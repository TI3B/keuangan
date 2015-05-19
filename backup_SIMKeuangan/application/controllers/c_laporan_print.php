<?php
class C_laporan_print extends CI_Controller{

	function construct(){
		parent :: __construct();
		$this->load->model('m_laporan');
	}
	
	function index(){
		$this->load->model('m_laporan');
        $data['hasil'] = $this->m_laporan->bacadata();
        $this->load->view('v_laporan_print',$data);
		
	}
}
?>