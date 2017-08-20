<?php
	$host="localhost";
	$user="root";
	$pass="";
	$dbname="studentdb";
	$conn=mysqli_connect($host,$user,$pass,$dbname);
	if(!$conn)
	{
		die("Connection failed to Database: " . mysqli_connect_error());
	}
?>