<?php
	$con = mysqli_connect("localhost","root","","hasstore");
    $pid = $_GET['pid'];
    $ip = getIp();
    $qty = $_GET['quan'];
    $q = $qty + 1;
    $delete_item = "delete from cart where pid = '$pid' and ipadd = '$ip'";
    $run_delete = mysqli_query($con, $delete_item);
    $insert_pro = "insert into cart(pid,ipadd,qty) values('$pid','$ip','$q')";
    $run_pro = mysqli_query($con, $insert_pro);
	





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