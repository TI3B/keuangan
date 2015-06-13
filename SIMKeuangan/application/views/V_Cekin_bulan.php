?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Data Cek IN</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list-alt"></i>Presensi Data Bulanan Cek In Kamar </h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="sincos" class="center" style="height:300px"></div>
                <p id="hoverdata">Mouse position at (<span id="x">0</span>, <span id="y">0</span>). <span
                        id="clickdata"></span></p>
            </div>
        </div>
    </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i>Cek In Bulanan</h2>

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

            <div id ="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> Data Cek In </label></div></div>
            <div class="col-md-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Pencarian Bulan: <input type="text" aria-controls="DataTables_Table_0"></label></div></div>
            <table class="table table-striped table-bordered table-hover" id="tabelpegawai">
           <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Check In</th>
                    <th>Kode Kamar </th>
                    <th>Kode Data Penginap</th>
                    <th>Tanggal Cek In</th>
                    <th>Durasi</th>
                    <th>Aksi</th>
                   </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> 1</td>
                        <td>000011</td>
                        <td class="center">000111</td>
                        <td class="center">000111</td>
                        <td class="center">1212121</td>
                        <td class="center">1</td>
                        <td class="center">
                            <span class="label-success label label-default">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                View
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tr>
                 </thead>
     

            </table>

<!-- batas -->


                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>

