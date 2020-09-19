<?php include "../library/fungsi-tgl-indo.php";
                $id_laprh= $_GET['id'];
                $sql=mysql_query("SELECT * FROM lap_rh WHERE id_laprh='$id_laprh'");
                $data = mysql_fetch_array($sql);
?>
    <section class="content-header">
      <h1>
        Edit Data Laporan Kelembapan Nisbi
      </h1>
    </section> 
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
        <div class="col-md-6">
        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>KELEMBAPAN NISBI BULANAN</b></h3>
            </div>
            <form role="form" method="POST" action="laprh-proses.php">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <!-- /.form group -->
                <div class="form-group">
                    <label>Tahun</label>
                       <select class="form-control select2" disabled="disabled" name="id_waktu" style="width: 100%;">
                        <?php  
                          $sql = mysql_query("SELECT * FROM tahun ORDER BY id_tahun ASC");
                          while($query = mysql_fetch_array($sql)){
                          if ($data['id_tahun']==$query['id_tahun']) {
                          echo '<option value="'.$query['id_tahun'].'" selected>'.$query['tahun'].'</option>';
                          }
                          else{
                          echo '<option value="'.$query['id_tahun'].'">'.$query['tahun'].'</option>' ;
                              }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bulan</label>
                        <select class="form-control select2" disabled="disabled" name="id_bulan" style="width: 100%;">
                        <?php  
                          $sql = mysql_query("SELECT * FROM bulan ORDER BY id_bulan ASC");
                          while($query = mysql_fetch_array($sql)){
                          if ($data['id_bulan']==$query['id_bulan']) {
                          echo '<option value="'.$query['id_bulan'].'" selected>'.$query['bulan'].'</option>';
                          }
                          else{
                          echo '<option value="'.$query['id_bulan'].'">'.$query['bulan'].'</option>' ;
                              }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Rata-Rata</label>
                        <input class="form-control" value="<?php echo $data['rata']; ?>" name="rata" required oninvalid="this.setCustomValidity('Isi kelembapan nisbi rata-rata')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Maksimum (&deg;C)</label>
                        <input class="form-control" value="<?php echo $data['max']; ?>" name="max" required oninvalid="this.setCustomValidity('Isi kelembapan nisbi maksimum')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Minimum (&deg;C)</label>
                        <input class="form-control" value="<?php echo $data['min']; ?>" name="min" required oninvalid="this.setCustomValidity('Isi kelembapan nisbi minimum')" oninput="setCustomValidity('')">
                        <input type ="hidden" value = "<?php echo $data['id_laprh']; ?>" name ="id_laprh">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="update">Simpan</button>
              </form>
              </div>
            </div>
          </div>