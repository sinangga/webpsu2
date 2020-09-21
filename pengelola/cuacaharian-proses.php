<?php
  include "../library/conn.php";
   
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM pracu_harian". "WHERE id_pracuharian = '".$_GET["id"]."'";

    if (pg_query($conn, $sql))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'data.php?page=cuacaharian';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'data.php?page=cuacaharian';</script>";}
    }
 ?>
