 

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
                  <?php
                  date_default_timezone_set('Asia/Jakarta');
                  echo "<div class='pull-right'>Tanggal : ".date("d-m-Y")."</div>";
                  ?>
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