<?php
	include("./includes/session_check.php");
	include("./includes/connection.php");

	//for creating unique id with database checked
	$f = 0;
	$id = "";
	while($f != 1){
		$temp_id = uniqid("UR");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM user_data WHERE user_id='".$temp_id."'";
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$id = $temp_id;
			$f = 1;
		}
	}

	$user_id = $id;
	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$gender = implode(',',$_POST["radio"]);
	$date = $_POST["dat"];
	$result = explode('-',$date);
	$date = $result[2];
	$month = $result[1];
	$year = $result[0];
	$new = $year.'-'.$month.'-'.$year;
	$address = $_POST["address"];
	$mobile = $_POST["mobile"];
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$file_name = $_FILES["fileToUpload"]["name"];
	$tmp_file = $_FILES["fileToUpload"]["tmp_name"];
	$extension = strchr($file_name,".");

	if(move_uploaded_file($tmp_file,"./Profile_pics/$id$extension")){
		$img = "Profile_pics/$id$extension";
	}
	else{
		$img = "";
	}

	$sql = "INSERT INTO user_data(user_id,first_name,middle_name,last_name,gender,date_of_birth,address,mobile,email,password,profile_pic)
	 VALUES('".$user_id."','".$fname."','".$mname."','".$lname."','".$gender."','".$new."','".$address."','".$mobile."','".$email."','".$password."','".$img."')";
	$q=mysqli_query($con,$sql);
	if($q == 1){
		session_start();
		$sql = "SELECT * FROM user_data WHERE user_id='".$user_id."'";
		$res = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($res)){
			$_SESSION["user_id"] = $rs["user_id"];
		}
		header("location:./index.php");
	}
	else{
		header("location:./error/insert_error.php");
	}
	mysqli_close($con);
?>
