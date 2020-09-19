    <section class="content-header">
      <h1>
        Laporan Data Curah Hujan
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
                  <th>Jumlah Curah Hujan (mm)</th>
                  <th>Jumlah Hari Hujan</th>
                  <th>Curah Hujan Maksimum (mm/hari)</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $i = 1;
                    $query = mysql_query("SELECT * FROM lap_hujan INNER JOIN tahun INNER JOIN bulan WHERE lap_hujan.id_tahun = tahun.id_tahun AND lap_hujan.id_bulan = bulan.id_bulan");
                      // tampilkan data permukaan selama masih ada
                      while($data = mysql_fetch_array($query)) {
                      echo("
                      <tr class='odd gradeA'>
                      <td align='center'>$i</td>
                                    <td align='center'>$data[tahun]</td> 
                                    <td align='center'>$data[bulan]</td> 
                                    <td align='center'>$data[jlh_hujan]</td>
                                    <td align='center'>$data[jlh_hari]</td>  
                                    <td align='center'>$data[jlh_max]</td> 
                                    <td align='center'>
                                    <a href='observer.php?page=edit_laphujan&id=$data[id_laphujan]'>
                                    <i class='fa fa-edit fa-lg'></i></td>
                                    <td align='center'>
                                    <a href='laphujan-proses.php?hal=delete&id=$data[id_laphujan]' onclick='return confirm(\"Apakah anda yakin akan menghapus data ini?\")'> 
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