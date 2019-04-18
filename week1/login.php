<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Get Involved - Charis</title>

	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script type="text/javascript">
		function checkPassword(){
			if(document.getElementById("password").value == document.getElementById("password1").value){
				return true;
			}
			else{
				document.getElementById("password").style.border="2px solid #ff3300";
				document.getElementById("password1").style.border="2px solid #ff3300";
				alert("Password doesn't match");
				return false;
			}
		}

		function checknumber(){
			if(document.getElementById("mobile").value.length != 10){
				alert("enter a valid mobile number");

				return false;
		}
	}

		function validateForm(){
  var validation = true;
  validation &= checkPassword();
  validation &= checknumber();
	return validation;
}
	</script>

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
</head>
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
				<li><a href="news.php">News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
					<li class="login"><a href="logout.php">Logout</a></li>
				<?php
					}
					else{
				?>
					<li class="login"><a>Login</a></li>
				<?php
					}
				?>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
			<div>
				<div class="login_div">
					<h3>Login</h3>
					<form action="./login_check.php" method="post" class="user">
						<label>Email Address</label>
						<input type="email" name="email" required>
						<label>Password</label>
						<input type="password" name="password" required>
						<label class="forgot"><a href="forgot_password.php" style="text-decoration: none">forgot password ?</a></label><br>
						<input type="submit" value="Login">
					</form>
				</div>
				<div class="register_div">
					<h3>Register</h3>
					<form action="./registration.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" class="user">
						<label>First Name</label>
						<input type="text" name="fname" required>
						<label>Middle Name</label>
						<input type="text" name="mname" required>
						<label>Last Name</label>
						<input type="text" name="lname" required>
						<label>Gender</label>
						 <input type="radio" name="gender[]" value="male"> Male<br>
             <input type="radio" name="gender[]" value="female"> Female<br>
             <input type="radio" name="gender[]" value="other"> Other
						<label>Date of birth</label>
						<input type="date" name="dat" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required>
						<label>Address</label>
						<input type="text" name="address" required>
						<label>Mobile(10 Digit number)</label>
						<input type="text" name="mobile" id="mobile" pattern="[0-9]{1}[0-9]{9}" required>
						<label>Email Address</label>
						<input type="email" name="email" required>
						<label>Profile pic</label>
						<input type="file" name="fileToUpload">
						<label>Password(More than 8 characters)</label>
						<input type="password" name="password" id="password" pattern=".{8,}" required>


						<input type="submit" value="Register">
					</form>
				</div>
			</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>
