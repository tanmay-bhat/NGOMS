<?php
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>New Password - Helping Hands</title>

	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/style_form.css">
	<script type="text/javascript">
		function checkPassword(){
			if(document.getElementById("password").value == document.getElementById("password1").value){
				return true;
			}
			else{
				document.getElementById("password").style.border="2px solid #ff3300";
				document.getElementById("password1").style.border="2px solid #ff3300";
				return false;
			}
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
				<li><a href="news.php">News &amp; Blog</a></li>
				<li><a href="donate.php">Donate</a></li>
			</ul>
		</div>
	</div>
	<?php
		if(isset($_GET["email"])){
			$email = $_GET["email"];
		}
		else{
			$email = $_POST["email"];
		}
		$sql = "SELECT * FROM user_data WHERE email='".$email."'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)==1){
			while($rs = mysqli_fetch_array($result)){

				$id = $rs['user_id'];
			}
		}
	else{
		?>
		<script>
			alert("Invalid email...!!");
			window.location="./forgot_password.php";
		</script>
		<?php
	}

		$sql = "SELECT * FROM user_data WHERE user_id='".$id."'";
		$result = mysqli_query($con,$sql);
		$rs = mysqli_fetch_array($result);
		$email = $rs["email"];
	?>
	<div id="body">
		<div style="margin-bottom:50px">
			<div class="login_div" style="margin-top:30px">
				<h3>New Password</h3>
				<form action="./password_update.php" method="post" onsubmit="return checkPassword()" class="user">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<label>Password[10-digits]</label>
					<input type="password" name="password" id="password" pattern=".{8,}">
					<label>Confirm Password[10-digits]</label>
					<input type="password" name="password" id="password1" pattern=".{8,}">
					<input type="submit" value="Update">
				</form>
			</div>
		</div>
	</div>

</body>
</html>
