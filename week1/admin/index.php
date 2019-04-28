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
	<title>Admin Login - Charis</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<style type="text/css">
	body{
		background-image: url('../Pictures/background.jpg');
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
		<a href="index.php"   id="logo"><img  height="110px" width="140px" src="../Pictures/logo.png" alt="logo" style="padding-top:15px;"></a>
		<h1 id="titl">CHARIS</h1>


	</div>
	</div>
	<div id="body">
		<div>
			<a href="../index.php"><img src="../Pictures/back_to_userpage.png" alt="admin" height="70px" width="100px"/></a>
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
