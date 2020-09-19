<?php
	include "../library/conn.php";
	if(isset($_POST['save'])){
    $tgl_bil = $_POST['tgl_bil'];
    $tgl_bil = date('Y-m-d', strtotime($tgl_bil));
    $kadaluarsa = $_POST['kadaluarsa'];
    $kadaluarsa = date('Y-m-d', strtotime($kadaluarsa));
    $kode_billing = $_POST['kode_billing'];
    $id_masuk = $_POST['id_masuk'];

      $query_insert = "INSERT INTO billing (kode_billing, tgl_bil, waktu1, kadaluarsa, waktu2, email, total)
      VALUES ('$kode_billing','$tgl_bil', '$_POST[waktu1]','$kadaluarsa','$_POST[waktu2]', '$_POST[email]', '$_POST[total]')";
      
      $query_update = "UPDATE data_masuk SET keterangan = 'billing terkirim', kode_billing = '$kode_billing' WHERE id_masuk = $id_masuk";
       //eksekusi query insert
$insert = mysql_query($query_insert);

//eksekusi query update
$update = mysql_query($query_update);

//hasil eksekusi query insert
if($insert)
{ echo "<script>alert('Data berhasil ditambah')
          window.location= 'observer.php?page=datamasuk';</script>";}
else
{echo "<script>alert('Gagal menambah data')
          window.location= 'observer.php?page=datamasuk';</script>";}

//hasil eksekusi query update
if($update)
{ echo "<script>alert('Data berhasil ditambah')
          window.location= 'observer.php?page=datamasuk';</script>";}
else
{echo "<script>alert('Gagal menambah data')
          window.location= 'observer.php?page=datamasuk';</script>";}
    		
}
 ?>