<?php
    include "cek-login.php";
    if(!isset($_SESSION)){
    session_start();}
    $user = $_SESSION['usernamep'];
    $lvl = $_SESSION['level'];
?>
<?php include "header.php"; ?>
<?php include "../library/conn.php";?>
<?php include "leftbar.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
          <?php 
          $halaman = $_GET['page'];
          
          //Data Masuk
          if($halaman == "cuacaharian"){
              include "cuacaharian.php";
          }

          if($halaman == "cuaca3hari"){
              include "cuaca3hari.php";
          }

           if($halaman == "cuacaseminggu"){
              include "cuacaseminggu.php";
          }

          if($halaman == "cuacakalbar"){
              include "cuacakalbar.php";
          }

          if($halaman == "sebaranhs"){
              include "sebaranhs.php";
          }

          if($halaman == "potensikarhutla"){
              include "potensikarhutla.php";
          }

           if($halaman == "buletin"){
              include "buletin.php";
          }

          if($halaman == "kritiksaran"){
              include "kritiksaran.php";
          }

          
          ?>
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php"; ?>

