<?php

	class M_laporan Extends CI_Model{
	
		
		function bacadata(){
		
			$baca = $this->db->get('tb_neraca');
	        
		        if($baca->num_rows() > 0){
		            foreach ($baca->result() as $data){
		                $hasil[] = $data;
		            }
		            return $hasil;
		        }
		
		}
		
		function tambah(){
			$tanggal = $this->input->post('tanggal');
			$kas  = $this->input->post('kas');
			$bank = $this->input->post('bank');
			$piutang_usaha = $this->input->post('piutang_usaha');
			$inventaris = $this->input->post('inventaris');
			$hutang_usaha = $this->input->post('hutang_usaha');
			$hutang_jangka_panjang = $this->input->post('hutang_jangka_panjang');
			$modal = $this->input->post('modal');
			$laba = $this->input->post('laba');

			$data = array (
				'tanggal' => $tanggal,
				'kas' => $kas,
				'bank' => $bank,
				'piutang_usaha' => $piutang_usaha,
				'inventaris' => $inventaris,
				'hutang_usaha' => $hutang_usaha,
				'hutang_jangka_panjang' => $hutang_jangka_panjang,
				'modal' => $modal,
				'laba'=> $laba
			);
			$this->db->insert('tb_neraca',$data);
		}


		function selectBy($id)
	  	{
		    $query = "SELECT * FROM tb_neraca where tanggal='$id'";
			$db=$this->db->query($query);
			return $db->hasil();
	  	}

	}
		
?>