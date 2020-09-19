    <section class="content-header">
      <h1>
        Input Data Curah Hujan
      </h1>
    </section> 
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
        <div class="col-md-6">
        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>CURAH HUJAN HARIAN</b></h3>
            </div>
            <form role="form" method="POST" action="hujan-proses.php">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <!-- /.form group -->
                <div class="form-group">
                    <label>Tanggal</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" placeholder="Pilih Tanggal" id="datepicker" name="tanggal">
                        </div>
                </div>
                <div class="form-group">
                    <label>Curah Hujan (mm)</label>
                        <input class="form-control" placeholder="Input Curah Hujan" name="curahhujan" required oninvalid="this.setCustomValidity('Jika tidak hujan = 0.0')" oninput="setCustomValidity('')">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="save">Simpan</button>
              </form>
              </div>
            </div>
          </div>