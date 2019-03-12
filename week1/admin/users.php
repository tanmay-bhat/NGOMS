<?php
	include("./includes/session_check.php");
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" />
	<title>Admin Panel - Charis</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="https://t3.ftcdn.net/jpg/01/96/73/32/160_F_196733298_kLoT45gDYllKBcJbTiUp1WZIx56XVtz5.jpg" alt="logo"></a>
			<ul>
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
  <h3>Users</h3><hr>
  <table>
    <tr>
      <th>Number</th>
       <th>First_name</th>
       <th>Middle_name</th>
			  <th>last_name</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Address</th>
				<th>Mobile</th>
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
					<td><?php echo $row['gender'];?></td>
					<td><?php echo $row['date_of_birth'];?></td>
					<td><?php echo $row['address'];?></td>
					<td><?php echo $row['mobile'];?></td>
					<td><?php echo $row['email'];?></td>
          <td><input type="checkbox" name="keyToDElete" value="<?php echo $row['user_id'];?>" required></td>
          <td><input type="submit" name="submitDeleteBtn" class="btn btn-info"></td>
        </form>
      </tr>
    <?php $sr++; } ?>
  </table>
  </div>
</div>
<?php	include("./includes/footer.html");	?>
</body>
</html>
