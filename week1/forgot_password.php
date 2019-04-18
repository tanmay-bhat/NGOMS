<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Forgot Password - Charis</title>

	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
</head>
<style type="text/css">
body{
	background-image: url('http://www.wearethecity.com/wp-content/uploads/2013/12/Fotolia_35984804_Subscription_XL.jpg');
	background-repeat: repeat;
	opacity:0.90;
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
<body style="margin-left:0px">
	<div id="header">
		<div>
			<div class="topnav">
			<a href="index.php"   id="logo"><img  height="110px" width="140px" src="https://www.vollie.com.au/uploads/organisation_logos/6098/SF-Logo_Use-on-Light-Backgrounds.png" alt="logo" style="padding-top:15px;"></a>
			<h1 id="titl">CHARIS</h1>
		</div>
		<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="news.php">News &amp; Blog</a></li>
				<li><a href="donate.php">Donate</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div style="margin-bottom:50px">
			<div class="login_div" style="margin-top:30px">
				<h3>Forgot Password ?</h3>
				<form action="./new_password.php" method="post" class="user">
					<label>Email Address</label>
					<input type="email" name="email" required>
					<a href="./login.php" class="back_button">back</a>
					<input type="submit" value="continue" class="forgot">
				</form>
			</div>
		</div>
	</div>
	<?php include("./includes/footer.html"); ?>
</body>
</html>
