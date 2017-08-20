<?php
	include 'includes/header.php';
	include 'ppc/config.php';
	session_start();
	
	if(isset($_SESSION['eid']))
	{
		$eid = $_SESSION['eid'];
		unset($_SESSION['eid']);
	}
	else
	{
		$_SESSION['msg'] = "denied";
		header("Location:index.php");
	}
	
	//get the name of the teacher for displaying in the welcome line
	$q = "SELECT name FROM teachers WHERE empid='".$eid."'";
	$res = mysqli_query($conn,$q);
	if(mysqli_num_rows($res)>0)
	{
		$row = mysqli_fetch_assoc($res);
		$name = $row['name'];
	}
?>
	<div class="container-fluid">
		<div class="row">
			<div id="headline" class="col-md-10 col-md-offset-1">
				<h1 class="pull-right">Welcome, <?php echo $name; ?>!</h1>
			</div>
		</div>
		
		
	</div>
<?php
	include 'includes/footer.php';
?>