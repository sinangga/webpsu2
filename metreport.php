<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>MET REPORT/SPECIAL REPORT (QAM)</title>
    <meta charset=utf-8 >
<?php include "header.php"; ?>

<div class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
 <div class="blog-item m-top-10 clearfix">
               <div class="blog-item-container">
			   <dd style="float:left;">
                                <a href="met_report.php" class="logo">
                                    <img style="width: 80px;" src="img/logo2.png" alt="BMKG" >
                                </a>
                            </dd>
                            <dd style="float:left;">
                                <div style="padding-top: 20px;padding-left: 20px; vertical-align: bottom;">
                                    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: black;">BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA
							</br> Local Routine (MET REPORT) and Local Special (SPECIAL REPORT)</span>
                                </div>
                            </dd>
				</br></br>
			   <table class="table table-hover table-striped" >
					<thead style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: black;">
						<tr></tr>
					</thead>
					<tbody style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: black;" align="left">
	<tr>
	<td>IDENTIFICATION OF THE TYPE OF REPORT</td>
	<td>
					<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'>" . $report->type_of_report . "</span>";
	
	break;

}
?>	
	</td></tr>
	
	<tr>
	<td>LOCATION INDICATOR</td>
	<td style="font-weight: bold" align='left'>WIOP</td>
	</tr>
	
	<tr>
	<td>DATE AND TIME OF OBSERVATION</td>
	<td>
					<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'>" . $report->valid_date . "&nbsp;&nbsp;/&nbsp;&nbsp;" . $report->valid_time . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
	
	break;

}
?>	
	</td></tr>
	
	<tr>
	<td>SURFACE WIND DIRECTION, SPEED,<br> AND SIGNIFICANT VARIATION</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];

					if ($report->wind_speed == "00     Kt.") {
			echo '<span style="font-weight: bold"> WIND.&nbsp;&nbsp; CALM';
		} else {
			echo "<span style='font-weight: bold'> WIND.&nbsp;&nbsp;" . $report->wind_direction . "&nbsp;&nbsp;/&nbsp;&nbsp; " . $report->wind_speed . "&nbsp;&nbsp;&nbsp;&nbsp;MAX.&nbsp;&nbsp;" . $report->wind_speed_max . "&nbsp;&nbsp;&nbsp;&nbsp;MIN.&nbsp;&nbsp;" . $report->wind_speed_min . "&nbsp;&nbsp;</span></br>";
			echo "<span style='font-weight: bold'>VRB BTN.&nbsp;&nbsp;". $report->wind_dir_vrb_from . "&nbsp;&nbsp;/AND&nbsp;&nbsp;" . $report->wind_dir_vrb_to . "</span>";
	}
		
		break;
}

    
?>

	</td></tr>

	<tr>
	<td>VISIBILITY</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
	if (strtolower($report->visibility) == "cavok") {
		echo "<span style='font-weight: bold'> CAVOK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
	} else 
		{
		echo "<span style='font-weight: bold'> VIS.&nbsp;&nbsp;" . $report->visibility . "&nbsp;&nbsp;". $report->satuan_visibility . "</span>";
		}
	break;
	
}
?>	
	</td>
	</tr>

<tr>
	<td>RUNWAY VISUAL RANGE (RVR)</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'>" . $report->rvr . "</span>";
	break;

}
?>	
	</td>
	</tr>
	
	<tr>
	<td>PRESENT WEATHER</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
	if (strtolower($report->visibility) == "cavok") {
		echo "<span style='font-weight: bold'> WX. NIHIL</span>";
	} else
	{
		echo "<span style='font-weight: bold'>" . $report->present_wather . "</span>";
	}
	break;

}
?>	
	</td>
	</tr>
	
	<tr>
	<td>CLOUD AMOUNT, TYPE AND <br> HEIGHT OF BASE</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
	if (strtolower($report->visibility) == "cavok") {
		echo "<span style='font-weight: bold'>No. Cloud</span>";
	} else
	{
   	echo "<span style='font-weight: bold'>CLD.&nbsp;&nbsp;" . $report->cloud_1 . "&nbsp;&nbsp;&nbsp;&nbsp;(Feet)</span></br>";
	echo "<span style='font-weight: bold'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $report->cloud_2 . "&nbsp;&nbsp;&nbsp;&nbsp;</span></br>";
	echo "<span style='font-weight: bold'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $report->cloud_3 . "&nbsp;&nbsp;&nbsp;&nbsp;</span></br>";
	}
	break;

}
?>	
	</td>
	</tr>
	
	<tr>
	<td>AIR TEMPERATURE AND <br> DEW POINT TEMPERATURE</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'> T.&nbsp;&nbsp;&nbsp;" . $report->temperature . "&nbsp;&nbsp;&nbsp;&nbsp;DP.&nbsp;&nbsp;&nbsp;".$report->dew_point . "&nbsp;&nbsp;&nbsp;( &deg;C )</span>";
	break;

}
?>	
	</td>
	</tr>
	
	<tr>
	<td><br><br>PRESSURE VALUE</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'>QNH.&nbsp;&nbsp;&nbsp;&nbsp;" . $report->qnh_hpa . " &nbsp;&nbsp;&nbsp;&nbsp;hPa</span></br>";
	echo "<span style='font-weight: bold'>QNH.&nbsp;&nbsp;&nbsp;&nbsp;" . $report->qnh_inch . "</span></br>";
	echo "-------------------------------</br>";
	echo "<span style='font-weight: bold'>QFE.&nbsp;&nbsp;&nbsp;&nbsp;" . $report->qfe_hpa . " &nbsp;&nbsp;&nbsp;&nbsp;hPa</span></br>";
	echo "<span style='font-weight: bold'>QFE.&nbsp;&nbsp;&nbsp;&nbsp;" . $report->qfe_inch . "</span>";
	break;

}
?>	
	</td>
	</tr>
	
	<tr>
	<td>SUPPLEMENTARY INFORMATION</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'>" . $report->supplementary_info . "</span>";
	break;

}
?>	
	</td>
	</tr>
	
	<tr>
	<td>TREND FORECAST</td>
	<td align="left">
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'>" . $report->trend_forecast . "</span>";
	break;

}
?>	
	</td>
	</tr>
	
	<tr>
	<td>
	
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'> TIME OF ISSUE :  " . $report->issue_time . "</span>";
	break;

}
?>	
	<br><i>*on request</i>
	</td>
	<td align="left"></td>
	</tr>
	
	<tr>
	<td></td>
	<td align="center">
	
				<?php
$url = "metreport/met_report.xml";
$sUrl = file_get_contents($url, True);
$xml = simplexml_load_string($sUrl);
for ($i=0; $i<sizeof($xml->report); $i++) {
    $report = $xml->report[$i];
	
   	echo "<span style='font-weight: bold'> OBSERVER <br><br>ttd<br><br>" . $report->observer . "</span>";
	break;

}
?>	
	</td>
	
	</tr>
	
					</tbody>
					</table>
 </div>
 </div>
 </div>
                    </div>
            </div>
        </div>
 <?php include "footer.php"; ?>

</html>
