<?php	include("./includes/session_check.php");	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="./images/logo_icon.png" />
	<title>Admin Panel - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/report.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script src="./js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#show_report").hide(1);
			$("#top_five_report").click(function(){
				$("#show_report").fadeOut(1);
				$("#show_report").load("top_five_donor.php");
				$("#show_report").fadeIn();
			});
			$("#donation_report").click(function(){
				$("#show_report").fadeOut(1);
				$("#show_report").load("donation_report.php");
				$("#show_report").fadeIn();
			});
		});
	</script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" alt="logo"></a>
			<ul id="menus">
				<li><a href="users.php">users</a></li>
				<li><a href="home.php">Donations</a></li>
				<li><a href="upload_media.php">Upload Media</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="events.php">Events</a></li>
				<li class="current"><a href="ngo_activities">NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="ngo_activities">
			<div>
				<!--<a style="width:auto;padding:30px 50px" id="top_five_report">Top Five Donor</a>
				<a id="donation_report" style="width:auto;padding:30px 60px">Donations</a>-->
				<?php
					include("./donation_report.php");
				?>
			</div>
			<div id="show_report">

			</div>
		</div>

	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>
