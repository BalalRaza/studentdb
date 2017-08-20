<?php
	//Start session and output buffer
	ob_start();
	session_start();
	
	//Include all necessary files
	include '../includes/test_input.php';
	include 'config.php';
	
	//Now perform checking
	if(isset($_POST['tlogin'])) //IMPORTANT (ensures that this page has been called from a button in the index page called tlogin)
	{
		$eid = test_input($_POST['eid']);
		$pwd = test_input($_POST['pwd']);       //YOU HAVE TO HASH THE PASSWORD!!!!!!!!!!!!!!!!!!!!!!!!
		
		//make query and fire it
		$q = "SELECT * FROM teachers WHERE empid='".$eid."'";
		$res = mysqli_query($conn,$q);
		
		//check if query worked
		if(mysqli_num_rows($res)>0)
		{
			$row = mysqli_fetch_assoc($res);
			$pwdTried = $row['password'];
			if($pwd == $pwdTried)
			{
				$_SESSION['eid']=$eid;
				//echo "will redirect to loggedin page";
				header("Location:../tchr_loggedin.php");
			}
			else
			{
				$_SESSION['msg'] = "wrongCombo";
				//echo "redirect to index page because of wrong combination";
				header("Location:../index.php");				
			}
		}
		else
		{
			echo "no affected rows came";
		}
	}
	else //redirect to landing page
	{
		$_SESSION['msg'] = "loginFirst";
		//echo "redirect to index page because page was url accessed";
		header("Location:../index.php");
	}
?>