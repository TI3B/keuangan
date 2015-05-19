<?php require('header.php'); ?>
<?php require('menu.php'); ?>
	
	<center>
		Pilih Tahun Neraca : 
		<form>
		<select name="tanggal" method='POST' action='<?php echo base_url(); ?>c_laporan'>
			<?php

			$sql = mysql_query("SELECT * FROM tb_neraca ORDER BY tanggal DESC ");
			if(mysql_num_rows($sql) != 0){
				while($row = mysql_fetch_assoc($sql)){

					echo '<option>'.$row['tanggal'].'</option>';
				}
			}
			?>
		</select>
		<br><br>
		<a class="" href="<?php echo base_url(); ?>c_laporan">
			<i class="glyphicon glyphicon-list-alt red"></i> Cek ! 
		</a>
		<input type=submit value=update>
	</form>
	</center>
<?php require('footer.php'); ?>