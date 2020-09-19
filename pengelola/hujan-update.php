<?php include "../library/fungsi-tgl-indo.php";
                $id_hujan= $_GET['id'];
                $sql=mysql_query("SELECT * FROM hujan WHERE id_hujan='$id_hujan'");
                $data = mysql_fetch_array($sql);
                $tgl = ubahformattgl($data['tanggal']);
?>
    <section class="content-header">
      <h1>
        Edit Data Curah Hujan
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
                        <input type="text" class="form-control pull-right" disabled="disabled" name="tanggal" value="<?php echo $tgl ?>">
                        <input type ="hidden" value = "<?php echo $data['id_hujan']; ?>" name ="id_hujan">
                        </div>
                </div>
                <div class="form-group">
                    <label>Curah Hujan (mm)</label>
                        <input class="form-control" value="<?php echo $data['curah_hujan']; ?>" placeholder="Input Curah Hujan" name="curahhujan" required oninvalid="this.setCustomValidity('Jika tidak hujan = 0')" oninput="setCustomValidity('')">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="update">Simpan</button>
              </form>
              </div>
            </div>
          </div>