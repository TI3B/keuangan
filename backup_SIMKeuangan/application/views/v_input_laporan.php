<?php require('header.php'); ?>
<?php require('menu.php'); ?>

<?php
 echo form_open('c_input_laporan');
?>

<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" width="100%"><tbody><tr><td class="center"><table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	<body>
<tr>
	<td colspan=2 ><center><h2><b> INSERT NERACA </b></h2></center></td>
</tr>
<tr>
	<td colspan=2 >&nbsp;</td>
</tr>		
<tr>
    <td> Tanggal </td>
    <td> <?php echo form_input('tanggal'); ?> </td>
</tr>
<tr>
    <td> Kas </td>
    <td> <?php echo form_input('kas'); ?> </td>
</tr>
<tr>
    <td> Bank </td>
    <td> <?php echo form_input('bank'); ?> </td>
</tr>
<tr>
    <td> Piutang Usaha </td>
    <td> <?php echo form_input('piutang_usaha'); ?> </td>
</tr>
<tr>
    <td> Inventaris </td>
    <td> <?php echo form_input('inventaris'); ?> </td>
</tr>
<tr>
    <td> Hutang Usaha </td>
    <td> <?php echo form_input('utang_usaha'); ?> </td>
</tr>
<tr>
    <td> Hutang Jangka Panjang </td>
    <td> <?php echo form_input('hutang_jangka_panjang'); ?> </td>
</tr>
<tr>
    <td> Modal </td>
    <td> <?php echo form_input('modal'); ?> </td>
</tr>
<tr>
    <td> Laba </td>
    <td> <?php echo form_input('laba'); ?> </td>
</tr>
<tr>
	<td colspan=2 >&nbsp;</td>
</tr>
<tr>
    <td colspan = 2><center> <?php echo form_submit('submit', 'Tambah'); ?> </center></td>
</tr>
</table>

<?php echo form_close(); //menutup form ?>
</form>
</body>

<?php require('footer.php'); ?>