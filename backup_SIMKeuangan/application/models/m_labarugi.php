<?php

	class m_labarugi Extends CI_Model{
	
		function bacadata(){
			$baca = $this->db->get('tb_pemasukan');
	        if($baca->num_rows() > 0){
	            foreach ($baca->result() as $data){
	                $hasil[] = $data;
	            }
	            return $hasil;
	        }
		}

		function total_pemasukan(){
			$total= $this->db->query("SELECT SUM(pemasukan)as total FROM tb_pemasukan");
			return $total->first_row("array");
		}
		 
		 function total_tgl($bulan_awal,$bulan_akhir){
		 	$total_tgl= $this->db->query("SELECT SUM(pemasukan)as total FROM tb_pemasukan WHERE tanggal_pemasukan between '".$bulan_awal."' and '".$bulan_akhir."' ");
		 	return $total_tgl->first_row("array");
		 }

		 function total_gaji($bulan_awal,$bulan_akhir){
		 	$total_gaji= $this->db->query("SELECT SUM(total_gaji)as total FROM tb_gaji_pegawai WHERE tanggal_gaji between '".$bulan_awal."' and '".$bulan_akhir."'");
		 	return $total_gaji->first_row("array");

		 }

		 function total_pemeliharaan($bulan_awal,$bulan_akhir){
		 	$total_pemeliharaan= $this->db->query("SELECT SUM(tarif)as total FROM tb_pemeliharaan WHERE tanggal between '".$bulan_awal."' and '".$bulan_akhir."'");
		 	return $total_pemeliharaan->first_row("array");
		 }

		 function total_tunjangan($bulan_awal,$bulan_akhir){
		 	$total_tunjangan= $this->db->query("SELECT SUM(tunjangan)as total FROM tb_gaji_pegawai WHERE tanggal_gaji between '".$bulan_awal."' and '".$bulan_akhir."'");
		 	return $total_tunjangan->first_row("array");
		 }

		  function total_bebanpenerangan($bulan_awal,$bulan_akhir){
		 	$total_bebanpenerangan= $this->db->query("SELECT SUM(tarif)as total FROM tb_bebanpenerangan WHERE tanggal between '".$bulan_awal."' and '".$bulan_akhir."'");
		 	return $total_bebanpenerangan->first_row("array");
		 }
		 function total_perlengkapankator($bulan_awal,$bulan_akhir){
		 	$total_perlengkapankator= $this->db->query("SELECT SUM(tarif)as total FROM tb_perlengkapankator WHERE tanggal between '".$bulan_awal."' and '".$bulan_akhir."'");
		 	return $total_perlengkapankator->first_row("array");
		 }
	} 
		
?>