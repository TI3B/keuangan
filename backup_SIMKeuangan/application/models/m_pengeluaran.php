<?php

	class M_pengeluaran Extends CI_Model{

	function bacadata(){
		$baca = $this->db->get('tb_pengeluaran');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
		}
	}
		
?>