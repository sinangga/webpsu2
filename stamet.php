<!doctype html>
<html class="no-js" lang="zxx">
<?php include "header.php"; ?>


   <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-left">
                        <h3>Selamat Datang</h3>
                        <p>Stasiun Meteorologi Pangsuma Kapuas Hulu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <div class="form_area">
                        <h3>Peringatan Dini Kalimantan Barat Hari ini</h3>
                         <p<?php
        $url = "http://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/WarningsXML-Kalimantan.xml";
        $sUrl = file_get_contents($url, True);
        $xml = simplexml_load_string($sUrl);
        for ($i=0; $i<sizeof($xml->warnings); $i++) {
            $report = $xml->warnings->reports->report[$i];
                echo "<td class='odd_row'> $report->text</td>";
        
        }

        ?></p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                        <h3>Filter Result</h3>
                        <div class="filter_bordered">
                            <div class="filter_inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select>
                                                <option data-display="Country">Country</option>
                                                <option value="1">Africa</option>
                                                <option value="2">canada</option>
                                                <option value="4">USA</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select>
                                                <option data-display="Travel type">Travel type</option>
                                                <option value="1">advance</option>
                                                <option value="2">advance</option>
                                                <option value="4">premium</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="range_slider_wrap">
                                            <span class="range">Prise range</span>
                                            <div id="slider-range"></div>
                                            <p>
                                                <input type="text" id="amount" readonly style="border:0; color:#7A838B; font-weight:400;">
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="reset_btn">
                                <button class="boxed-btn4" type="submit">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="img/place/1.png" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>California</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">5 Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="img/place/2.png" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>Korola Megna</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">5 Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="img/place/3.png" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>London</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">5 Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="img/place/4.png" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>Miami Beach</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">5 Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="img/place/5.png" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>California</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">5 Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="img/place/6.png" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>Saintmartine Iceland</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">5 Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more_place_btn text-center">
                                <a class="boxed-btn4" href="#">More Places</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- newletter_area_start  -->
        <div class="newletter_area overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-lg-10">
                                <div class="newsletter_text">
                                    <h4>BULETIN STASIUN METEOROLOGI PANGSUMA - KAPUAS HULU (Buletin Agustus 2020)</h4>
                                    <p>Edisi buletin sebelumnya <a href="buletin.html">lihat disini!</a></p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-4">
                                <div class="mail_form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="newsletter_btn">
                                                <button class="boxed-btn4 " type="submit" >Download</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newletter_area_end  -->

 <div class="recent_trip_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="date">
                            <a href="#">
                                <h4>Potensi Hujan Kapuas Hulu</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <img src="img/coba/H08.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                     <div class="single_trip">
                        <div class="date">
                            <a href="#">
                                <h4>Citra Satelit EH Kapuas Hulu</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <img src="img/coba/satelit.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="date">
                            <a href="#">
                                <h4>Titik Panas (Hotspot) Kapuas Hulu</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <img src="img/coba/hotspot.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="date">
                            <a href="#">
                                <h4>Potensi Kebakaran Hutan</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a href="img/coba/karhutla.jpg"><img src="img/coba/karhutla.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="single_trip">
                        <div class="date">
                            <a href="#">
                                <h4>Prakiraan Angin</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a href="img/coba/streamline.jpg"><img src="img/coba/streamline.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                     <div class="single_trip">
                        <div class="date">
                            <a href="#">
                                <h4>Prakiraan Hujan (Akumulasi 24 Jam)</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a href="img/coba/hujan.gif"><img src="img/coba/hujan.gif" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








 <?php include "footer.php"; ?>

</html>