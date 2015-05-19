<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        
    </ul>
</div>
<div class=" row">

    <div class="col-md-3 col-sm-8 col-xs-8">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            
            <i class="glyphicon glyphicon-home "></i>

            <div>HOME</div>
            <div>(Halaman Utama)</div>
          
        </a>
    </div>

    <div class="col-md-3 col-sm-8 col-xs-8">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="<?php echo base_url(); ?>c_pemasukan">
            <i class="glyphicon glyphicon-download-alt green"></i>

            <div>PEMASUKAN</div>
            <div>(Data Pemasukan)</div>
            <span class="notification green">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-8 col-xs-8">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="<?php echo base_url(); ?>c_pengeluaran">
            <i class="glyphicon glyphicon-share yellow"></i>

            <div>PENGELUARAN</div>
            <div>(Data Pengeluaran)</div>

            <span class="notification yellow">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-8 col-xs-8">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="<?php echo base_url(); ?>c_laporan">
            <i class="glyphicon glyphicon-list-alt red"></i>

            <div>LAPORAN</div>
            <div>(Data dan Neraca)</div>
            <span class="notification red">12</span>
        </a>
    </div>
    
    <div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" width="100%">
	<tbody>
    	<tr>
        	<td class="center">
				<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
      			<thead>
                    <tr>
                      <th>Kd Pengeluaran</th>
                      <th>Asal Pengeluaran</th>
                      <th>Tanggal Pengeluaran</th>
                      <th>Actions</th>
                    </tr>
      			</thead>
      			<tbody>
                	<?php foreach($hasil as $data){ ?>	
                    <tr>
                      <td><?php echo $data->kd_pengeluaran; ?></td>
                      <td class="center"><?php echo $data->asal_pengeluaran; ?></td>
                      <td class="center"><?php echo $data->tanggal_pengeluaran; ?></td>
                      <td class="center"><a class="btn btn-success" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i> View </a> <a class="btn btn-info" href="#"> <i class="glyphicon glyphicon-edit icon-white"></i> Edit </a> <a class="btn btn-danger" href="#"> <i class="glyphicon glyphicon-trash icon-white"></i> Delete </a> </td>
                    </tr>
                    <?php 
	}
	?>
      			</tbody>
    		</table>
        </td>
    </tr>
    </tbody>
</table>
    </div>
</div>


</div><!--/row-->
<?php require('footer.php'); ?>
