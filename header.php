<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stasiun Meteorologi Pangsuma - Kapuas Hulu </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/bmkg.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style2.css">

     <script language="JavaScript">
    var tanggallengkap = new String();
    var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
    namahari = namahari.split(" ");
    var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
    namabulan = namabulan.split(" ");
    var tgl = new Date();
    var hari = tgl.getDay();
    var tanggal = tgl.getDate();
    var bulan = tgl.getMonth();
    var tahun = tgl.getFullYear();
    tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
    </script>

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

 <!-- MAGNIFIC POPUP-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
        <div><img align="center" class="img-fluid" src="img/banner/bg-header.jpg"></img>
        </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo-wiop.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">Beranda</a></li>
                                            <li><a href="#">Profil <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="sejarahbmkg.php">Sejarah</a></li>
                                                    <li><a href="visimisi.php">Visi Misi</a></li>
                                                    <li><a href="tugasbmkg.php">Tugas dan Fungsi</a></li>
                                                    <li><a href="profilstasiun.php">Profil Stasiun</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="" href="#">Informasi Cuaca <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="pracuharian.php">Prakiraan Cuaca</a></li>
                                                    <li><a href="pracu3hari.php">Prakiraan Cuaca 3 Hari</a></li>
                                                    <li><a href="pracumingguan.php">Prakiraan Cuaca Mingguan</a></li>
                                                    <li><a href="pengamatanharian.php">Pengamatan Harian</a></li>
                                                    <li><a href="angin_3000ft.php">Angin 3000 Ft</a></li>
                                                    <li><a href="interactive.php">Interactive Weather and Wave Forecast Maps (BoM)</a></li>
                                                    <li><a href="potensibanjir.php">Potensi Banjir</a></li>
                                                    <li><a href="http://tcwc.bmkg.go.id/siklon" target="_blank">Siklon Tropis</a></li>
                                                    <li><a href="hotspot.php">Informasi Hotspot</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Penerbangan <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="cuacaaktualbandara.php">Cuaca Aktual Bandara</a></li><li><a href="racu.php">Citra Radar</a></li>
                                                    <li><a href="satelit.php">Citra Satelit</a></li>
                                                     <li><a href="metar_speci.php">Metar/Speci</a></li></ul>
                                            </li>
                                            <li><a href="#">Publikasi <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="buletin.php">Buletin</a></li>
                                                    <li><a href="galeri.php">Galeri</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="active" href="kontak.php">Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                      <script language='JavaScript'>document.write(tanggallengkap);</script>
  
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->