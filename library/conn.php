<?php
	$host = "localhost";
	$username = "root";
	$password = ""; 
	$con=mysql_connect($host, $username, $password);
	if(!$con)
	{
		die('Tidak Bisa terkoneksi dengan database: '.mysql_error());
	}
	mysql_select_db("stametpangsuma",$con);
	

	//mysql_connect
	//$host. mengarah pada host.
	//$username. mengarah pada username saat masuk phpmyadmin.
	//$password. mengarah pada password saat masuk phpmyadmin.

?>