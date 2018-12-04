<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Profile      
  </h1>      
</section>

<div style="margin-left: 15px;">
  <?php 
  if(isset($_GET['pesan'])) {
    $hasil = $_GET['pesan'];
    if($hasil == 1)   { echo "<h4><span class='label label-success'>Data berhasil disimpan.</span></h4>";}
    else if($hasil == 2){ echo "<h4><span class='label label-danger'>Data gagal disimpan.</span></h4>";}
    else if($hasil == 3){ echo "<h4><span class='label label-success'>Data berhasil diperbarui.</span></h4>";}
    else if($hasil == 4){ echo "<h4><span class='label label-danger'>Data gagal diperbarui.</span></h4>";}
    else if($hasil == 5){ echo "<h4><span class='label label-success'>Data berhasil dihapus.</span></h4>";}
    else if($hasil == 6){ echo "<h4><span class='label label-danger'>Data gagal dihapus.</span></h4>";}
    else if($hasil == 0){ echo "<h4><span class='label label-danger'>Judul sudah ada. Ganti judul lain.</span></h4>";}        
  }
  ?>
</div>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- left column -->
    <div class="col-md-7">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="panel-body">
            <div class="">
                <?php include 'tabel.php'; ?>
            </div>
            <!-- /.table-responsive -->
          </div>
        </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->