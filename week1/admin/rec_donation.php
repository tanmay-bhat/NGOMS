<?php
include("./includes/connection.php");
	$sql = "UPDATE donation SET Receive_date='".date("Y-m-d")."' WHERE donate_id='".$_GET['donate']."'";
	mysqli_query($con,$sql);
	$sql = "SELECT * FROM categories WHERE category_id='".$_GET['cat']."'";
	$result = mysqli_query($con,$sql);
	$rs = mysqli_fetch_array($result);
	$avl = $rs['avaliable'];
	if($avl > 0)
	{
	$sql = "UPDATE categories SET avaliable=".$avl." WHERE category_id='".$_GET['cat']."'";
  }
	else{
		echo "not in stock";
	}
	if(mysqli_query($con,$sql)){
		header("location:home.php?");
	}

?>
