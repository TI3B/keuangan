<?php
class C_pengeluaran extends CI_Controller{
	
	function index(){
		$this->load->model('m_pengeluaran');
        $data['hasil'] = $this->m_pengeluaran->bacadata();
        $this->load->view('v_pengeluaran',$data);
		
	}
}
?>