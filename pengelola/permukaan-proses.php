<?php
	include "../library/conn.php";
	if(isset($_POST['save'])){
    $tanggal = $_POST['tanggal'];
    $id_waktu = $_POST['id_waktu'];
    $query = mysql_query("SELECT * FROM waktu WHERE id_waktu = '$id_waktu' ");
      // tampilkan data selama masih ada
        while($data = mysql_fetch_array($query)) {
          $waktu=$data['waktu'];
       }
    $tanggal = date('Y-m-d', strtotime($tanggal));
    $char = "SY";
    $tahun=substr($tanggal, 0, 4);
    $bulan=substr($tanggal, 5, 2);
    $tgll=substr($tanggal, 8, 2);
    $jam=substr($waktu, 0, 2);
    $id_permukaan = $char .$tahun .$bulan .$tgll .$jam;
      $sql = "INSERT INTO permukaan (id_permukaan, tanggal, id_waktu, temperatur, kelembapan, suhu_max, suhu_min)
      VALUES ('$id_permukaan', '$tanggal', '$_POST[id_waktu]', '$_POST[temperatur]', '$_POST[kelembapan]', '$_POST[suhu_max]', '$_POST[suhu_min]')";
      
    		if (mysql_query($sql,$con))
      		{echo "<script>alert('Data berhasil ditambah')
          window.location= 'observer.php?page=permukaan';</script>";}
          else {echo "<script>alert('Gagal menambah data')
          window.location= 'observer.php?page=permukaan';</script>";}
  }

    if(isset($_POST['update'])){
    $id_permukaan = $_POST['id_permukaan'];
    $temperatur = $_POST['temperatur'];
    $kelembapan = $_POST['kelembapan'];
    $suhu_max = $_POST['suhu_max'];
    $suhu_min = $_POST['suhu_min'];

    $sql = "UPDATE permukaan SET temperatur = '$temperatur', kelembapan = '$kelembapan', suhu_max = '$suhu_max', suhu_min = '$suhu_min' WHERE id_permukaan = '$id_permukaan'";
    
    if (mysql_query($sql,$con))
      {echo "<script>alert('Data berhasil diubah')
      window.location= 'observer.php?page=permukaan';</script>";}
      else {echo "<script>alert('Gagal mengubah data')
      window.location= 'observer.php?page=permukaan';</script>";}
    }
  
  if(isset($_GET['hal'])=='delete'){
      $sql = "DELETE FROM permukaan WHERE id_permukaan = '$_GET[id]'";

    if (mysql_query($sql,$con))
      {echo "<script>alert('Data berhasil dihapus')
      window.location= 'observer.php?page=permukaan';</script>";}
      else {echo "<script>alert('Gagal menghapus data')
      window.location= 'observer.php?page=permukaan';</script>";}
    }
 ?>
