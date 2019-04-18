<?php
	session_start();
	if(isset($_SESSION["admin"])){
		header("location:./home.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" />
	<title>Admin Login - Charis</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<style type="text/css">
	body{
		background-image: url('http://www.wearethecity.com/wp-content/uploads/2013/12/Fotolia_35984804_Subscription_XL.jpg');
		background-repeat: repeat;
		opacity:0.80;
	}
	.topnav{
	  border-bottom: 1px solid seashell;
	  display: flex;
	}
	#titl{
		padding-right: 900px;

		color: #1B5E20;
		text-decoration: yellow overline;
		font-size: 70px;
		font-family: Tahoma;
	}
	</style>
</head>
<body>
	<div id="header">
		<div class="topnav">
		<a href="index.php"   id="logo"><img  height="110px" width="140px" src="https://www.vollie.com.au/uploads/organisation_logos/6098/SF-Logo_Use-on-Light-Backgrounds.png" alt="logo" style="padding-top:15px;"></a>
		<h1 id="titl">CHARIS</h1>


	</div>
	</div>
	<div id="body">
		<div>
			<a href="../index.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/GreenButton_LeftArrow.svg/1024px-GreenButton_LeftArrow.svg.png" alt="admin" height="70px" width="100px"/></a>
			<div class="login_div">
				<h3>Login</h3>
				<form action="./admin_check.php" method="post" class="user">
					<label>Admin</label>
					<input type="text" name="admin">
					<label>Password</label>
					<input type="password" name="password">
					<input type="submit" value="Authorize">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
