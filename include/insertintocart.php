<?php
	$con = mysqli_connect("localhost","root","","hasstore");
    $pid = $_GET['pid'];
    $ip = getIp();
    $check_pro = "select * from cart where ipadd = '$ip' and pid = '$pid'";
    $run_check = mysqli_query($con, $check_pro);
    $numbercheck = mysqli_num_rows($run_check);
    if($numbercheck==0){
    	$insert_pro = "insert into cart(pid,ipadd,qty) values('$pid','$ip','1')";
      $run_pro = mysqli_query($con, $insert_pro);
    }








    function getIp() {
        $ip = $_SERVER['REMOTE_ADDR'];
   
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
   
        return $ip;
    }
?>