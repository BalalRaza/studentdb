<?php
	//Start session and output buffer
	ob_start();
	session_start();
	
	//Include all necessary files
	include 'config.php';
	include '../includes/test_input.php';
	
	//Now perform checks
	if(isset($_POST['register']))  //IMPORTANT (Ensures that this page has been called from teacher registration page only)
	{
		//get all form data into variables
		$empid = test_input($_POST['empid']);
		$name = test_input($_POST['name']);
		$pass = md5(test_input($_POST['password']));
		
		//make query
		$q = "INSERT INTO teachers(empid, name, password) VALUES('".$empid."','".$name."','".$pass."')";
		if(mysqli_query($conn, $q))
		{
			$_SESSION['eid']=$empid;
			header("Location:../tchr_loggedin.php");
		}
		else
		{
			echo "Database was not updated";
		}
	}
	else
	{
		echo "Button named register was not set";
	}
	
?>