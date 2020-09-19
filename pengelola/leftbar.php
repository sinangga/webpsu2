  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/pengelola.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
          <?php $idPengelola = $_SESSION['idp'];
          $lvl = $_SESSION['level'];
          $sql2 = mysql_query("SELECT * FROM pengguna WHERE id_pengguna ='$idPengelola'");
          $d2 = mysql_fetch_array($sql2);
          $namaPengelola = $d2['nama_pengguna']; ?> 
          <?php echo $namaPengelola; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Prakiraan Cuaca</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
            <li><a href="data.php?page=cuacaharian"><i class="fa fa-circle-o"></i> Prakiraan Cuaca Harian</a></li>
            <li><a href="data.php?page=cuaca3hari"><i class="fa fa-circle-o"></i> Prakiraan Cuaca 3 Hari</a></li>
            <li><a href="data.php?page=cuacaseminggu"><i class="fa fa-circle-o"></i> Prakiraan Cuaca Seminggu</a></li>
            <li><a href="data.php?page=cuacakalbar"><i class="fa fa-circle-o"></i> Prakiraan Cuaca Kal-Bar</a></li>
          </ul>
        </li>
        <li>
          <a href="data.php?page=sebaranhs">
            <i class="fa fa-files-o"></i> <span>Data Sebaran Hotspot</span>
          </a>
        </li>

         <li class="">
          <a href="data.php?page=potensikarhutla">
            <i class="fa fa-files-o"></i> <span>Data Potensi KarHutLa</span>
          </a>
        </li>

         <li>
          <a href="data.php?page=buletin">
            <i class="fa fa-files-o"></i> <span>Data Buletin</span>
          </a>
        </li>

        <li>
          <a href="data.php?page=kritiksaran">
            <i class="fa fa-files-o"></i> <span>Kritik dan Saran</span>
          </a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

