<?php include "../library/fungsi-tgl-indo.php";
?>
    <section class="content-header">
      <h1>
        Daftar Data Terkirim
      </h1>
    </section> 
    <!-- Main content -->
    <section class="content container-fluid">
          <div class="box box-success">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Masuk</th>
                  <th>Nama</th>
                  <th>Pekerjaan</th>
                  <th>Instansi</th>
                  <th>Keperluan Data</th>
                  <th>File</th>
                  <th>Tanggal Kirim</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $i = 1;
                    $query = mysql_query("SELECT * FROM data_masuk INNER JOIN pengguna WHERE data_masuk.email = pengguna.email AND keterangan='data terkirim'");
                      // tampilkan data masuk selama masih ada
                      while($data = mysql_fetch_array($query)) {
                        $tgl = ubahformattgl($data['tgl_masuk']);
                        $tgl2 = ubahformattgl($data['tgl_kirim']);
                      echo("
                      <tr class='odd gradeA'>
                      <td>$i</td>
                      <td>$tgl</td> 
                      <td>$data[nama]</td>
                      <td>$data[kategori_pekerjaan]</td>
                      <td>$data[instansi]</td>
                      <td>$data[keperluan_data]</td>
                      <td><a href= 'data_kirim/$data[data_kirim]'><i class='fa fa-download fa-lg'></i></a></td>
                      <td>$tgl2</td> 
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
