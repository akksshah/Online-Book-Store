<?php
	session_start();
    include_once 'db.php';
    $pid = $_GET['pid'];
    $email =$_SESSION['email'];
    $qty = $_GET['quan'];
    $q = $qty + 1;
    /*$delete_item = "delete from cart where pid = '$pid' and ipadd = '$ip'";
    $run_delete = mysqli_query($con, $delete_item);
    $insert_pro = "insert into cart(pid,ipadd,qty) values('$pid','$ip','$q')";
    $run_pro = mysqli_query($con, $insert_pro);*/
	$update_try = "update cart set qty = '$q' where pid = '$pid' and ipadd = '$email'";
    $run_update = mysqli_query($con, $update_try);





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