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
          }else if($halaman == "modalharian"){
              include "cuacaharian-modal.php";
          }

          if($halaman == "cuaca3hari"){
              include "cuaca3hari.php";
          }else if($halaman == "modal3hari"){
              include "cuaca3hari-modal.php";
          }

           if($halaman == "cuacaseminggu"){
              include "cuacaseminggu.php";
          }else if($halaman == "modalseminggu"){
              include "cuacaseminggu-modal.php";
          }

          if($halaman == "cuacakalbar"){
              include "cuacakalbar.php";
          }else if($halaman == "modalcuacakalbar"){
              include "cuacakalbar-modal.php";
          }

          if($halaman == "sebaranhs"){
              include "sebaranhs.php";
          }else if($halaman == "modalsebaranhs"){
              include "sebaranhs-modal.php";
          }

          if($halaman == "potensikarhutla"){
              include "potensikarhutla.php";
          }else if($halaman == "modalpotensikarhutla"){
              include "potensikarhutla-modal.php";
          }

           if($halaman == "buletin"){
              include "buletin.php";
          }else if($halaman == "modalbuletin"){
              include "buletin-modal.php";
          }

          if($halaman == "kritiksaran"){
              include "kritiksaran.php";
          }else if($halaman == "modalkritiksaran"){
              include "kritiksaran-modal.php";
          }

          //Billing
          if($halaman == "billing"){
              include "billing.php";
          }

           //Data Terkirim
          if($halaman == "terkirim"){
              include "terkirim.php";
          }

          //Permukaan
          else if($halaman == "permukaan"){
              include "permukaan.php";
          }else if($halaman == "input_permukaan"){
              include "permukaan-input.php";
          }else if($halaman == "edit_permukaan"){
              include "permukaan-update.php";
          }

          //Curah Hujan
          else if($halaman == "hujan"){
              include "hujan.php";
          }else if($halaman == "input_hujan"){
              include "hujan-input.php";
          }else if($halaman == "edit_hujan"){
              include "hujan-update.php";
          }

          //Laporan Temperatur
          else if($halaman == "laporan-suhu"){
              include "laporan-suhu.php";
          }else if($halaman == "input_lapsuhu"){
              include "lapsuhu-input.php";
          }else if($halaman == "edit_lapsuhu"){
              include "lapsuhu-update.php";
          }

          //Laporan RH
          else if($halaman == "laporan-rh"){
              include "laporan-rh.php";
          }else if($halaman == "input_laprh"){
              include "laprh-input.php";
          }else if($halaman == "edit_laprh"){
              include "laprh-update.php";
          }

          //Laporan Curah Hujan
          else if($halaman == "laporan-hujan"){
              include "laporan-hujan.php";
          }else if($halaman == "input_laphujan"){
              include "laphujan-input.php";
          }else if($halaman == "edit_laphujan"){
              include "laphujan-update.php";
          }
          ?>
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php"; ?>

