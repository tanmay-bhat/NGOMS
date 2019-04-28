<?php
	include("./includes/session_check.php");
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<title>Admin Panel - Charis</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<style type="text/css">
	body{
		background-image: url('../Pictures/background.jpg');
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
			<a href="index.php"   id="logo"><img  height="110px" width="140px" src="../Pictures/logo.png" alt="logo" style="padding-top:15px;"></a>
			<h1 id="titl">CHARIS</h1>
		</div><ul>
				 <li><a href="users.php">users</a></li>
				<li><a href="home.php">Donations</a></li>
				<li><a href="upload_media.php">Upload Media</a></li>
				<li class="current"><a>News</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="ngo_activities.php">NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="admin_manages">
			<h3>News Updates</h3><hr>
			<form action="insert_news.php" method="post" enctype="multipart/form-data" class="user">
			<label>Date</label>
			<input type="date" name="news_date" required>
			<label>Time</label>
			<input type="time" name="news_time" required>
			<label>Heading</label>
			<input type="text" name="news_heading" required>
			<label>Image</label>
			<input type='file' name='fileToUpload' required>
			<label>Description</label>
			<textarea rows="5" name="news_description" required></textarea>
			<input type='submit' value='post'>
			</form>
			<div class="stored">
				<h4>Posted News</h4><hr>
				<?php
					$sql = "SELECT * FROM news ORDER BY date DESC";
					$result = mysqli_query($con,$sql);
					$count=1;
					while($rs = mysqli_fetch_array($result)){
						if($count<=4){
						?>
						<a>
							<div>
								<span><?php echo $rs['heading']; ?></span>
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
