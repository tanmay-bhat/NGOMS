<?php
session_start();
include("./includes/connection.php");
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Gallery - Charis</title>
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
				<li class="current"><a>gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
			<!--		<li><a href="faq.php">FAQ</a></li> -->
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
		<div id="gallery" style="padding-top:50px;">
			<div class="header" style="height:900px;overflow:scroll;">

				<div class="stored">
					<h2>Added Pics</h2><hr>
					<?php
						$sql = "SELECT * FROM media_gallery ORDER BY num DESC";
						$result = mysqli_query($con,$sql);
						$count=1;
						while($rs = mysqli_fetch_array($result)){
							if($count<=8){
							?>
							<a>
								<div style="height:200px">

									<img src="<?php echo $rs['image']; ?>"  class="imgstyle" height="200px" width="500px" style="border:none;padding-left:1500px;" />

								</div>
							</a>
							<?php
							}
							$count++;
						}
					?>
				</div>


     </div>
			<div class="footer">
				<p>
					To help people who need your aid
				</p>
				<a href="login.php">Get Involved</a>
			</div>

	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</style>
</html>
