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
	body{
		background-image: url('../Pictures/background.jpg');
		background-repeat: repeat;
		opacity:0.93;
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
				<li  class="current"><a href="users.php">users</a></li>
				<li><a href="home.php">Donations</a></li>
				<li><a href="upload_media.php">Upload media</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="ngo_activities.php">NGO_Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
</div>
<?php $fetch_query =mysqli_query($con,"SELECT * from user_data") or die("could not fetch".mysqli_error()); ?>
<div id="body">
  <?php
  if (isset($_POST['submitDeleteBtn'])) {
   $key = $_POST['keyToDElete'];
   //to check if the records  exists
   $check = mysqli_query($con,"SELECT * from user_data where user_id='$key'") or die("not found".mysqli_error());
   if(mysqli_num_rows($check)>0){
     $querydelete = mysqli_query($con,"Delete from user_data where user_id = '$key'")
     or die("not deleted".mysqli_error()); ?>
      <p>record deleted</p>
      <?php
      header('Location:users.php');
   }
   else{
     ?>
     <p>User doesnot exist</p>
     <?php
   }
  } ?>
  <div class="donation_div acontainer">
  <h3 style="padding-left:150px;">Users</h3>
	<div style="padding-right:1300px;margin-left:150px;">
  <table border="1">
    <tr>
      <th>Number</th>
       <th>First_name</th>
       <th>Middle_name</th>
			  <th>last_name</th>

        <th>Mobile</th>
				<th colspan="2">D___O___B</th>
				<th>E-mail</th>

    </tr>
    <?php
    $sr = 1;
    while($row = mysqli_fetch_array($fetch_query)){?>
      <tr>
        <form action="" method="post" role="form">

          <td><?php echo $sr;?></td>
          <td><?php echo $row['first_name'];?></td>
          <td><?php echo $row['middle_name'];?></td>
					<td><?php echo $row['last_name'];?></td>

					<td><?php echo $row['mobile'];?></td>
						<td colspan="2"><?php echo $row['date_of_birth'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><input type="checkbox" name="keyToDElete" value="<?php echo $row['user_id'];?>" required></td>
					<td><input type="submit" name="submitDeleteBtn" value="delete" class="btn btn-info"></td>
        </form>

      </tr>
    <?php $sr++; } ?>

  </table>
</div>
  </div>
</div>
<?php	include("./includes/footer.html");	?>
</body>
</html>
