<?php	include("./includes/session_check.php");	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo_icon.png" />
	<title>Admin Panel - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
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
<body>
	<div id="header">
		<div>
			<div class="topnav">
			<a href="index.php"   id="logo"><img  height="110px" width="140px" src="https://www.vollie.com.au/uploads/organisation_logos/6098/SF-Logo_Use-on-Light-Backgrounds.png" alt="logo" style="padding-top:15px;"></a>
			<h1 id="titl">CHARIS</h1>
		</div><ul>
				<li><a href="users.php">users</a></li>
				<li><a href="home.php">Donations</a></li>
				<li><a href="upload_media.php">Upload Media</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="events.php">Events</a></li>
				<li class="current"><a>NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="ngo_activities">
			<div>
				<a href="messages.php">Feedbacks</a>
				<a href="manage_ngo.php">NGO</a>
				<!--<a href="manage_location.php">Locations</a>-->
				<!--<a href="manage_faq.php">FAQ</a>-->
				<a href="reports.php">Reports</a>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>
