<?php
class C_lap extends CI_Controller{
	
	function construct(){
		parent :: __construct();
		$this->load->helper('form');
		$this->load->model('m_lap');
    }
	
	/*function index(){
		$this->load->model('m_laporan');
        $data['hasil'] = $this->m_laporan->bacadata();
        $this->load->view('v_lap',$data);
	}*/

	function index()
    {

        $this->load->view('v_lap');

        /*$hasil['m_lap'] = $this->m_lap->selectBy;*/

    }

}
?>