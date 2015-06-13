<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?=base_url()?>Home"</a>
        </li>
        
    </ul>
</div>

<div class=" row">

    <div class="col-md-3 col-sm-8 col-xs-8">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="c_tampil">
            
            <i class="glyphicon glyphicon-home "></i>

            <div>HOME</div>
            <div>(Halaman Utama)</div>
          
        </a>
    </div>

    <div class="col-md-3 col-sm-8 col-xs-8">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-download-alt green"></i>

            <div>PEMASUKAN</div>
            <div>(Data Pemasukan)</div>
            <span class="notification green">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-8 col-xs-8">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="">
            <i class="glyphicon glyphicon-share yellow"></i>

            <div>PENGELUARAN</div>
            <div>(Data Pengeluaran)</div>

            <span class="notification yellow">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-8 col-xs-8">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
            <i class="glyphicon glyphicon-list-alt red"></i>

            <div>LAPORAN</div>
            <div>(Data dan Neraca)</div>
            <span class="notification red">12</span>
        </a>
    </div>
</div>


</div><!--/row-->
<?php require('footer.php'); ?>
