<?php
	include '../includes/test_input.php';
	session_start();
	if(isset($_POST["reg_teacher"]))
	{
		$key = test_input($_POST["passkey"]);
		if($key=="samaritan")
		{
			$_SESSION['msg']="success";
			header("Location:../teacher_registration.php");
		}
		else
		{
			$_SESSION['msg'] = "keyInvalid";
			header("Location:../index.php");
		}
	}
?>