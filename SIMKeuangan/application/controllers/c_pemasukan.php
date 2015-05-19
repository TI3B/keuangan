<?php
class C_pemasukan extends CI_Controller{
	
	function index(){
		$this->load->model('m_pemasukan');
        $data['hasil'] = $this->m_pemasukan->bacadata();
        $this->load->view('v_pemasukan',$data);
		
	}
	
}
?>