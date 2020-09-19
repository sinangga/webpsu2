<?php include "../library/fungsi-tgl-indo.php";?>
    <section class="content-header">
      <h1>
        Data Curah Hujan
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
                  <th>Tanggal</th>
                  <th>Curah Hujan (mm)</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $i = 1;
                    $query = mysql_query("SELECT * FROM hujan");
                      // tampilkan data hujan selama masih ada
                      while($data = mysql_fetch_array($query)) {
                        $tgl = ubahformattgl($data['tanggal']);
                      echo("
                      <tr class='odd gradeA'>
                      <td align='center'>$i</td>
                                    <td align='center'>$tgl</td> 
                                    <td align='center'>$data[curah_hujan]</td> 
                                    <td align='center'>
                                    <a href='observer.php?page=edit_hujan&id=$data[id_hujan]'>
                                    <i class='fa fa-edit fa-lg'></i></td>
                                    <td align='center'>
                                    <a href='hujan-proses.php?hal=delete&id=$data[id_hujan]' onclick='return confirm(\"Apakah anda yakin akan menghapus data ini?\")'> 
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