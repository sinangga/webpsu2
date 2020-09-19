<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Pengelola</title>
<link rel="icon" href="../dist/img/logo-BMKG1.png" type="image/png"/>
<link rel="stylesheet" href="../css-login/animate.min.css" type="text/css" />
<link rel="stylesheet" href="../css-login/animate.delay.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css-login/login.css" type="text/css"/>
</head>

<body class="loginbody">
<?php include "../library/conn.php";
//kode php untuk menampilkan pesan error
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo"<script>alert('Username dan Password belum diisi!')
      form.pass.focus();</script>";
    } else if ($_GET['error'] == 2) {
        echo"<script>alert('Username belum diisi!')</script>";
    } else if ($_GET['error'] == 3) {
        echo"<script>alert('Password belum diisi!')</script>";
    } else if ($_GET['error'] == 4) {
        echo"<script>alert('Username dan Password tidak terdaftar!')</script>";
    }
}
?>

<?php
ob_start();
 
if (!empty($_SESSION['usernamep'])) {
        header('location:index.php');}
?>

<div id="login-box">
<div class="loginwrapper">
	<div class="loginwrapper zindex100 animate2 bounceInDown">
	<h1 class="logintitle2"><span class="iconfa-lock"><img src="../dist/img-login/lock.png" /></span>LOGIN PENGELOLA<span class="subtitle">Sistem Informasi Pelayanan Data Stamet Pangsuma</span></h1>
        <div class="loginwrapperinner2">
            <form id="loginform" action="otentifikasi.php" name="login" method="post">
                <p class="animate4 bounceIn">Isi Username<input type="text" id="username" name="username" value="" placeholder="Username" /></p>
                <p class="animate5 bounceIn">Isi Password<input type="password" id="password" name="password" placeholder="Password" value="" /></p>
                <p class="animate6 wobble"><button class="btn btn-default btn-block" type="submit" name="login">Masuk</button></p>
            </form>
        </div>
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div>
</div>

<script type="text/javascript">
jQuery.noConflict();

jQuery(document).ready(function(){
	
	var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
	jQuery('.loginwrap').bind(anievent,function(){
		jQuery(this).removeClass('animate2 bounceInDown');
	});
	
	jQuery('#username,#password').focus(function(){
		if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
	});
	
	jQuery('#loginform button').click(function(){
		if(!jQuery.browser.msie) {
			if(jQuery('#username').val() == '' || jQuery('#password').val() == '') {
				if(jQuery('#username').val() == '') jQuery('#username').addClass('error'); else jQuery('#username').removeClass('error');
				if(jQuery('#password').val() == '') jQuery('#password').addClass('error'); else jQuery('#password').removeClass('error');
				jQuery('.loginwrap').addClass('animate0 wobble').bind(anievent,function(){
					jQuery(this).removeClass('animate0 wobble');
				});
			} else {
				jQuery('.loginwrapper').addClass('animate0 fadeOutUp').bind(anievent,function(){
					jQuery('#loginform').submit();
				});
			}
			return false;
		}
	});
});
</script>

</body>
</html>
