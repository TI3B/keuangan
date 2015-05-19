<?php
class C_diagram_laba extends CI_Controller{
	
	function construct(){
		parent :: __construct();
		$this->load->helper('form');
		$this->load->model('m_lap');
		$this->load->model('m_diagram_laba');
    }
	
	/*function index(){
		$this->load->model('m_laporan');
        $data['hasil'] = $this->m_laporan->bacadata();
        $this->load->view('v_lap',$data);
	}*/

	function index()
    {
    	$this->load->model('m_diagram_laba');
    	$data['diagram_laba'] = $this->m_diagram_laba->bacadata();
    	//print_r($diagram_laba);
        $this->load->view('v_diagram_laba', $data);


    }

}
?>