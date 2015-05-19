<?php

	class M_lap extends CI_Model{
	
		
		function selectAll()
		  {
		    $query = "SELECT tanggal FROM tb_neraca";
		    if ($query->num_rows()>0)
		    {
		      return $query->result();
		    }
		    else
		    {
		      return array();
		    }
		  }
		

	}
		
?>