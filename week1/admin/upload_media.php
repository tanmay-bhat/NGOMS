<?php
	include("./includes/session_check.php");
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" />
	<title>Admin Panel-Charis</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
</head>
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
<body>
	<div id="header">
		<div>
			<div class="topnav">
			<a href="index.php"   id="logo"><img  height="110px" width="140px" src="https://www.vollie.com.au/uploads/organisation_logos/6098/SF-Logo_Use-on-Light-Backgrounds.png" alt="logo" style="padding-top:15px;"></a>
			<h1 id="titl">CHARIS</h1>
		</div><ul>
				<li><a href="users.php">users</a></li>
				<li><a href="home.php">Donations</a></li>
				<li class="current"><a>Upload Media</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="ngo_activities.php">NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="admin_manages">
			<h3>Upload Media</h3><hr>
			<form action="insert_media.php" method="post" enctype="multipart/form-data" class="user">
			<label>Caption</label>
			<input type="text" name="media_cation" required>
			<input type='file' name='fileToUpload' required>
			<label>Description</label>
			<textarea rows="5" cols="35" name="description" required></textarea>

			<input type='submit' value='Upload' required>
			</form>
			<div class="stored">
				<h4>uploaded media</h4><hr>
				<?php
					$sql = "SELECT * FROM media_gallery ORDER BY num DESC";
					$result = mysqli_query($con,$sql);
					$count=1;
					while($rs = mysqli_fetch_array($result)){
						if($count<=4){
						?>
						<a>
							<div>
								<span><?php echo $rs['caption']; ?></span>
								<img src="<?php echo ".".$rs['image']; ?>">
							</div>
						</a>
						<?php
						}
						$count++;
					}
				?>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>
