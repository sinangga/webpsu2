<?php include "../library/fungsi-tgl-indo.php";?>
    <section class="content-header">
      <h1>
        Daftar Billing
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
                  <th>Instansi</th>
                  <th>Kode Billing</th>
                  <th>Tanggal Billing</th>
                  <th>Kadaluarsa</th>
                  <th>Total</th>
                  <th>Print</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $i = 1;
                    $query = mysql_query("SELECT * FROM billing INNER JOIN pengguna INNER JOIN data_masuk WHERE billing.email = pengguna.email AND billing.kode_billing=data_masuk.kode_billing");
                      // tampilkan data billing selama masih ada
                      while($data = mysql_fetch_array($query)) {
                        $tgl = ubahformattgl($data['tgl_masuk']);
                        $tgl1 = ubahformattgl($data['tgl_bil']);
                        $tgl2 = ubahformattgl($data['kadaluarsa']);
                      echo("
                      <tr class='odd gradeA'>
                      <td align='center'>$i</td>
                      <td align='center'>$tgl</td> 
                      <td align='center'>$data[nama]</td> 
                      <td align='center'>$data[instansi]</td>
                      <td align='center'>$data[kode_billing]</td>
                      <td align='center'>$tgl1</td> 
                      <td align='center'>$tgl2</td>
                      <td align='center'>$data[total]</td> 
                      <td>
                      <a href='../billing-print.php?id=$data[id_masuk]' target='_blank' class='btn btn-primary btn-sm'><i class='fa fa-print'></i> Print</a></td> 
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