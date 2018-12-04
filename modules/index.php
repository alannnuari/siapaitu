<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard        
  </h1>      
</section>
  
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
            <b style="font-size: 20px;">
            <?php             
                $qs = mysql_query("SELECT * FROM tblkit_alat as alat, tblkit_lokasi as lokasi WHERE alat.id_lokasi=lokasi.id_lokasi"); 
                $js = mysql_num_rows($qs);
            ?>
            <b style="font-size: 25px;">Total Seluruh <?=$js;?> Device</b><br>

              <?php             
                  $q_kantor = mysql_query("SELECT DISTINCT nama_lokasi FROM tblkit_alat as alat, tblkit_lokasi as lokasi WHERE alat.id_lokasi=lokasi.id_lokasi ORDER BY lokasi.nama_lokasi ASC"); 
                  $js_kantor = mysql_num_rows($q_kantor);
              ?>
              <table class="table">
                <?php 
                  while ($d_kantor = mysql_fetch_array($q_kantor)) {    
                ?>
                <tr>
                  <?php 
                    $kantor = $d_kantor['nama_lokasi'];
                    $jumlah = mysql_num_rows(mysql_query("SELECT * FROM tblkit_alat as alat, tblkit_lokasi as lokasi WHERE alat.id_lokasi=lokasi.id_lokasi AND lokasi.nama_lokasi='$kantor'"));
                  ?>
                  <td width="25%"><?= $kantor;?>  </td>
                  <td>: <?=$jumlah;?> Device</td>
                </tr>
                <?php } ?>
              </table>
              </b>
          <br>
        </div>
        <div class="icon">
          <i class="fa fa-file-text-o"></i>
        </div>
        <a href="<?=$base_url?>device" class="small-box-footer">Selengkapnya<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <!--
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>
            <?php             
                $q_kantor = mysql_query("SELECT DISTINCT nama_lokasi FROM tblkit_alat as alat, tblkit_lokasi as lokasi WHERE alat.id_lokasi=lokasi.id_lokasi AND lokasi.nama_lokasi LIKE 'KANTOR%'"); 
                $js_kantor = mysql_num_rows($q_kantor);
            ?>
            <b style="font-size: 16px;">Jumlah Device Kantor : Total <?=$js_kantor;?> Device</b><br>
            <table>
              <?php 
                while ($d_kantor = mysql_fetch_array($q_kantor)) {    
              ?>
              <tr>
                <?php 
                  $kantor = $d_kantor['nama_lokasi'];
                  $jumlah = mysql_num_rows(mysql_query("SELECT * FROM tblkit_alat as alat, tblkit_lokasi as lokasi WHERE alat.id_lokasi=lokasi.id_lokasi AND lokasi.nama_lokasi='$kantor' AND lokasi.nama_lokasi LIKE 'KANTOR%'"));
                ?>
                <td><b style="font-size: 18px;"><?= $kantor;?> : </b> </td>
                <td> <?=$jumlah;?> <b style="font-size: 18px;"> Device</b></td>
              </tr>
              <?php } ?>
            </table>
          </h3>
          <br>
        </div>
        <div class="icon">
          <i class="fa fa-file-text-o"></i>
        </div>
        <a href="<?=$base_url?>device" class="small-box-footer">Selengkapnya<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>


    <div class="col-lg-6 col-md-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>
            <?php         
              $q_pl = mysql_query("SELECT DISTINCT nama_lokasi FROM tblkit_alat as alat, tblkit_lokasi as lokasi WHERE alat.id_lokasi=lokasi.id_lokasi AND lokasi.nama_lokasi LIKE 'PL%'"); 
              $js_pl = mysql_num_rows($q_pl);
            ?>
            <b style="font-size: 16px;">Jumlah Device PL : Total <?=$js_pl?> Device</b><br>
            <table>
              <?php 
                while ($d_pl = mysql_fetch_array($q_pl)) {    
              ?>
              <tr>
                <?php 
                  $pl = $d_pl['nama_lokasi'];
                  $jumlah_pl = mysql_num_rows(mysql_query("SELECT * FROM tblkit_alat as alat, tblkit_lokasi as lokasi WHERE alat.id_lokasi=lokasi.id_lokasi AND lokasi.nama_lokasi='$pl' AND lokasi.nama_lokasi LIKE 'PL%'"));
                ?>
                <td><b style="font-size: 18px;"><?= $pl;?> : </b> </td>
                <td> <?=$jumlah_pl;?> <b style="font-size: 18px;"> Device</b></td>
              </tr>
              <?php } ?>
            </table>
          </h3>
          <br>
        </div>
        <div class="icon">
          <i class="fa fa-file-text-o"></i>
        </div>
        <a href="<?=$base_url?>device" class="small-box-footer">Selengkapnya<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>   
  </div>
  -->
  

</section>
<!-- /.content -->