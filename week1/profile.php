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
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" alt="logo"></a>
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

      	<img src="<?php echo $rs['profile_pic']; ?>" height="200px" width="200px">
      <br/>
			<h2><label style="color:orange">FIRSTNAME     :</label><?php echo $rs['first_name'] ?></h2></br>
			<h2><label style="color:orange">MIDDLENAME    :</label><?php echo $rs['middle_name'] ?></h2></br>
			<h2><label style="color:orange">LASTNAME      :</label><?php echo $rs['last_name'] ?></h2></br>
			<h2><label style="color:orange">DATE OF BIRTH :</label><?php echo $rs['date_of_birth'] ?></h2></br>
			<h2><label style="color:orange">ADDRESS       :</label><?php echo $rs['address'] ?></h2></br>
			<h2><label style="color:orange">MOBILE        :</label><?php echo $rs['mobile'] ?></h2></br>
			<h2><label style="color:orange">E-MAIL          :</label><?php echo $rs['email'] ?></h2></br>
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
