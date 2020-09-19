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
    $char = "hjn";
    $id_laphujan = $char .'-'.$tahun .'-'.$id_bulan;

      $sql = "INSERT INTO lap_hujan (id_laphujan, id_tahun, id_bulan, jlh_hujan, jlh_hari, jlh_max)
      VALUES ('$id_laphujan', '$id_tahun', '$id_bulan', '$_POST[jlh_hujan]','$_POST[jlh_hari]', '$_POST[jlh_hari]')";
      
    		if (mysql_query($sql,$con))
      		{echo "<script>alert('Data berhasil ditambah')
          window.location= 'observer.php?page=laporan-hujan';</script>";}
          else {echo "<script>alert('Gagal menambah data')
          window.location= 'observer.php?page=laporan-hujan';</script>";}
  }

    if(isset($_POST['update'])){
    $id_laphujan = $_POST['id_laphujan'];
    $jlh_hujan = $_POST['jlh_hujan'];
    $jlh_hari = $_POST['jlh_hari'];
    $jlh_max = $_POST['jlh_max'];

    $sql = "UPDATE lap_hujan SET jlh_hujan = '$jlh_hujan', jlh_hari = '$jlh_hari', jlh_max = '$jlh_max' WHERE id_laphujan = '$id_laphujan'";
    
    if (mysql_query($sql,$con))
      {echo "<script>alert('Data berhasil diubah')
      window.location= 'observer.php?page=laporan-hujan';</script>";}
      else {echo "<script>alert('Gagal mengubah data')
      window.location= 'observer.php?page=laporan-hujan';</script>";}
    }
  
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM lap_hujan WHERE id_laphujan = '$_GET[id]'";

    if (mysql_query($sql,$con))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'observer.php?page=laporan-hujan';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'observer.php?page=laporan-hujan';</script>";}
    }
 ?>
