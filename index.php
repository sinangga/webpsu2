<!doctype html>
<html class="no-js" lang="zxx">
<?php include "header.php";
include "library/conn.php"; ?>

   <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    
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
                       <div class=""><span class="bold" style="color: #ff0000;">PERINGATAN DINI CUACA</span><span class="bold" style="color: #ff0000;"> KALIMANTAN BARAT </span><span class="bold" style="color: #ff0000;"> HARI INI !!!</span></div>
    </div><br/>
<div style="color: #FFD700 ;">
    <?php
        $url = "https://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/WarningsXML-Kalimantan_Barat.xml";
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
                        <form class="search_form" action="https://www.bmkg.go.id/cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=13" target="_blank">
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Selengkapnya</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                    <a href="https://www.bmkg.go.id/gempabumi/gempabumi-terkini.bmkg" target="_blank">
                                <center><h3>INFO GEMPA BUMI &amp; TSUNAMI</h3></center></a>
<div class="filter_bordered">
                            <div class="filter_inner">
                                <div class="row">
                                    <div class="col-lg-12">
                <a class="left"><img style="width: 100%;" src="http://dataweb.bmkg.go.id/INATEWS/eqmap.gif"></a>
			
			
<?php
$url = "http://data.bmkg.go.id/autogempa.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->gempa); $i++) {
    $gempa = $xml->gempa[$i];
		echo "<br>";
		echo "&nbsp;<table align='center' width='100%' border='0' cellpadding='0' cellspacing='5px'>";
		echo "&nbsp;<tr><td colspan='2' valign='center'>"."<b>" . $gempa->Tanggal . " , " . $gempa->Jam . "</b></td></tr>";
		echo "&nbsp;<tr><td style='width:25px; valign=center;'>"." <img style='height:30px; width:30px' src='img/geof/Mag.png'>"."</td>"."<td>&nbsp;&nbsp;Magnitude : " . $gempa->Magnitude . "</td></tr>";
		echo "&nbsp;<tr><td style='valign=center;'>"."<img style='height:25px; width:25px' src='img/geof/Depth.png'>"."</td>"." <td>&nbsp;&nbsp;Kedalaman : " . $gempa->Kedalaman . "</td></tr>";
		echo "&nbsp;<tr><td style='valign=center;'>"."<img style='height:25px; width:25px' src='img/geof/Loc.png'>"."</td>"." <td>&nbsp;&nbsp;Lokasi : " . $gempa->Lintang . " , ". $gempa->Bujur ."</td></tr>";
		echo "&nbsp;<tr><td style='valign=center;'>"."<img style='height:25px; width:25px' src='img/geof/Kota.png'>"."</td>"." <td>&nbsp;&nbsp;" . $gempa->Wilayah1 . "</td></tr>";
		echo "&nbsp;<tr><td style='valign=center;'>"."<img style='height:25px; width:25px' src='img/geof/Kepot.png'>"."</td>"." <td>&nbsp;&nbsp;" . $gempa->Potensi . "</td></tr>";
		
		echo "</table>";
		echo "<br/>";
		
}
?>	

 <div class="single_select"> </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="range_slider_wrap">
                                       </div>
                                    </div>
                                </div>
                            </div>

                            <div class="reset_btn"> </div>
                        </div>
                    </div>
                </div>

 <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="single_place">
                                <div class="thumb">
                                 <center><h3 >PRAKIRAAN CUACA KABUPATEN KAPUAS HULU </h3></center>
                                 <?php 
                                 $query = pg_query($con,"SELECT * FROM pracu_harian ORDER BY id_pracuharian DESC LIMIT 1");
                                 while($data = pg_fetch_array($query)) {
                                    echo("
                                 
                                 <img src='$data[gbr_pracuharian]'>
                                 ");}?>
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
                                    <p>Edisi buletin sebelumnya <a href="buletin.php">lihat disini!</a></p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-4">
                                <div class="mail_form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="newsletter_btn">
                                                <a class="" download="Pangsuma_agustus2020" href="uploads/buletin/Pangsuma_agustus2020.pdf" ><button class="boxed-btn4 " type="submit" >Download</button>
                                                </a>
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
                            <a href="http://satelit.bmkg.go.id/IMAGE/HIMA/H08_RP_Kalbar.png" target="_blank">
                                <h4>Potensi Hujan Kalbar</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a class= "image-popup" href="http://satelit.bmkg.go.id/IMAGE/HIMA/H08_RP_Kalbar.png"><img class="image-baru" src="http://satelit.bmkg.go.id/IMAGE/HIMA/H08_RP_Kalbar.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                     <div class="single_trip">
                        <div class="date">
                            <a href="http://satelit.bmkg.go.id/IMAGE/HIMA/H08_EH_Kalbar.png" target="_blank">
                                <h4>Citra Satelit EH Kalbar</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a class= "image-popup" href="http://satelit.bmkg.go.id/IMAGE/HIMA/H08_EH_Kalbar.png"><img class="image-baru" src="http://satelit.bmkg.go.id/IMAGE/HIMA/H08_EH_Kalbar.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="date">
                            <a href="http://dataweb.bmkg.go.id/Satelit/IMAGE/HOTSPOT/Hotspot_Kalbar.png" target="_blank">
                                <h4>Titik Panas (Hotspot) Kalbar</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a class= "image-popup" href="http://dataweb.bmkg.go.id/Satelit/IMAGE/HOTSPOT/Hotspot_Kalbar.png"> <img class="image-baru" src="http://dataweb.bmkg.go.id/Satelit/IMAGE/HOTSPOT/Hotspot_Kalbar.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="date">
                            <a href="http://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/20_kalbar_isi_obs.png" target="_blank">
                                <h4>Potensi Kebakaran Hutan / Lahan</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a class= "image-popup" href="http://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/20_kalbar_isi_obs.png"><img src="http://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/20_kalbar_isi_obs.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="single_trip">
                        <div class="date">
                            <a href="https://cdn.bmkg.go.id/DataMKG/CEWS/pch/pch.bulan.1.cond1.png" target="_blank">
                                <h4>Informasi Iklim </h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a class="image-popup" href="https://cdn.bmkg.go.id/DataMKG/CEWS/pch/pch.bulan.1.cond1.png" ><img src="https://cdn.bmkg.go.id/DataMKG/CEWS/pch/pch.bulan.1.cond1.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                     <div class="single_trip">
                        <div class="date">
                            <a href="http://diseminasi.meteo.bmkg.go.id/pelabuhan/img/wrf_hujan.gif" target="_blank">
                                <h4>Prakiraan Hujan (Akumulasi 24 Jam)</h4>
                            </a>
                        </div>
                        <div class="thumb">
                            <a class= "image-popup" href="http://diseminasi.meteo.bmkg.go.id/pelabuhan/img/wrf_hujan.gif"><img src="http://diseminasi.meteo.bmkg.go.id/pelabuhan/img/wrf_hujan.gif" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
   

 <?php include "footer.php"; ?>

</html>                 
					