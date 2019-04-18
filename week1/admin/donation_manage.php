<?php
	include("./includes/session_check.php");
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="./images/logo_icon.png" />

	<title>Admin Panel - Charis</title>

	<title>Admin Panel - charis</title>

	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script src="./js/jquery.min.js"></script>
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
			<a href="index.php" id="logo"><img src="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" alt="logo"></a>
			<h1 id="titl">CHARIS</h1>
		</div><ul>
				<li><a href="users.php">users</a></li>
				<li class="current"><a href="home.php">Donations</a></li>
				<li><a href="upload_media.php">Upload Media</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="ngo_activities">NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="admin_manages">
			<?php
				$sql = "SELECT * FROM categories WHERE category_id='".$_GET['cat']."'";
				$result = mysqli_query($con,$sql);
				$rs = mysqli_fetch_array($result);
				$cat = $rs['name'];
			?>
			<h3><?php echo $cat;?>'s Donations</h3>
			<?php
				$sql = "SELECT * FROM categories WHERE category_id='".$_GET['cat']."'";
				$result = mysqli_query($con,$sql);
				$rs = mysqli_fetch_array($result);
				$avl = $rs['avaliable'];
				if( $avl > 0)
				{
					echo "<h4 style='text-align:right;'>".$rs['avaliable']."-".$cat." Available</h4>";
				}else
				{
					echo "<h4 style='text-align:right;'> ".$cat." not Available</h4>";
				}
				?>
			<hr>
			<?php
				$sql = "SELECT * FROM donation WHERE category_id='".$_GET['cat']."' and Receive_date IS NULL";
				$result = mysqli_query($con,$sql);
				while($rs = mysqli_fetch_array($result)){
					?>
					<div style="height:300px; width:350px; margin:20px; box-shadow:0 0 1px;">
						<h2><?php echo $rs['donar_name'] ?></h2>
						<h4><?php echo $rs['donar_email'] ?></h4>

						<p><?php echo $cat; ?></p>
						<form action="rec_donation.php" class="user">
							<input type="hidden" value="<?php echo $_GET['cat']; ?>" name="cat">
							<input type="hidden" value="<?php echo $rs['donate_id']; ?>" name="donate">
							<label>Items</label>
							<h4><?php echo $rs['items'] ?></h4>
							<input type="submit" value="Received" name="btn_reveive">
						</form>
					</div>
					<?php
				}

			?>
			<div class="stored">
			<?php
				if($avl>0){
					?>
			<h4>Send Donations to NGO</h4><hr>
				<div>
						<form action="insert_distribution.php" class="user">
						<label>Items</label>
							<input type="hidden" value="<?php echo $_GET['cat']; ?>" name="cat" min="">
							<input type="number" name="donations" min="1">
						<label>Select NGo</label>
							<select name="ngo_id">
							<?php
								$sql = "SELECT * FROM ngo_data";
								$result = mysqli_query($con,$sql);
								while($rs = mysqli_fetch_array($result)){
									?>
									<option value="<?php echo $rs['ngo_id'];?>" name="nname"><?php echo 	$rs['ngo_name'];?></option>
									<?php
								}
							?>
							</select>
							<input type="submit" value="Send" name="btn_send">
						</form>
					</div>

			</div>
				<?php
				}
				?>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>
