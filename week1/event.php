<?php
session_start();
include("./includes/connection.php");
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Events - Charis</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li class="current"><a>Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
				<!--	<li><a href="faq.php">FAQ</a></li> -->
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
		<div id="gallery"  style="padding-top:50px;">
			<div class="header">
				<div class="aside" >
				<?php
					$sql = "SELECT * FROM event ORDER BY date DESC";
					$result = mysqli_query($con,$sql);
					$rs = mysqli_fetch_array($result);
				?>
					<div >
						<h2><a href="event.php"><?php echo $rs['event_name']; ?></a></h2>
						<span class="date"><?php echo $rs['date']; ?></span>
						<span class="date"><?php echo $rs['time']; ?></span>
						<p>
								<?php echo $rs['event_description']; ?></br>
							<?php echo $rs['duration']; ?>
							<img src="<?php echo $rs['image']; ?>" height="150px" width="150px;"/>
						</p>
					</div>
				<?php
					$count = 1;
					while($rs = mysqli_fetch_array($result)){
						if($count <=5){
				?>
				<div style="overflow:scroll">
					<ul style="display:inline;" >
						<li>
							<h2><a href="event.php"><?php echo $rs['event_name']; ?></a></h2>
							<span class="date"><?php echo $rs['date']; ?></span>
							<span class="date"><?php echo $rs['time']; ?></span>
							<p>
								<?php echo $rs['event_description']; ?>
							</br>
								<?php echo $rs['duration']; ?>

							</p>
						</li>
					</ul>
				</div>
				<?php
						}
						$count++;
					}
				?>
				</div>
			</div>

			<div class="footer">
				<p>
					 Be kind and start helping people.
				</p>
				<a href="login.php">Get Involved</a>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>
