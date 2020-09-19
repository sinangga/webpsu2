<?php
 if(!isset($_SESSION)){
  session_start();}
 
//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['usernamep']) || empty($_SESSION['usernamep'])) {
    //redirect ke halaman login
    {echo "<script>alert('Anda Belum Login')
    window.location='login.php';</script>";}
    exit();
 }
?>