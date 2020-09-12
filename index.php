
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Login</title>
<link rel="stylesheet" href="css/style_login.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="font-awesome/4.1.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/jquery-ui.min.css" />



</head>

<body style="background-img:url(../photos/resize-img.jpg);">
<div id="loading" style="text-align: center"></div>
<div id="wrapper">

	<form name="login-form" class="login-form" id="f_login" action="" method="post" id="form1">
	
		<div class="header"style="text-align: center">
		<img src="images/logo_tafaqquh.png" class="img-responsive img-circle" width="35%" style="float:left; margin-top:15px;">
		<h3>TAFAQQUH</h3>
		<span><p style="font-size:12px;">Sistem Informasi Pengelolaan Buku</p></span>
		</div>
		
		
	
		<div class="content">
        <div class="form-group">
		<input name="username" type="text" id="user" class="input username"  placeholder="Username"  />
        </div>
        
        <div class="form-group">
		<input name="password" type="password" id="password" class="input password"  placeholder="Password" />	
        </div>
        
  		<p style="color:#F00; size:10px;"></p>
		<input type="submit" name="submit" id="login" value="Login" class="button" />
		</div>
        <div class="error">
				</div>
				<p>

		
	
	</form>

</div>

<div class="gradient"></div>

<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.validate.js"></script>

<?php 
include("validasi/validate_login.php") 
?>

</body>

</html>
