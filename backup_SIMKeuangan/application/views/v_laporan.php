<?php require('header.php'); ?>
<?php require('menu.php'); ?>

	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" width="100%"><tbody><tr><td class="center"><table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
      <tr>
      	<td colspan =3>
      		<div><?php echo date('D').' - '.date('M').' - '.date('Y') ?></div>
      	</td>
      </tr>	
      
      	<?php foreach($hasil as $data){ ?>
        <tr>
          <th colspan=3 align=center><center>Neraca <?php echo $data->tanggal;?></center></th>
        </tr>
		<tr>
			<td colspan = 3 ></td>
		</tr>
      
      <tbody>
		
          <tr>
			<td colspan = 3 ><b>Aktiva</b></td>
		  </tr>
		  
		  <tr>
			<td> </td>
			<td width="100%">Kas</td>
			<td >Rp.<?php $kas=$data->kas; echo $kas; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Bank</td>
			<td>Rp.<?php $bank=$data->bank; echo $bank; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Piutang Usaha</td>
			<td>Rp.<?php $piutang_usaha=$data->piutang_usaha; echo $piutang_usaha; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Inventaris</td>
			<td>Rp.<?php $inventaris=$data->inventaris; echo $inventaris; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Total Aktiva</td>
			<td><b>Rp.<?php echo $total_aktiva=$kas+$bank+$piutang_usaha+$inventaris	; ?>,.</b></td>
		  </tr>
		  <tr>
			<td colspan = 3 ><b>Kewajiban</b></td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Hutang Usaha</td>
			<td>Rp.<?php $hutang_usaha=$data->inventaris; echo $hutang_usaha; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Hutang Jangka Panjang</td>
			<td>Rp.<?php $hutang_jangka_panjang=$data->inventaris; echo $hutang_jangka_panjang; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Total Kewajiban</td>
			<td><b>Rp.<?php echo $total_kewajiban=$hutang_usaha+$hutang_jangka_panjang	; ?>,.</b></td>
		  </tr>
		  <tr>
			<td colspan = 3 ><b>Modal</b></td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Modal</td>
			<td>Rp.<?php $modal=$data->inventaris; echo $modal; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Laba</td>
			<td>Rp.<?php $laba=$data->inventaris; echo $laba; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Total Modal</td>
			<td><b>Rp.<?php echo $total_modal=$modal+$laba	; ?>,.</b></td>
		  </tr>
		  <tr>
			<td colspan = 3 ></td>
		</tr>
          <tr>
            <td colspan=3 class="center">
				<center><a class="btn btn-success" href="<?php echo base_url(); ?>c_laporan_print">
				<i class="glyphicon glyphicon-edit icon-white"></i> Print 
			</a></center>
			</td>
		  </tr>
		  </tr>
          <tr>
            <td colspan=3 class="center">
				<center><a class="" href="<?php echo base_url(); ?>c_diagram_laba">
				<i class="glyphicon glyphicon-edit icon-white"></i> Diagram Laba Rugi 
			</a></center>
			</td>
		  </tr>
        <?php }	?>
    </tbody>    
    </table>

    <?php require('footer.php'); ?>