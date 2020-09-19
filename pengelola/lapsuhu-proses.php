<?php
	include "../library/conn.php";
	if(isset($_POST['save'])){
    $id_tahun =  $_POST['id_tahun'];
    $id_bulan =  $_POST['id_bulan'];
    $query1 = mysql_query("SELECT * FROM tahun WHERE id_tahun = '$id_tahun' ");
      // tampilkan data selama masih ada
        while($data = mysql_fetch_array($query1)) {
          $tahun=$data['tahun'];
       }
    $char = "temp";
    $id_lapsuhu = $char .'-'.$tahun .'-'.$id_bulan;

      $sql = "INSERT INTO lap_suhu (id_lapsuhu, id_tahun, id_bulan, rata, max, min)
      VALUES ('$id_lapsuhu', '$id_tahun', '$id_bulan', '$_POST[rata]','$_POST[max]', '$_POST[min]')";
      
    		if (mysql_query($sql,$con))
      		{echo "<script>alert('Data berhasil ditambah')
          window.location= 'observer.php?page=laporan-suhu';</script>";}
          else {echo "<script>alert('Gagal menambah data')
          window.location= 'observer.php?page=laporan-suhu';</script>";}
  }

    if(isset($_POST['update'])){
    $id_lapsuhu = $_POST['id_lapsuhu'];
    $rata = $_POST['rata'];
    $max = $_POST['max'];
    $min = $_POST['min'];

    $sql = "UPDATE lap_suhu SET rata = '$rata', max = '$max', min = '$min' WHERE id_lapsuhu = '$id_lapsuhu'";
    
    if (mysql_query($sql,$con))
      {echo "<script>alert('Data berhasil diubah')
      window.location= 'observer.php?page=laporan-suhu';</script>";}
      else {echo "<script>alert('Gagal mengubah data')
      window.location= 'observer.php?page=laporan-suhu';</script>";}
    }
  
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM lap_suhu WHERE id_lapsuhu = '$_GET[id]'";

    if (mysql_query($sql,$con))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'observer.php?page=laporan-suhu';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'observer.php?page=laporan-suhu';</script>";}
    }
 ?>
