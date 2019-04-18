<?php
		include("./includes/connection.php");
	$f = 0;
	$id = "";
	while($f != 1){
		$temp_id = uniqid("DS");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM distributions WHERE distribution_id='".$temp_id."'";
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$id = $temp_id;
			$f = 1;
		}
	}
	$sql = "INSERT INTO distributions VALUES('".$id."','".$_GET['ngo_id']."','".$_GET['cat']."','".$_GET['donations']."')";
	if(mysqli_query($con,$sql)){
	$sql = "SELECT * FROM categories WHERE category_id='".$_GET['cat']."'";
	$result = mysqli_query($con,$sql);
	$rs = mysqli_fetch_array($result);
	$avl = $rs['avaliable'];
	if($_GET['donations'] > 0){
	$avl = $avl - $_GET['donations'];
  }else{
		?>
		<script>
			window.location="donation_manage.php?cat=".$_GET['cat'];
			alert("not in stocm,ck.!.,kl!");
		</script>
		<?php
   }
   if($avl >= 0)
   {
	$sql = "UPDATE categories SET avaliable=".$avl." WHERE category_id='".$_GET['cat']."'";
	?>
	<script>
		window.location="home.php?";
		alert("Successfully sent to the ngo.!!");
	</script>
	<?php
  }
	else{
		?>
		<script>
			window.location="donation_manage.php?cat=".$_GET['cat'];
			alert("not in stock.!.,kl!");
		</script>
		<?php
	}
	if(mysqli_query($con,$sql)){

		?>
		<script>
			window.location="home.php?";
			alert("not in stock.!!");
		</script>
		<?php
	}
	else{
		echo mysqli_error($con);
	}}
	else{
		echo mysqli_error($con);
	}
?>
