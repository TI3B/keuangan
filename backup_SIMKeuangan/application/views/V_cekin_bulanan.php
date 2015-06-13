<?php require('header.php'); ?>
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
    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list-alt"></i>Diagram Cek in Bulanan</h2>

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
                <div id="piechart" style="height:300px"></div>
            </div>
        </div>
    </div>

    <div class="box col-md-8">
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
            <table align="center" border="1" cellpadding="3" cellspacing="3">
            <div class="panel-body">
            <div class="table-responsive">
            <div class="col-md-3">
            <div id ="DataTables_Table_0_length" class="dataTables_length">
            <label>


            <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
            <option value="1" selected="selected">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
            </select>Data Cek In </label></div></div>
            <div class="col-md-3"><div class="dataTables_filter" id="DataTables_Table_0_filter">
            <div></div>
            <label>Cari Data Cek IN: <input type="Date" aria-controls="DataTables_Table_0"></label></div></div>
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

                        <div class="btn-group">
                        <a class="btn btn-success" href="#"><i class="glyphicon glyphicon-zoom-in icon-white"></i></a>
                        <a class="btn btn-danger" href="#"> <i class="glyphicon glyphicon-trash icon-white"></i></a>
                        </div>
                            
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

<!-- chart libraries start -->
<script src="charisma-master/bower_components/flot/excanvas.min.js"></script>
<script src="charisma-master/bower_components/flot/jquery.flot.js"></script>
<script src="charisma-master/bower_components/flot/jquery.flot.pie.js"></script>
<script src="charisma-master/bower_components/flot/jquery.flot.stack.js"></script>
<script src="charisma-master/bower_components/flot/jquery.flot.resize.js"></script>
<!-- chart libraries end -->
<script src="charisma-master/js/init-chart.js"></script>
<?php require('footer.php'); ?>

