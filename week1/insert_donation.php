<?php
	include("./includes/connection.php");

	//for creating unique id with database checked
	$f = 0;
	$id = "";
	while($f != 1){
		$temp_id = uniqid("DN");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM donation WHERE donate_id='".$temp_id."'";
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$id = $temp_id;
			$f = 1;
		}
	}

	$user_id = $id;
	$name = $_POST["donor_name"];
	$email = $_POST["donor_email"];
	$address = $_POST["donor_address"];
	$city = $_POST["donor_city"];
	$category = $_POST["cat"];
	$date = date("Y-m-d");
	$item = $_POST['items'];
	$description = $_POST["donor_description"];
	$pickup = $_POST["pickup"];
  echo $category."<br>";
	$sql = "INSERT INTO donation(donate_id,donar_name,donar_email,city_id,address,category_id,date,description,pickup,items)
	VALUES('".$user_id."','".$name."','".$email."','".$city."','".$address."','".$category."','".$date."','".$description."','".$pickup."','".$item."')";
	$sql1 = "UPDATE categories
SET available = available+'".$item."'
WHERE category_id= '".$category."'";
	$q=mysqli_query($con,$sql);
	$q1=mysqli_query($con,$sql1);
	if($q == 1 and $q1 == 1){

		mysqli_close($con);
?>
  <script>
	alert("Thank you for donating..");
	</script>

<?php
		 header("location:donate.php");


	}
	else{
		echo "Error".mysqli_error($con);
	}

?>
