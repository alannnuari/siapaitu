<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Test Connection
  </h1>      
</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- right column -->
    <div class="col-md-5">
        <div class="box box-primary">       
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-edit"></i> Ping !
                      </div>
                      <div class="panel-body">
                                  <form role="form" method="post"  action="">                            
                                      <div>
                                          <label>IP Address</label>
                                          <input name="ip_adr" type="text" class="form-control" id="ip_adr"placeholder="IP Address" autofocus required>
                                      </div>
                                      <br>
                                      <div>
                                      <button type="submit" name="ping" class="btn btn-primary" name="Submit">TEST</button>                                      
                                      </div>
                                  </form>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
        </div>
    </div>
  </div>
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- right column -->
    <div class="col-md-5">
        <div class="box box-primary">       
          <div class="row">
              <div class="col-lg-12">
                    <div class="panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-edit"></i> Result !
                      </div>
                      <div class="panel-body">
                        <?php 
                          if (isset($_POST['ping'])) {                            
                            $ip =   $_POST['ip_adr'];
                            $j = 3;
                            exec("ping -n $j $ip", $output, $status);
                            //print_r($output);

                            $jumlah = count($output);
                            for($i=2; $i < 5; $i++){
                                  echo $output[$i];
                                  echo "<br>";
                                  $string = $output[$i];
                                  if (preg_match('%time=(.*?)-ms TTL%', $string, $display) === 1) {
                                      echo $display[1];
                                  }
                            }
                          }
                          ?>

                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
          </div>
          <!-- /.row -->
        </div>
    </div>
  </div>
</section>
<!-- /.content -->



                  