<?php

session_start();

if (isset($_POST['login'])) 
{
	include 'db.php';

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pwd = mysqli_real_escape_string($con, $_POST['pass']);

	$sql = "SELECT * FROM cust WHERE email='$email'";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);
		
	if ($resultCheck < 1) //if email-id not found
	{
		header("Location: ../login.php?login=emailerror");
		exit();
	}
	else 
	{
		if ($row = mysqli_fetch_assoc($result)) 
		{
			//De-hashing the password
			$hashedPwdCheck = password_verify($pwd, $row['password']);
			if ($hashedPwdCheck == false) 
			{
				header("Location: ../login.php?login=pwderror");
				exit();
			} 
			else if ($hashedPwdCheck == true) 
			{
				
				//Log in the user here
				$_SESSION['name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['address'] = $row['address'];



				if($_SESSION['email']=='admin@gmail.com')
				{
					header("Location: ../insertprod.php");//admin pages
				}
				else
				{
					header("Location: ../shop.php");
				}
				exit();
			}
		}
	}
}
else 
{
	header("Location: ../login.php");
	exit();
}
