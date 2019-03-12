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
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" alt="logo"></a>
		</div>
	</div>
	<div id="body">
		<div>
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
