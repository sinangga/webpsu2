<?php include "../library/fungsi-tgl-indo.php";
                $id_laphujan= $_GET['id'];
                $sql=mysql_query("SELECT * FROM lap_hujan WHERE id_laphujan='$id_laphujan'");
                $data = mysql_fetch_array($sql);
?>
    <section class="content-header">
      <h1>
        Edit Data Laporan Curah Hujan
      </h1>
    </section> 
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
        <div class="col-md-6">
        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>CURAH HUJAN BULANAN</b></h3>
            </div>
            <form role="form" method="POST" action="laphujan-proses.php">
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
                    <label>Jumlah Curah Hujan (mm)</label>
                        <input class="form-control" value="<?php echo $data['jlh_hujan']; ?>" name="jlh_hujan" required oninvalid="this.setCustomValidity('Isi jumlah')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Jumlah Hari Hujan</label>
                        <input class="form-control" value="<?php echo $data['jlh_hari']; ?>" name="jlh_hari" required oninvalid="this.setCustomValidity('Isi jumlah')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Curah Hujan Maksimum (mm/hari)</label>
                        <input class="form-control" value="<?php echo $data['jlh_max']; ?>" name="jlh_max" required oninvalid="this.setCustomValidity('Isi jumlah')" oninput="setCustomValidity('')">
                        <input type ="hidden" value = "<?php echo $data['id_laphujan']; ?>" name ="id_laphujan">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="update">Simpan</button>
              </form>
              </div>
            </div>
          </div>