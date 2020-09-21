<?php
  include "../library/conn.php";
   
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM kritik_saran WHERE id_kritiksaran = '$_GET[id]'";

    if (pg_query($sql,$con))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'data.php?page=kritiksaran';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'data.php?page=kritiksaran';</script>";}
    }
 ?>
