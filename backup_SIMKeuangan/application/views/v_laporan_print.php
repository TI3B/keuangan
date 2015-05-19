<html>
<head>
<script type='text/javascript'>
var s5_taf_parent = window.location;
function popup_print(){
window.open(‘preview.php’,’page’,’toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes’)
}
</script>
</head>
<body onLoad='window.print()'>
<div style="padding-left:10%;padding-right:10%;">
<div><?php echo date('D').' - '.date('M').' - '.date('Y') ?></div>
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" width="100%"><tbody><tr><td class="center"><table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
      <thead>
      	<?php foreach($hasil as $data){ ?>
        <tr>
          <th colspan=3 align=center><h2>Neraca </h2><br><h3><?php echo $data->tanggal;?></h3></th>
        </tr>
		<tr>
			<td colspan = 3 ></td>
		</tr>
		<tr>
			<td colspan = 3 ></td>
		</tr>
		<tr>
			<td colspan = 3 ></td>
		</tr>
      </thead>
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
			<td>Rp. <?php $laba=$data->inventaris; echo $laba; ?>,.</td>
		  </tr>
		  <tr>
			<td> </td>
			<td width="100%">Total Modal</td>
			<td><b>Rp.<?php echo $total_modal=$modal+$laba	; ?>,.</b></td>
		  </tr>
		  <tr>
			<td colspan = 3 ></td>
		</tr>
        
        <?php }	?>
    </tbody>    
    </table>	


</div>
</body>
</html>
