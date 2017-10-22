<?php
    session_start();
	include_once 'db.php';
    $pid = $_GET['pid'];
    $email =$_SESSION['email'];
    $check_pro = "select * from cart where ipadd = '$email' and pid = '$pid'";
    $run_check = mysqli_query($con, $check_pro);
    $numbercheck = mysqli_num_rows($run_check);
    
    if($numbercheck==0){ 
    	$insert_pro = "insert into cart(pid,ipadd,qty) values('$pid','$email','1')";
      $run_pro = mysqli_query($con, $insert_pro);
    }
?>