<?php
include("./includes/connection.php");
	$sql = "UPDATE donation SET Receive_date='".date("Y-m-d")."' WHERE donate_id='".$_GET['donate']."'";
	mysqli_query($con,$sql);
	$sql = "SELECT * FROM categories WHERE category_id='".$_GET['cat']."'";
	$result = mysqli_query($con,$sql);
	$rs = mysqli_fetch_array($result);
	$avl = $rs['available'];
	if($avl >= 0)
	{
	$sql = "UPDATE categories SET available=".$avl." WHERE category_id='".$_GET['cat']."'";
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
		header("location:donation_manage.php?cat=".$_GET['cat']);
		?>
		<?php
	}

?>
