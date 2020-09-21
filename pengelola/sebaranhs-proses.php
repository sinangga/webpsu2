<?php
  include "../library/conn.php";
   
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM sebaran_hotspot WHERE id_sebaranhotspot = '$_GET[id]'";

    if (pg_query($sql))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'data.php?page=sebaranhs';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'data.php?page=sebaranhs';</script>";}
    }
 ?>
