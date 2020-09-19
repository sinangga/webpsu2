<?php
include "../library/conn.php";
    unset($_SESSION['usernamep']);
    unset($_SESSION['idp']);
    unset($_SESSION['level']);
//tangkap data dari form login
$usernamep = $_POST['username'];
$passwordp = $_POST['password'];
// $level = $_POST['level'];
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$usernamep = mysql_real_escape_string($usernamep);
$passwordp = mysql_real_escape_string($passwordp);
// $level = mysql_real_escape_string($level);
//cek data yang dikirim, apakah kosong atau tidak
if (empty($usernamep) && empty($passwordp)) {
    //kalau username dan password kosong
    header('location:login.php?error=1');
    break;
} else if (empty($usernamep)) {
    //kalau username saja yang kosong
    header('location:login.php?error=2');
    break;
} else if (empty($passwordp)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
    header('location:login.php?error=3');
    break;
}
 
$q = mysql_query("select * from pengguna where username_pengguna= '$usernamep' and password_pengguna='$passwordp'");

$d = mysql_fetch_array($q);
 
session_start();

if (mysql_num_rows($q) == 1) {
    //kalau username dan password sudah terdaftar di database
    //buat session nama username dengan isi nama user yang login
    $_SESSION['usernamep'] = $usernamep;
    $_SESSION['level'] = $d['level'];
    $_SESSION['idp'] = $d['id_pengguna'];
    header('location:index.php');
    } 
else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:login.php?error=4');
}



?>