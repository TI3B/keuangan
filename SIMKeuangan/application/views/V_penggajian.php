<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Penggajian pegawai</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i>DATA PENGGAJIAN</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
            <form role="form">   
            <table align="center" border="1" cellpadding="5" cellspacing="3">
            <div class="panel-body">
            <div class="table-responsive">
            <div class="col-md-6">

            <div id ="DataTables_Table_0_length" class="dataTables_length">
            <label>  Nama Jabatan  :<select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
            
            </select></label></div></div>

            <div class="col-md-6"><div class="dataTables_filter" id="DataTables_Table_0_filter">
            <label> Pencarian : <input type="text" aria-controls="DataTables_Table_0"></label></div></div>
            <table class="table table-striped table-bordered table-hover" id="tabelpegawai">
           <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Jabatan</th>
                    <th>Gaji</th>
                    <th>Tunjangan</th>
                    <th>Jumlah Orang</th>
                    <th>Aksi</th>
                   </tr>
   

        </thead>
        <tbody>
        </table>

<!-- batas -->


                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>
