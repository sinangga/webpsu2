<?php
  include "../library/conn.php";
  include "../library/config.php";
   
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM sebaran_hotspot WHERE id_sebaranhotspot = '$_GET[id]'";

    if (pg_query($sql,$con))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'data.php?page=sebaranhs';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'data.php?page=sebaranhs';</script>";}
    }

   if(isset($_POST['save'])){
        $allowed_ext  = array('pdf', 'rar', 'zip');
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
