<?php
	include "../library/conn.php";
	if(isset($_POST['save'])){
    $tanggal = $_POST['tanggal'];
    $tanggal = date('Y-m-d', strtotime($tanggal));
    $char = "RA";
    $tahun=substr($tanggal, 0, 4);
    $bulan=substr($tanggal, 5, 2);
    $tgll=substr($tanggal, 8, 2);
    $id_hujan = $char .$tahun .$bulan .$tgll;

      $sql = "INSERT INTO hujan (id_hujan, tanggal, curah_hujan)
      VALUES ('$id_hujan', '$tanggal', '$_POST[curahhujan]')";
      
    		if (mysql_query($sql,$con))
      		{echo "<script>alert('Data berhasil ditambah')
          window.location= 'observer.php?page=hujan';</script>";}
          else {echo "<script>alert('Gagal menambah data')
          window.location= 'observer.php?page=hujan';</script>";}
  }

    if(isset($_POST['update'])){
    $id_hujan = $_POST['id_hujan'];
    $curah_hujan = $_POST['curahhujan'];

    $sql = "UPDATE hujan SET curah_hujan = '$curah_hujan' WHERE id_hujan = '$id_hujan'";
    
    if (mysql_query($sql,$con))
      {echo "<script>alert('Data berhasil diubah')
      window.location= 'observer.php?page=hujan';</script>";}
      else {echo "<script>alert('Gagal mengubah data')
      window.location= 'observer.php?page=hujan';</script>";}
    }
  
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM hujan WHERE id_hujan = '$_GET[id]'";

    if (mysql_query($sql,$con))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'observer.php?page=hujan';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'observer.php?page=hujan';</script>";}
    }
 ?>
