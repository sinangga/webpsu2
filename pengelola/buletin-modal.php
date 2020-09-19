<?php include "../library/fungsi-tgl-indo.php";
                $id_masuk= $_GET['id'];
                $sql=mysql_query("SELECT * FROM data_masuk INNER JOIN pengguna WHERE data_masuk.email = pengguna.email AND id_masuk='$id_masuk'");
                $data = mysql_fetch_array($sql);
                $tgl = ubahformattgl($data['tgl_masuk']);
?>

    <!-- Main content -->
    <section class="content container-fluid">
    <section class="invoice">
            <!-- /.box-header -->
        <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
                <?php echo $data['instansi']; ?> 
                (<?php echo $data['kategori_pekerjaan']; ?>)
                <small class="pull-right"><b>Tanggal : <?php echo $tgl ?></b>
                </small>
                </h2>
                </div>
            </div>
            <div class="row invoice-info">
            <div class="col-sm-5">
            <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:40%">Nama Lengkap</th>
                <td>: <b><?php echo $data['nama']; ?></b></td>
              </tr>
              <tr>
                <th>Email</th>
                <td>: <?php echo $data['email']; ?></td>
              </tr>
              <tr>
                <th>No. HP</th>
                <td>: <?php echo $data['no_telpon']; ?></td>
              </tr>
              <tr>
                <th>Keperluan Data</th>
                <td>: <?php echo $data['keperluan_data']; ?></td>
              </tr>
              <tr>
                <th>Kegunaan Data</th>
                <td>: <?php echo $data['kegunaan_data']; ?></td>
              </tr>
              <tr>
                <th>Bukti Transfer</th>
                <td>: 
                  <?php 
                  $transfer = $data['bukti_transfer'];
                  if (is_null($transfer))
                  {echo 'Tidak Ada';
                  }
                  else
                  {
                    echo 'Ada';
                  } ?>
                  </td>
              </tr>
              <tr>
                <th>Status</th>
                <td>: <?php echo $data['keterangan']; ?></td>
              </tr>
              <tr>
                <th>Catatan</th>
                <td>: <?php echo $data['catatan']; ?></td>
              </tr>
            </table>
            </div>
            </div>
        <div class="col-sm-4">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Surat Pengantar :</th>
                <td><a href="<?php echo $data['file_pengantar']?>"><button type="button" class="btn btn-primary">
                <i class="fa fa-download"></i> Download
                </button></a></td>
              <tr>
                <th>Bukti Transfer :</th>
                <td><a href="<?php echo $data['bukti_transfer']?>"><button type="button" class="btn btn-primary">
                <i class="fa fa-download"></i> Download
                </button></a></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Billing :</th>
                <td class="pull-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-billing"><i class="fa fa-upload"></i> Upload</button></td>
              </tr>
              <tr>
                <th>Data Kirim :</th>
                <td class="pull-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-data"><i class="fa fa-upload"></i> Upload</button></td>
              </tr>
            </table>
          </div>
        </div>


<div class="modal fade" id="modal-billing">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">BUKTI PENERIMAAN NEGARA</h3>
          </div>
  <div class="modal-body">
    <b>Data Pembayaran Tagihan :</b>
      <form role="form" method="POST" action="billing-proses.php">
        <div class="box-body"> 
            <input type ="hidden" value = "<?php echo $data['id_masuk']; ?>" name ="id_masuk">        
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kode Billing</label>
              <div class="col-sm-9">
                  <input class="form-control" placeholder="Input Kode Billing" name="kode_billing">
                  <input type ="hidden" value = "<?php echo $data['email']; ?>" name ="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Billing</label>
                <div class="col-sm-5">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" placeholder="Pilih Tanggal" id="datepicker" name="tgl_bil">
                    </div>
                </div>
                <div class="col-sm-4">
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <div class="input-group">
                          <input type="text" class="form-control timepicker" name="waktu1">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
              </div>

              <label class="col-sm-3 col-form-label">Tanggal Kadaluarsa</label>
                <div class="col-sm-5">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" placeholder="Pilih Tanggal" id="datepicker2" name="kadaluarsa">
                  </div>
                </div>
                <div class="col-sm-4">
                <div class="bootstrap-timepicker">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="waktu2" id="timepicker">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                </div>
                 <!-- /.timepicker -->
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-form-label">Total Disetor</label>
                  <div class="col-sm-9">
                    <input class="form-control" name="total" placeholder="Angka tanpa tanda baca">
                  </div>
                </div>
            </div>
        </div>
  </div>

  <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary" name="save">Kirim</button>
      </form>  
  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->    

        <div class="modal fade" id="modal-data">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
              <form role="form" action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <h4 class="box-title"><b>UPLOAD DATA</b>
                  
            </h4>
            <hr>
            <?php
  include "../library/config.php";

  if(isset($_POST['upload'])){
        $allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
        $file_name    = $_FILES['file']['name'];
        $xyz = explode('.', $file_name);
        $file_ext   = strtolower(end($xyz));
        $file_size    = $_FILES['file']['size'];
        $file_tmp   = $_FILES['file']['tmp_name'];
        $tglkirim  = date("Y-m-d");
        $char = "kr-";
        $tahun=substr($tglkirim, 0, 4);
        $bulan=substr($tglkirim, 5, 2);
        $tgll=substr($tglkirim, 8, 2);
        $email = $_POST['email'];
        $nama = $char .$tahun .$bulan .$tgll.'-'.$id_masuk.'-'.$email;
        $keterangan = "data terkirim";
        $catatan = $_POST['catatan'];
        $datakirim = $nama.'.'.$file_ext;

        if(in_array($file_ext, $allowed_ext) === true){
          if($file_size < 1044070){
            $lokasi = 'data_kirim/'.$nama.'.'.$file_ext;
             //move_uploaded_file($file_tmp, $lokasi);
            $lokasi2 = 'data_kirim/'.basename($_FILES['file']['name']);
            move_uploaded_file($file_tmp, $lokasi2);
            // $asal='data_kirim/'.$lokasi2;
            rename($lokasi2,$lokasi);
            $in = mysql_query("UPDATE data_masuk SET keterangan = '$keterangan', data_kirim = '$datakirim', tgl_kirim = '$tglkirim', catatan = '$catatan'  WHERE id_masuk = '$id_masuk'");
            if($in){
              echo "<script>alert('File berhasil diupload!')
                window.location= 'observer.php?page=datamasuk';</script>";
            }else{
              echo 
              "<script>alert('ERROR: Gagal upload file!')
                window.location= 'observer.php?page=pilih_datamasuk&id=$data[id_masuk]';</script>";
            }
          }else{
            echo "<script>alert('ERROR: Besar ukuran file (file size) maksimal 1 Mb!')
                window.location= 'observer.php?page=pilih_datamasuk&id=$data[id_masuk]';</script>";
          }
        }else{
          echo "<script>alert('ERROR: Ekstensi file tidak di izinkan!')
                window.location= 'observer.php?page=pilih_datamasuk&id=$data[id_masuk]';</script>";
        }
      }
      ?>
                  <label>Instansi</label>
                  <input class="form-control" value="<?php echo $data['instansi']; ?> " disabled="disabled"  name="instansi"></input>
                  <input class="hidden" value="<?php echo $data['email']; ?> "  name="email"></input>

                </div>
                <div class="form-group">
                  <label>Catatan</label>
                  <textarea class="form-control" name="catatan" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>Upload Data</label>
                  <input type="file" name="file">

                  <p class="help-block">Besar file (file size) maksimal hanya 1 MB</p>
                </div>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="upload">Kirim</button>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->      