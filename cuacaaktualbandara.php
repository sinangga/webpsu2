<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <title>Cuaca Aktual Bandara</title>
    <meta charset=utf-8 >
<?php include "header.php"; ?>

<div class="whole-wrap">
		<div class="container box_1170">
    <div class="section-top-border">
            <h1 class="page-title">Cuaca Aktual Bandara Pangsuma-Kapuas Hulu</h1>
			
            
                        
        </div>	
    </div>
</div>	
	


</div>
 
<div class="container m-bot-100 m-left-30 clearfix">
<div class="sixteen columns">

<div class="col-md-12">
<?php
$url = "http://aviation.bmkg.go.id/latest/observation.x.xml.php";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
    if(strtolower($report->icao_id) == "wiop") {
				echo "<span class='slide_observed_time'> Waktu Pengamatan : ".$report->observed_time . " " . $report->time_zone . "</span>";
			
	break;
}
}
    
?> 
<br><br>
	<div class="row" style="background-color:#3CB371; padding: 0px">
	
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div align="center" style="padding:20px">
			<br>
		<?php
$url = "http://aviation.bmkg.go.id/latest/observation.x.xml.php";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
    if(strtolower($report->icao_id) == "wiop") {
				echo '<img style="width: 200px" src="http://aviation.bmkg.go.id/images/weathers/' . $report->symbol . '.png" alt="' . $report->symbol . '"></br>';
				echo '<span style="color:#fff;font-size:20px; font-weight:bold;">' . $report->weather . '</span';
			
	break;
}
}
    
?>
		<br>
		</div>
		</div>
			
		<div class="col-md-8 col-sm-12 col-xs-12" style="background-color:#fff; color:#fff; ">
			<div class="row" style="background-color:#00CED1;border-left:solid 10px #fff; padding: 0px">
				<div class="col-md-6 col-sm-12 col-xs-12" style="padding:5px; border-right:solid 10px #fff;">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<img src='img/property/temp-lg.png' style='width: 50px'>
					</div>
						<div class="col-md-8 col-sm-8 col-xs-8">
					<?php
$url = "http://aviation.bmkg.go.id/latest/observation.x.xml.php";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
    if(strtolower($report->icao_id) == "wiop") {
						echo "<span style='font-size:20px'> Suhu Udara</span><br>"."<span style='font-size:30px'>" . $report->temp . " &deg;C</span>";
	break;
}
}
    
?>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<img src="img/property/dp-lg.png" style="width: 50px">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8">
	<?php
$url = "http://aviation.bmkg.go.id/latest/observation.x.xml.php";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
    if(strtolower($report->icao_id) == "wiop") {				
						echo "<span style='font-size:20px'> Titik Embun<br>" ."<span style='font-size:30px'>". $report->dew_point . " &deg;C</span><br/>";
	break;
}
}
    
?>
					</div>
				</div>
			</div>
			<br>
			
		<div class="row" style="background-color:#00BFFF;border-left:solid 10px #fff; color:#fff; padding: 0px">
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding:5px; border-right:solid 10px #fff;">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<img src="img/property/press-lg.png" style="width: 50px">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8">
		<?php
$url = "http://aviation.bmkg.go.id/latest/observation.x.xml.php";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
    if(strtolower($report->icao_id) == "wiop") {
					echo "<span style='font-size:20px'> Tekanan Udara "."<span style='font-size:30px'>". $report->pressure . " hPa</span>";
	break;
}
}
    
?>
					</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<img src="img/property/vis-lg.png" style="width: 50px">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8">
		<?php
$url = "http://aviation.bmkg.go.id/latest/observation.x.xml.php";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
    if(strtolower($report->icao_id) == "wiop") {				
					echo "<span style='font-size:20px'> Jarak Pandang " ."<span style='font-size:30px'>" . $report->visibility . " km</span>";
		break;
}
}
    
?>				
				</div>
			</div>
		</div>
		<br>
		
			<div class="row" style="background-color:#1E90FF;border-left:solid 10px #fff; color:#fff; padding: 0px">
				<div class="col-md-6 col-sm-12 col-xs-12" style="padding:5px; border-right:solid 10px #fff;">
					<div class="col-md-4 col-sm-4 col-xs-4">
<?php
$url = "http://aviation.bmkg.go.id/latest/observation.x.xml.php";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
    if(strtolower($report->icao_id) == "wiop") {
					if (strtolower($report->wind_speed) == "tenang") {
			echo '';
		} else {
			echo '<img style="width: 50px" src="wind/' . $report->wind_direction . '.png" alt=' . $report->wind_direction . '>';
					echo '</div>';
					echo '<div class="col-md-8 col-sm-8 col-xs-8">';
						echo '<span style="font-size:15px"> Arah Angin <br> '.'<span style="font-size:20px"> dari ' . $report->wind_direction .'</span>';
					 }
		
		break;
}
}
    
?>	
		</div>
		</div>
				<div class="col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<img src="img/property/wind.png" style="width: 50px; height: 30px">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8" >
<?php
$url = "http://aviation.bmkg.go.id/latest/observation.x.xml.php";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
    if(strtolower($report->icao_id) == "wiop") {
if (strtolower($report->wind_speed) == "tenang") {
			echo '<span style="font-size:20px"> Angin <br> ' . '<span style="font-size:30px">'. $report->wind_speed . '</span>';
		} else {		
					echo "<span style='font-size:20px'> Kec. Angin <br> " ."<span style='font-size:30px'>". $report->wind_speed . "</span>"."<span style='font-size:15px'> km/jam</span>";
		}
break;
}
}
    
?>	
				</div>
			</div>
		</div>
		
</div>

	</div>
</div>
	
</div>
</div>
</br>

</br>
        
          <?php include "footer.php"; ?>

</html>