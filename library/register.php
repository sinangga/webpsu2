<?php
	include "conn.php";
	session_start();
    $sql = mysql_query("SELECT * FROM siswa WHERE nm_siswa = '$_POST[nama]' || un_siswa = '$_POST[username]'");
    $d = mysql_fetch_array($sql);
    $ada = mysql_num_rows($sql);
    if($ada > 0){
    	echo "<script>alert('Nama sudah ada')
	 window.history.back(); </script>";}
	else{
    $sql1 = "INSERT INTO siswa (nm_siswa, un_siswa, pw_siswa, id_kelas, id_tahun)
    VALUES ('$_POST[nama]', '$_POST[username]', '$_POST[password]', '$_POST[id_kelas]', '$_POST[id_tahun]')";

	if (mysql_query($sql1,$con))
			{echo "<script>alert('Kamu sudah terdaftar! Silakan isi username dan password')
	 window.location= '../login.php';</script>";}
	 else {echo "<script>alert('Silahkan daftar kembali')
	 window.location= '../daftar.php';</script>";}
 	}