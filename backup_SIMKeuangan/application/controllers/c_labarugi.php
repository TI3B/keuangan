<?php
class C_labarugi extends CI_Controller{
	
	function index(){
		// $this->load->model('m_pemasukan');
		$this->load->model('m_labarugi');

        //$data['hasil'] = $this->m_labarugi->bacadata();
        //$data['total'] = $this->m_labarugi->total_pemasukan();
         $data['tampil'] = 0;
         if($_POST){
                $bulan = date("m", strtotime($_POST['bulan'])); //ambil bulan dari form
                $tahun = date("Y", strtotime($_POST['bulan'])); //ambil tahun dari form

                $bln_awal =date("Y-m-d",mktime(0, 0, 0, $bulan, 1, $tahun)); // set tanggal 1 dari bulan yang dipilih
                $bln_akhir =date("Y-m-d",mktime(0, 0, 0, $bulan+1, 0, $tahun)); // set tanggal terakhir dari bulan yang dipilih

                $data['total_tgl']                 = $this->m_labarugi->total_tgl($bln_awal,$bln_akhir);
                $data['total_gaji']                = $this->m_labarugi->total_gaji($bln_awal,$bln_akhir);
                $data['total_tunjangan']           = $this->m_labarugi->total_tunjangan($bln_awal,$bln_akhir);
                $data['total_pemeliharaan']        = $this->m_labarugi->total_pemeliharaan($bln_awal,$bln_akhir);
                $data['total_bebanpenerangan']     = $this->m_labarugi->total_bebanpenerangan($bln_awal,$bln_akhir);
                $data['total_perlengkapankator']   = $this->m_labarugi->total_perlengkapankator($bln_awal,$bln_akhir);
                
                $kosong = 0;
                foreach ($data as $key => $value) {
                    if($value['total'] == null){
                        $kosong = $kosong + 1;
                    }
                    
                }
                
                if($kosong < 6){
                    $data['tampil'] = 1;
                }
                else{
                    $data['error'] = "Data tidak ada.";
                }
                
         }
        
        // echo "<pre>";
        // print_r($hasil);
        $this->load->view('v_labarugi', $data);

       
	}
	
	
}
?>