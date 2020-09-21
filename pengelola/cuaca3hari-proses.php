<?php
  include "../library/conn.php";
   
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM pracu_3harian WHERE id_pracu3harian = '$_GET[id]'";

    if (pg_query($sql,$con))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'data.php?page=cuaca3hari';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'data.php?page=cuaca3hari';</script>";}
    }
 ?>
