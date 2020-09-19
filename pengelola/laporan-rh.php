    <section class="content-header">
      <h1>
        Laporan Data Kelembapan Nisbi
      </h1>
    </section> 
    <!-- Main content -->
    <section class="content container-fluid">
          <div class="box box-success">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tahun</th>
                  <th>Bulan</th>
                  <th>Rata-Rata</th>
                  <th>Maksimum (%)</th>
                  <th>Minimum (%)</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $i = 1;
                     $query = mysql_query("SELECT * FROM lap_rh INNER JOIN tahun INNER JOIN bulan WHERE lap_rh.id_tahun = tahun.id_tahun AND lap_rh.id_bulan = bulan.id_bulan");
                      // tampilkan data permukaan selama masih ada
                      while($data = mysql_fetch_array($query)) {
                      echo("
                      <tr class='odd gradeA'>
                      <td align='center'>$i</td>
                                    <td align='center'>$data[tahun]</td> 
                                    <td align='center'>$data[bulan]</td> 
                                    <td align='center'>$data[rata]</td>
                                    <td align='center'>$data[max]</td>  
                                    <td align='center'>$data[min]</td> 
                                    <td align='center'>
                                    <a href='observer.php?page=edit_laprh&id=$data[id_laprh]'>
                                    <i class='fa fa-edit fa-lg'></i></td>
                                    <td align='center'>
                                    <a href='laprh-proses.php?hal=delete&id=$data[id_laprh]' onclick='return confirm(\"Apakah anda yakin akan menghapus data ini?\")'> 
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