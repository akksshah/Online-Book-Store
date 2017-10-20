<?php
	$con = mysqli_connect("localhost","root","","hasstore");
	$pid = $_GET['pid'];
	$ip = getIp();
	$delete_item = "delete from cart where pid = '$pid' and ipadd = '$ip'";
	$run_delete = mysqli_query($con, $delete_item);
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