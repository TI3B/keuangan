<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="c_tampil">Home</a>
        </li>
        <li>
            <a href="c_labarugi">Data Laba rugi</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i>DATA LABA RUGI</h2>

                <div class="box-icon">
                    <a nohref class="btn btn-setting btn-round btn-default" onclick="$('#myModal').modal('show');">
                        <i class="glyphicon glyphicon-cog"></i>
                    </a>
                    <a nohref class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a nohref class="btn btn-close btn-round btn-default">
                        <i class="glyphicon glyphicon-remove"></i>
                    </a>
                </div>
            </div>
            <div class="box-content">
            
            <table align="center" border="1" cellpadding="5" cellspacing="3">
            <div class="panel-body">
            <div class="table-responsive">
              <div class="col-md-6">
                <form role="form" method="post">   
                  <label for="tgl">Tanggal Inputan:</label>
                  <input type="month" name="bulan" aria-controls="DataTables_Table_0" id="tgl"/>
                  <button type="submit" class="btn btn-md btn-default">Cek</button>

                </form>
              </div>
            </div>
                  
      <?php if($tampil == 1): ?>
          <table class="table table-striped table-bordered table-hover" id="tgl">
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
            <thead>
                    <tr>
                      <th>No Akun</th>
                      <th>Nama Akun</th>
                      <th align="center" colspan="2">Laba-Rugi</th>
                    </tr>
                    <tr >
                      <td>&nbsp;</td>
                      <td class="center">&nbsp;</td>
                      <td ><b>Pemasukkan</b></td>
                      <td ><b>Pengeluaran</b></td>
                    </tr>

            </thead> 
                <tbody>
                    <tr>
                      <td align="center">1</td>
                      <td class="center">Pendapatan</td>
                      <td class="center"><?php echo  $total_tgl['total']; ?></td>
                      <td class="center">&nbsp;</td>
                     
                  </tr>
                    <tr>
                      <td>2</td>
                      <td class="center">Beban Gaji</td>
                      <td class="center">&nbsp;</td>
                      <td class ="center"><?php echo $total_gaji['total']; ?></td>
                      
                      
                      
                    </tr>

                     <tr>
                      <td>3</td>
                      <td class="center">Tunjangan</td>
                      <td class="center">&nbsp;</td>
                      <td class ="center"><?php echo $total_tunjangan['total']; ?></td>
                      
                      
                      
                    </tr>

                    <tr>
                      <td>4</td>
                      <td class="center">Pemeliharaan</td>
                      <td class="center">&nbsp;</td>
                      <td class ="center"><?php echo $total_pemeliharaan['total']; ?></td>
                      
                      
                      
                    </tr>
                     <tr>
                      <td>5</td>
                      <td class="center">Beban Penerangan</td>
                      <td class="center">&nbsp;</td>
                      <td class ="center"><?php echo $total_bebanpenerangan['total']; ?></td>
                      
                      
                      
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="center">Beban Perlengkapan Kantor</td>
                      <td class="center">&nbsp;</td>
                      <td class ="center"><?php echo $total_perlengkapankator['total']; ?></td>
                      
                      
                      
                    </tr>

                     <tr>
                      <td>7</td>
                      <td class="center">Pajak Penghasilan (10% Pendapatan)</td>
                      <td class="center">&nbsp;</td>
                      <td class ="center"><?php $pajak=(($total_tgl['total'])*(10/100)); echo $pajak ; ?></td>
                      
                    </tr>

                    </tr>

                    <tr>
                      <td colspan="4 "></td>
                    </tr>

                     <tr>
                      <td></td>
                      <td class="center">Total</td>
                      <td class="center"><?php echo $total_tgl['total']; ?></td>
                      <td class ="center"><?php $tpeng=($total_gaji['total']+$total_tunjangan['total']+$total_pemeliharaan['total']+$total_bebanpenerangan['total']+$total_perlengkapankator['total']+$pajak); echo $tpeng; ?></td>
                      
                    </tr>

                    <tr>
                      <td colspan="4 "></td>
                    </tr>

                    <tr>
                      <td></td>
                      <td class="center">Saldo laba bulan </td>
                      <td class="center" colspan=2><center><?php echo ($total_tgl['total']-$tpeng); ?></center></td>
                    </tr>
                    <tr>
                    <td>
                       <a class="btn btn-success" href="#"><i class="glyphicon glyphicon-edit icon-white"></i>Print </a>
                    </td>
                       <td>
                        <a class="btn btn-danger" href="<?=base_url()?>c_diagram_laba"> <i class="glyphicon glyphicon-zoom-in"></i>Lihat Diagram Laba</a>
                        <td>
                        </tr>
            </tbody>  
        </table>
        </td>
    </tr>

    </tbody>                 
</table>
      <?php elseif($error):?>
        <div class="alert alert-warning">
          <p><?=$error?></p>
        </div>
      <?php endif;?>
</div>
</div>
</div>
</div>
<!--/row-->
<?php require('footer.php'); ?>
