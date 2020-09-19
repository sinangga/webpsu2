<?php
//lanjutkan session yang sudah dibuat sebelumnya
session_start();
 
//hapus session yang sudah dibuat
    unset($_SESSION['usernamep']);
    unset($_SESSION['level']);
    unset($_SESSION['idp']);
 
//redirect ke halaman login
header('location:login.php');
?>