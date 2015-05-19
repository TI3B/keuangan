<?php

	class M_diagram_laba extends CI_Model
	{
		function bacadata(){
		
			$baca = $this->db->get('tb_laba_rugi');
	        
		        if($baca->num_rows() > 0){
		            foreach ($baca->result() as $data){
		                $hasil[] = $data;
		            }
		            return $hasil;
		        }
		
		}
	}
		
?>