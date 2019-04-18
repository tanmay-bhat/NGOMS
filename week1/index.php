<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Charis</title>
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
		padding-right: 950px;

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
			<h1>CHARIS</h1>
		</div>
		<div style="height:300px">
			<ul>
				<li class="current"><a>Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">Profile</a></li>

					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php
					}
					else{
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>
					<a href="./admin/index.php"><img src="https://logos.textgiraffe.com/logos/logo-name/Admin-designstyle-soccer-m.png" alt="admin" height="70px" width="100px" style="padding-top:-1px;padding-right:45px"/></a>
			</ul>
		</div>
		</div>
	</div>
	<div id="body">
		<div class="header">
			<div>
				<img src="https://www.timinslaw.com/wp-content/uploads/2017/12/charity.jpg" alt="Image" height="350px" width="350px" style="top:80px">
				<div id="tagline">
					<h1>Help People</h1>
					<h3>Where there is charity and wisdom, there is neither fear nor ignorance.</h3>
				</div>
				<div class="section">
					<h2>Organizing seminars, impact studies, workshops, research study and awareness campaigns on educational policies, statistics, health, legal issues, women and children developmental activities.</h2>

					<p>
						We Encourage sustainable agricultural development and organic farming.Establishing unity, integrity and communal harmony.Encouraging adult education among rural masses and slum dwellers.Working for people with disability.
					</p>
					<a href="about.php" class="first">Learn More About Us</a>
					<a href="login.php">Join Us</a>
				</div>
			</div>
		</div>
		<div class="body">
			<div>
				<div class="figure">
					<a href="gallery.php"><img src="https://pbs.twimg.com/media/DL3WyRYXcAAH00f.jpg" alt="Image"></a>
					<h2><a href="gallery.php">gallery</a></h2>
				</div>
				<div class="news">
					<h2>News</h2>
					<ul>
						<li>
							<span class="date">Feb 06, 2019</span>
							<h3><a href="news.php">New Children Foundation has joined us </a></h3>
							<p>
								More and more foundations are  joining  us ."Hope" is a new foundation which is now going to get connect with us.
							</p>
						</li>
						<li>
							<span class="date">Feb 04, 2019</span>
							<h3><a href="news.php">Saved elders</a></h3>
							<p>
								Some elders are now(read..)
							</p>
						</li>
					</ul>
					<span class="link"><a href="news.php">Go To News</a></span>
				</div>
				<div class="help">
					<h2>How To Help</h2>
					<a href="login.php"><img src="https://c.tadst.com/gfx/750w/charity-day.jpg" alt="Image"></a>
					<h3><a href="login.php">In one single step</a></h3>
					<p>
					 We know the needs of people who are poor and disabled.  Start helping people with your abilities.
					</p>
					<span class="link"><a href="login.php">Get Involved</a></span>
				</div>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>
