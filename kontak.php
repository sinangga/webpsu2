<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Kontak</title>
    <meta charset=utf-8 >
    <?php include "header.php"; ?>
 <section class="">
        
             <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                     <div id="map" style=" position: relative; overflow: hidden;"> 
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6471.4296436525065!2d112.93670782752486!3d0.8406965385623981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3201eb9f86a9a1eb%3A0xa20c479266fef86c!2sBMKG%20Stasiun%20Meteorologi%20Kelas%20IV%20Putussibau!5e0!3m2!1sid!2sid!4v1599859484400!5m2!1sid!2sid" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                    
    
                </div>
                	<div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Masukan Kritik dan Saran</h2>
                    </div>

                    <div class="col-lg-8">

                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Jalan Adisucipto, Kedamin Hulu</h3>
                                <p>Putussibau Selatan 87114 Indonesia</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>(0567) 2020263</h3>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>stamet.pangsuma@gmail.com</h3>
                                <h3>stamet.putussibau@bmkg.go.id</h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <?php include "footer.php"; ?>

</html>