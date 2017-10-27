<?php
	session_start();
	include('include/db.php');
	global $con;
	$email = $_SESSION['email'];
	$orderpl = "select * from cart where ipadd = '$email'";
	$run_orderpl = mysqli_query($con,$orderpl);
	while ($row = mysqli_fetch_array($run_orderpl)) {
		$pid = $row['pid'];
		$qty = $row['qty'];
		$ord = "insert into orderplace(pid,ipadd,qty) values('$pid','$email','$qty')";
		$runord = mysqli_query($con,$ord);

	}
	$delcart = "delete from cart where ipadd = '$email'";
	$rundel = mysqli_query($con,$delcart);
	echo '<script>alert("Taking you to payment portal")</script>';
	echo '<script>window.open("index.php","_self")</script>';
?>