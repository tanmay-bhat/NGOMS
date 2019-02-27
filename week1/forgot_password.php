<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Forgot Password - Charis</title>

	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" alt="logo"></a>
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
