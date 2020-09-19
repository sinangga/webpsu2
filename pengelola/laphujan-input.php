    <section class="content-header">
      <h1>
        Input Data Laporan Curah Hujan
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
                       <select class="form-control select2" name="id_tahun" style="width: 100%;">
                        <?php  
                        $sql = mysql_query("SELECT * FROM tahun");
                        if(mysql_num_rows($sql) != 0){
                          while($data = mysql_fetch_assoc($sql)){
                          echo '<option value="'.$data['id_tahun'].'">'.$data['tahun'].'</option>';
                          }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bulan</label>
                        <select class="form-control select2" name="id_bulan" style="width: 100%;">
                        <?php  
                        $sql = mysql_query("SELECT * FROM bulan");
                        if(mysql_num_rows($sql) != 0){
                          while($data = mysql_fetch_assoc($sql)){
                          echo '<option value="'.$data['id_bulan'].'">'.$data['bulan'].'</option>';
                          }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Curah Hujan (mm)</label>
                        <input class="form-control" name="jlh_hujan" required oninvalid="this.setCustomValidity('Isi jumlah')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Jumlah Hari Hujan</label>
                        <input class="form-control" name="jlh_hari" required oninvalid="this.setCustomValidity('Isi jumlah')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Curah Hujan Maksimum (mm/hari)</label>
                        <input class="form-control" name="jlh_max" required oninvalid="this.setCustomValidity('Isi jumlah')" oninput="setCustomValidity('')">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="save">Simpan</button>
              </form>
              </div>
            </div>
          </div>