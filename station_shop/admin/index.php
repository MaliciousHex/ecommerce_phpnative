<?php
	
	session_start();
	
	/* 
		ini adalah file index yang berisi fitur login
	
	*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Progress - Bussiness Company</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
<style>
	
	.hide{ display:none !important;  /*visibility:hidden;*/ }


</style>
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="process/login_admin.php" method="post">
					<label for="login">Username:</label>
					<input id="login" name="username" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep">
						<?php if(isset($_GET['error1']))
						{echo "<p style='color:red; font-size:14px; text-align:center;'>Maaf Username / Password Yang Anda Masukan Salah</p>";
						}else if(isset($_GET['error2'])){
							echo "<p style='color:red; font-size:14px; text-align:center;'>Silahkan login terlebih dahulu</p>";
							}
						 ?>
						
                    </div>
					<button type="submit" class="ok">Login</button> <a class="button hide" href="">Forgotten password?</a>
				</form>
			</div>
			<div class="footer">&raquo; <a href="">http://yourpage.com</a> | Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>
