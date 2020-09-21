<?php include "../library/fungsi-tgl-indo.php";
?>
    <section class="content-header">
      <h1>
        Data Buletin <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-data"><i class="fa fa-file-o"></i> Cover</button> 
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
                  <th><center>No</center></th>
                  <th><center>Bulan</center></th>
                  <th><center>Link Gambar</center></th>
                  <th><center>Link File</center></th>
                  <th><center>PDF</center></th>
                  <th><center>Hapus</center></th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $i = 1;
                    $query = pg_query("SELECT * FROM buletin");
                      // tampilkan data permukaan selama masih ada
                      while($data = pg_fetch_array($query)) {
                      echo("
                      <tr class='odd gradeA'>
                      <td align='center'>$i</td>
                                    <td align='center'>$data[bln_buletin]</td> 
                                    <td align='center'>$data[gbr_buletin]</td> 
                                    <td align='center'>$data[file_buletin]</td>
                                    <td align='center'>
                                    <a href='' data-toggle='modal' data-target='#modal-pdf'><i class='fa fa-edit fa-lg' ></i></a>
                                      </td>
                                    <td align='center'>
                                    <a href='lapsuhu-proses.php?hal=delete&id=$data[id_buletin]' onclick='return confirm(\"Apakah anda yakin akan menghapus data ini?\")'> 
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


        <div class="modal fade" id="modal-data">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title">COVER BULETIN</h3>
              </div>
              <div class="modal-body">
              <form role="form" action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  
            <?php
            
  include "../library/config.php";

  if(isset($_POST['upload'])){
        $allowed_ext  = array('png', 'jpg', 'jpeg');
        $file_name    = $_FILES['file']['name'];
        $xyz = explode('.', $file_name);
        $file_ext   = strtolower(end($xyz));
        $file_size    = $_FILES['file']['size'];
        $file_tmp   = $_FILES['file']['tmp_name'];
        $char = "pengelola/coverbltn/buletin-";
        $kar = "buletin-";
        $bulan = $_POST['bulan'];
        $namagbr = $kar .$bulan;
        $namafile = $char .$bulan;
        $lokasifile = $namafile.'.'.$file_ext;

        if(in_array($file_ext, $allowed_ext) === true){
          if($file_size < 1044070){
            $lokasi = 'coverbltn/'.$namagbr.'.'.$file_ext;
             //move_uploaded_file($file_tmp, $lokasi);
            $lokasi2 = 'coverbltn/'.basename($_FILES['file']['name']);
            move_uploaded_file($file_tmp, $lokasi2);
            // $asal='data_kirim/'.$lokasi2;
            rename($lokasi2,$lokasi);
           $in = pg_query("INSERT INTO buletin (id_buletin, bln_buletin, gbr_buletin, file_buletin)
      VALUES (NULL,'$bulan','$lokasifile', 'NULL')");
            if($in){
              echo "<script>alert('File berhasil diupload!')
                window.location= 'data.php?page=buletin';</script>";
            }else{
              echo 
              "<script>alert('ERROR: Gagal upload file!')
                window.location= 'data.php?page=buletin';</script>";
            }
          }else{
            echo "<script>alert('ERROR: Besar ukuran file (file size) maksimal 1 Mb!')
                window.location= 'data.php?page=buletin';</script>";
          }
        }else{
          echo "<script>alert('ERROR: Ekstensi file tidak di izinkan!')
                window.location= 'data.php?page=buletin';</script>";
        }
      }
      ?>
                  <label>Bulan</label>
                  <input class="form-control" name="bulan"></input>
   
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

 <div class="modal fade" id="modal-pdf">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">FILE BULETIN</h3>
          </div>
  <div class="modal-body">
      <form role="form" method="POST" action="buletin-proses.php">
        <div class="box-body"> 
            <div class="form-group">
              <label>Bulan</label>
                <?php $query = pg_query("SELECT * FROM buletin"); 
                  while($data = pg_fetch_array($query)) {
                      echo("
                      ");}?>
                <input class="form-control" value="<?php echo $data['bln_buletin']; ?> " disabled="disabled"  name="bulan"></input>
                  <input class="hidden" value="<?php echo $data['id_buletin']; ?> "  name="id_buletin"></input>

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
      <button type="submit" class="btn btn-primary" name="save">Kirim</button>
      </form>  
  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->  