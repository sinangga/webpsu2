<?php include "../library/fungsi-tgl-indo.php";?>
    <section class="content-header">
      <h1>
        SYNOP/ME.48
      </h1>    
    </section> 
    <!-- Main content -->
    <section class="content container-fluid">
      <!--  Pencarian -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Pencarian</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
               <!-- Date -->
                <div class="form-group">
                  <form role="form" method="GET">
                  <label for="inputtanggal" class="col-sm-3 control-label">Tanggal</label>
                  <div class="col-sm-5">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" placeholder="Pilih Tanggal" id="datepicker" name="tanggal">
                        </div>
                  </div>
                    <div class="col-sm-4">
                    <button type="button" class="btn btn-block btn-success btn-lrg ajax" title="Ajax Request"><i class="fa fa-spin fa-refresh"></i>&nbsp; Cari</button>
                  </form>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="ajax-content">
                <div class="box box-info">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                  <th>Temperatur (&deg;C)</th>
                  <th>Kelembapan Nisbi (%)</th>
                  <th>Minimum(&deg;C)</th>
                  <th>Maksimum(&deg;C)</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                  $i = 1;
                  if(isset($_GET['tanggal'])){
                  $date = $_GET['tanggal'];
                  $tgl = date('Y-m-d', strtotime($tanggal));
                  $query = mysql_query("SELECT * FROM permukaan INNER JOIN waktu WHERE permukaan.id_waktu = waktu.id_waktu AND tanggal='$tgl' ORDER BY id_permukaan");
                  }else{
                  $query = mysql_query("SELECT * FROM permukaan INNER JOIN waktu WHERE permukaan.id_waktu = waktu.id_waktu ORDER BY id_permukaan");
                  }
                      while($data = mysql_fetch_array($query)) {
                        $tgl = ubahformattgl($data['tanggal']);
                      echo("
                      <tr class='odd gradeA'>
                      <td align='center'>$i</td>
                                    <td>$tgl</td> 
                                    <td align='center'>$data[waktu]</td> 
                                    <td align='center'>$data[temperatur]</td> 
                                    <td align='center'>$data[kelembapan]</td>
                                    <td align='center'>$data[suhu_min]</td>
                                    <td align='center'>$data[suhu_max]</td>
                                    <td align='center'>
                                    <a href='observer.php?page=edit_permukaan&id=$data[id_permukaan]'>
                                    <i class='fa fa-edit fa-lg'></i></td>
                                    <td align='center'>
                                    <a href='permukaan-proses.php?hal=delete&id=$data[id_permukaan]' onclick='return confirm(\"Apakah anda yakin akan menghapus data ini?\")'> 
                                    <i class='fa fa-trash-o fa-lg'></i>
                                        </a>
                                    </td>
                                    </tr>
                                    ");
                                    $i++;
                                    }
                                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>


  <script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
</script>