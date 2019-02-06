<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" />
	<title>Goodness</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div id="header">
		<div>
			<div class="heading">
			<a href="index.php" id="logo"><img src="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" alt="logo" class="hdimage"></a>
			<h1>CHARIS</h1>
		</div>
			<ul class="nav">
				<div class=top id="topnav">
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
				</div>
				<div class="sidenav" id="navside">
        <li><a>Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
			</div>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="header">
			<div>
				<img id="first_image"src="https://www.timinslaw.com/wp-content/uploads/2017/12/charity.jpg" alt="Image">
				<div id="tagline">
					<h1>Help Pepole</h1>
					<h3>We are working here always for helping Pepole.</h3>
				</div>
				<div class="section">
					<h2>Organizing seminars, impact studies, workshops, research study and awareness campaign on educational policies, statistics, health, legal issues, women and children developmental activities.</h2>
					<p>
						We Encouraging sustainable agricultural development and organic farming, Establishing unity, integrity and communal harmony, Encouraging adult education among rural masses and slum dwellers, Working for persons with disability.
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
							<span class="date">Sep 12, 2016</span>
							<h3><a href="news.php">New JOin of Children Foundetions</a></h3>
							<p>
								more and more foundetions are now joining with us "Hope" is a new foundetion which is now going to connect with us.
							</p>
						</li>
						<li>
							<span class="date">Sep 12, 2016</span>
							<h3><a href="news.php">Saved elders</a></h3>
							<p>
								some elder homes(read..)
							</p>
						</li>
					</ul>
					<span class="link"><a href="news.php">Go To News</a></span>
				</div>
				<div class="help">
					<h2>How To Help</h2>
					<a href="login.php"><img src="https://c.tadst.com/gfx/750w/charity-day.jpg" alt="Image"></a>
					<h3><a href="login.php">on your single step</a></h3>
					<p>
						stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
					</p>
					<span class="link"><a href="login.php">Get Involved</a></span>
				</div>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>


<style>
body{
	background-color: #09af00;
}
.heading{
	display:flex;
}
.heading h1{
	font-size: 100px;
	color: #EEFF41;
	background-color:#FFFFFF;
	width: 100%;
  heigth: 170px;
	margin-top: 1px;
}
.hdimage{
	padding-top: 1px;
	height:120px;
}
.nav li{
	list-style-type: none;
	font-size: 39px;
	width: 150px;
		background-color:#1B5E20;
}
.nav a{
	text-decoration: none;
	color:#09af00;
}
.top {
	margin-top: -50px;
	float: right;
	margin-left: 800px;
	padding-left: 5px;
	border-radius: 0 10px 10px 0;
	display: inline-block;
	position: fixed;
	background-color: #1B5E20;

	height: 50px;
}
.top li{
	padding-left: 5px;
	border-radius: 0 10px 10px 0;
	display: inline-block;
}
.sidenav li{
	padding-left: 5px;
	 border-radius: 0 10px 10px 0;
   width: 150px;
}
#navside{
	float:left;
	position: fixed;
	width: 500px;
}
#navside li  a,#topnav li a{
	left: -80px;
  transition: 0.3s;
  text-decoration: none;
  font-size: 20px;
  color: #09af00;
  border-radius: 0 5px 5px 0;
}
#navside li,#topnav li a{
  transition: 0.3s;

}
#navside a:hover,#topnav a:hover {
  padding-left: 20px;
	font-size: 40px;
	color: #EEFF41;
}
#navside li:hover,#topnav li:hover {
  width: 160px;
	border-radius: 10px 15px 15px 10px;
}
#first_image{
	margin-left: 300px;
}
</style>
