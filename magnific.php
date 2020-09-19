<!doctype html>
<html>
    <head>
        <title>Membuat Lightbox Popup Gallery dengan Magnific Popup & Datatables plugin bersama codekop.com </title>
        
       
        <!-- BOOTSTRAP 4-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <!-- MAGNIFIC POPUP-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
        <!-- DATATABLES BS 4-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

        <!-- jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <!-- DATATABLES BS 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- BOOTSTRAP 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <!-- MAGNIFIC POPUP-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
        
        <style>
            #portfolio {
			  background: #fff;
			  padding: 30px 0;
			}
			#portfolio .portfolio-overlay {
			  position: absolute;
			  top: 0;
			  right: 0;
			  bottom: 0;
			  left: 0;
			  width: 100%;
			  height: 100%;
			  opacity: 1;
			  transition: all ease-in-out 0.4s;
			}
			#portfolio .portfolio-item {
			  overflow: hidden;
			  position: relative;
			  padding: 0;
			  vertical-align: middle;
			  text-align: center;
			}
			#portfolio .portfolio-item h2 {
			  color: #ffffff;
			  font-size: 24px;
			  margin: 0;
			  text-transform: capitalize;
			  font-weight: 700;
			}
			#portfolio .portfolio-item img {
			  transition: all ease-in-out 0.4s;
			  width: 100%;
			}
			#portfolio .portfolio-item:hover img {
			  -webkit-transform: scale(1.1);
			  transform: scale(1.1);
			}
			#portfolio .portfolio-item:hover .portfolio-overlay {
			  opacity: 1;
			  background: rgba(0, 0, 0, 0.7);
			}
			#portfolio .portfolio-info {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  -webkit-transform: translate(-50%, -50%);
			  transform: translate(-50%, -50%);
			}
            #gambar{
                height:100px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <br/>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Popup Gallery dengan Magnific Popup & Datatables plugin</h4>
                </div>
                <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Nama Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <!--portfolio-->
                                    <div id="portfolio">
                                        <div class="portfolio-item">
                                            <a href="img/coba/streamline.jpg" class="portfolio-popup">
                                                <img src="img/coba/streamline.jpg" alt="your image" class="img-fluid" id="gambar">                                           
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-info">
                                                        <h2>Warna Merah</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--portfolio-->
                                </td>
                                <td>
                                    Warna Merah
                                </td>
                            </tr>
                            
                            <tr>
                                <td>2</td>
                                <td>
                                    <!--portfolio-->
                                    <div id="portfolio">
                                        <div class="portfolio-item">
                                            <a href="image/yellow.jpg" class="portfolio-popup">
                                                <img src="image/yellow.jpg" alt="your image" class="img-fluid" id="gambar">                                           
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-info">
                                                        <h2>Warna Kuning</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--portfolio-->
                                </td>
                                <td>
                                    Warna Kuning
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <!--portfolio-->
                                    <div id="portfolio">
                                        <div class="portfolio-item">
                                            <a href="image/blue.jpg" class="portfolio-popup">
                                                <img src="image/blue.jpg" alt="your image" class="img-fluid" id="gambar">                                            
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-info">
                                                        <h2>Warna Biru</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--portfolio-->
                                </td>
                                <td>
                                    Warna Biru
                                </td>
                            </tr>
                            
                            <tr>
                                <td>4</td>
                                <td>
                                    <!--portfolio-->
                                    <div id="portfolio">
                                        <div class="portfolio-item">
                                            <a href="image/green.png" class="portfolio-popup">
                                                <img src="image/green.png" alt="your image" class="img-fluid" id="gambar">                                            
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-info">
                                                        <h2>Warna Hijau</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--portfolio-->
                                </td>
                                <td>
                                    Warna Hijau
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <!--portfolio-->
                                    <div id="portfolio">
                                        <div class="portfolio-item">
                                            <a href="image/browen.jpg" class="portfolio-popup">
                                                <img src="image/browen.jpg" alt="your image" class="img-fluid" id="gambar">                                            
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-info">
                                                        <h2>Warna Coklat</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--portfolio-->
                                </td>
                                <td>
                                    Warna Coklat
                                </td>
                            </tr>
                        </tbody>
                    </table><!--table -->
                </div><!-- card body -->
            </div><!-- card -->
        </div><!-- container -->
        <script type="text/javascript">
            // memanggil plugin magnific popup
            $('.portfolio-popup').magnificPopup({
                type: 'image',
                removalDelay: 300,
                mainClass: 'mfp-fade',
                gallery: {
                enabled: true
                },
                zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function (openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
                }
            });
            // memanggil datatable membuat callback datatable pada magnific popup agar gambar 
            // yang di munculkan sesuai pada saat pindah paginasi dari 1 ke 2 
            // dan seterusnya
            $(document).ready(function() {
                var table = $('#example').dataTable({
                "fnDrawCallback": function () {
                    $('.portfolio-popup').magnificPopup({
                    type: 'image',
                    removalDelay: 300,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300,
                        easing: 'ease-in-out',
                        opener: function (openerElement) {
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                        }
                    }
                    });
                    }
                });
            });

        </script>
    </body>
</html>