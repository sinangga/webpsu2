    <section class="content-header">
      <h1>
        Input Data Synop/ME.48
      </h1>
    </section> 
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
        <div class="col-md-6">
        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>SYNOP</b></h3>
            </div>
            <form role="form" method="POST" action="permukaan-proses.php">
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtanggal" class="col-sm-3 control-label">Tanggal/ Jam(UTC)</label>
                  <div class="col-sm-5">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" placeholder="Pilih Tanggal" id="datepicker" name="tanggal">
                        </div>
                  </div>
                    <div class="col-sm-4">
                    <select class="form-control select2" name="id_waktu" style="width: 100%;">
                        <?php  
                        $sql = mysql_query("SELECT * FROM waktu");
                        if(mysql_num_rows($sql) != 0){
                          while($data = mysql_fetch_assoc($sql)){
                          echo '<option value="'.$data['id_waktu'].'">'.$data['waktu'].'</option>';
                          }
                        }
                        ?>
                    </select>
                    </div>
                </div>
              </div>
          </div>
        <div class="box box-warning">
            <div class="box-header with-border">
               <h3 class="box-title"><b>TEMPERATUR</b></h3>
            </div> 
            <!-- /.box-header -->
            <div class="box-body">
              <!-- /.form group -->
                <div class="form-group">
                    <label>Temperatur (&deg;C)</label>
                        <input class="form-control" placeholder="Input Temperatur" name="temperatur" required oninvalid="this.setCustomValidity('Isi Temperatur')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Kelembapan Nisbi (%)</label>
                        <input class="form-control" placeholder="Input Kelembaban Nisbi" name="kelembapan" required oninvalid="this.setCustomValidity('Isi Kelembaban Nisbi')" oninput="setCustomValidity('')">
                </div>
            </div>
        </div>
        <div class="box box-success">
            <div class="box-header with-border">
               <h3 class="box-title"><b>TEMPERATUR EKSTRIM</b></h3>
            </div> 
            <!-- /.box-header -->
            <div class="box-body">
              <!-- /.form group -->
                <div class="form-group">
                    <label>Minimum (&deg;C)</label>
                        <input class="form-control" placeholder="Input Temperatur Minimum" name="suhu_min">
                </div>
                <div class="form-group">
                    <label>Maksimum (&deg;C)</label>
                        <input class="form-control" placeholder="Input Temperatur Maksimum" name="suhu_max">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="save">Simpan</button>
              </div>
            </div>
          </div>
              <!-- /.box-footer -->
        </form> 
