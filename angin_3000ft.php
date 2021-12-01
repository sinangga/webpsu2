<!DOCTYPE html>
<html>
<body>

<img id="myImg" width="1920" height="1080">

<script>
var d = new Date();
var yy = d.getUTCFullYear()
var yy = yy.toString ()
if (d.getUTCMonth() <= 8) {
	var mm = 1+d.getUTCMonth()
	var mm = "0"+mm
  var mm = mm.toString ();
} else {
  	var mm = 1+d.getUTCMonth()
    var mm = mm.toString ();
}

var dte = d.getUTCDate()
if (dte<10){
	dte = "0"+dte;
 } else {
    dte = dte;
}

var jam = d.getUTCHours()
if (jam < 12 ) {
    jam = "070000";
} else {
    jam = "070000"
}

var tgl = yy + mm + dte + jam;
document.getElementById("myImg").src = "http://web.meteo.bmkg.go.id//media/data/bmkg/Angin3000ft/Streamline_"+tgl+".jpg";
</script>

</body>
</html>
