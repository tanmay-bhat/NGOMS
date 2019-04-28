<?php
session_start();
include("./includes/connection.php");
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Profile - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
	body{
		background-image: url('./Pictures/background.jpg');
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
			<a href="index.php"   id="logo"><img  height="110px" width="140px" src="./Pictures/logo.png" alt="logo" style="padding-top:15px;"/></a>
			<h1 id="titl">CHARIS</h1>
		</div>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php
					if(isset($_SESSION["user_id"])){
				?>
					<li class="current"><a>Profile</a></li>

					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php
					}
					else{
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="gallery">

			<div class="body">
				<?php
				  $uid = $_SESSION['user_id'];
					$sql = "SELECT * FROM user_data WHERE user_id = '$uid'";
					$result = mysqli_query($con,$sql);
					$rs = mysqli_fetch_array($result);
				?>

      	<img src="<?php echo $rs['profile_pic']; ?>" height="300px" width="400px" style="padding-left:600px;position:absolute;">
      <br/>
			<h2><label style="color:Grey">FIRST   NAME     :</label><?php echo $rs['first_name'] ?></h2></br>
			<h2><label style="color:Grey">MIDDLENAME    :</label><?php echo $rs['middle_name'] ?></h2></br>
			<h2><label style="color:Grey">LASTNAME      :</label><?php echo $rs['last_name'] ?></h2></br>
			<h2><label style="color:Grey">DATE OF BIRTH :</label><?php echo $rs['date_of_birth'] ?></h2></br>
			<h2><label style="color:Grey">ADDRESS       :</label><?php echo $rs['address'] ?></h2></br>
			<h2><label style="color:Grey">MOBILE        :</label><?php echo $rs['mobile'] ?></h2></br>
			<h2><label style="color:Grey">E-MAIL          :</label><?php echo $rs['email'] ?></h2></br>
			</div>
			<div class="footer">
				<p>
				Be kind and start helping people.
				<a href="login.php">Get Involved</a>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>
