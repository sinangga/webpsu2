<?php
  include "../library/conn.php";
   
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM potensi_karhutla WHERE id_potensikarhutla = '$_GET[id]'";

    if (pg_query($sql,$con))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'data.php?page=potensikarhutla';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'data.php?page=potensikarhutla';</script>";}
    }
 ?>
