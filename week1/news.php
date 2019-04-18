<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>News - Charis</title>
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
		</div><ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li class="current"><a>News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>

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
		<div id="newsblog">
			<div class="aside">
			<?php
				$sql = "SELECT * FROM news ORDER BY date DESC";
				$result = mysqli_query($con,$sql);
				$rs = mysqli_fetch_array($result);
			?>
				<div>
					<h2><a href="news.php"><?php echo $rs['heading']; ?></a></h2>
					<span class="date">Feb 12, 2019</span> <a href="news.php" class="figure"><img src="<?php echo $rs['image'] ?>" alt="Image" height="180px" width="180px"></a>
					<p>
						<?php echo $rs['description']; ?>
					</p>
				</div>
			<?php
				$count = 1;
				while($rs = mysqli_fetch_array($result)){
					if($count <=4){
			?>
				<ul style="display:inline;">
					<li style="overflow:scroll">
						<h2><a href="news.php"><?php echo $rs['heading']; ?></a></h2>
						<span class="date">Feb 13, 2019</span>
						<p>
							<?php echo $rs['description']; ?>
						</p>
					</li>
				</ul>
			<?php
					}
					$count++;
				}
			?>
			</div>
			<div class="sidebar">
				<div>
					<h2>Recent Post</h2>
					<ul>
						<li>
							<a href="news.php">Since many hospitals have joined us it would greatly help our patients.</a>
						</li>
						<li>
							<a href="news.php">"Hope" is a children orphanage that joined us recently.</a>
						</li>
						<li>
							<a href="news.php">Donors helped senior citizens fulfill their requirements.</a>
						</li>
						<li>
							<a href="news.php">Donors gifted children with toys,clothes and sweets.</a>
						</li>
						<li>
							<a href="news.php">"NaiSoch" and "Savera" foundations joined us.</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</php>
