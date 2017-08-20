<?php 
	include 'includes/header.php'; 
	session_start();
	
	if(isset($_SESSION['msg']))
	{
		$msg=$_SESSION['msg'];
		unset($_SESSION['msg']);
	}
?>
	<div class="container-fluid">
		<div>
			<center><h1 id="heading">Student's Database and Performance Register</h1></center>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="jumbotron">
					<h1>Teacher's Section</h1>
					<p>You can register here with your employee id as unique username. Or you can sign in with the same. You can view any student's details and view his/her performance graph.</p>
					<button class="btn btn-primary btn-lg" id="t_login">Login as Teacher</button>
					
					<!-- Modal for TEACHER LOGIN -->
					<div class="modal fade" id="tchr_login" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header" style="padding:35px 50px;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4><i class="fa fa-lock"></i> Sign in</h4>
								</div>
								<div class="modal-body" style="padding:40px 50px;">
									<form role="form" method="POST" action="ppc/tchrLoginCheck.php">
										<div class="form-group">
											<label for="usrname"><i class="fa fa-user fa-fw"></i> Employee ID</label>
											<input type="text" name="eid" class="form-control" id="usrname" placeholder="Enter employee id number">
										</div>
										<div class="form-group">
											<label for="psw"><i class="fa fa-key fa-fw"></i> Password</label>
											<input type="password" name="pwd" class="form-control" id="psw" placeholder="Enter password">
										</div>
										<button type="submit" name="tlogin" class="btn btn-success btn-block"><i class="fa fa-sign-in"></i> Login</button>
									</form>
								</div>
							</div>
						</div>
					</div> 
					
					<button class="btn btn-primary btn-lg" id="t_reg">Register as Teacher</button>
					
					<!-- Modal for TEACHER REGISTRATION-->
					<div class="modal fade" id="tchr_reg" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header" style="padding:25px 50px;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3>Authentication</h3>
								</div>
								<div class="modal-body">
									<form role="form" method="POST" action="ppc/auth_teacher.php" autocomplete="off">
										<div class="form-group">
											<div class="row">
												<label class="col-md-3"><i class="fa fa-key fa-fw"></i> Passkey</label>
												<div class="col-md-5">
													<input type="password" style="width:100%;" name="passkey" placeholder="Not meant to be disclosed" required />
												</div>
												<div class="col-md-4">
													<input type="submit" class="btn btn-success" name="reg_teacher" value="Authenticate Me" />
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Modal Ends -->
					
				</div>
			</div>
			<div class="col-sm-6">
				<div class="jumbotron">
					<h1>Student's Section</h1>
					<p>Use your full class roll number as your unique username to register. Remember your credentials as you may be required to come back later to update your details.</p>
					<a href="#"><button class="btn btn-primary btn-lg" id="s_login">Login as Student</button></a>
					
					<!-- Modal -->
					<div class="modal fade" id="stu_login" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header" style="padding:35px 50px;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4><i class="fa fa-lock"></i> Sign in</h4>
								</div>
								<div class="modal-body" style="padding:40px 50px;">
									<form role="form" method="POST" action="" autocomplete="off">
										<div class="form-group">
											<label ><i class="fa fa-user fa-fw"></i> Roll Number</label>
											<input type="text" class="form-control" id="" placeholder="Enter your full class roll number. Eg. 10213051">
										</div>
										<div class="form-group">
											<label ><i class="fa fa-key fa-fw"></i> Password</label>
											<input type="password" class="form-control" id="" placeholder="Enter your password here">
										</div>
										<button type="submit" class="btn btn-success btn-block"><i class="fa fa-sign-in"></i> Login</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<a href="stu_reg1_basic.php"><button class="btn btn-primary btn-lg">Register as Student</button></a>
				</div>
			</div>
		</div>
		<div id="message">
			<?php
				if(isset($msg)) 
				{
			?>
			<center>
				<div class="alert alert-danger fade in" >
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php
					if($msg == "keyInvalid")  //comes from auth_teacher.php
					{
			?>
					<strong>Incorrect Passkey!</strong> Contact your System Administrator.</h3>
			<?php
					}
					else if($msg =="denied")  //comes from teacher_registration.php , tchrLoginCheck.php, 
					{
			?>
					<strong>Access Denied!</strong> Login First.</h3>
			<?php
					}
					else if($msg == "wrongCombo")  //comes from tchrLoginCheck.php
					{
			?>
					<strong>Wrong Combination!</strong> Try logging in again.</h3>
			<?php
					}
			?>
				</div>
			</center>
			<?php
				}	
			?>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$("#t_reg").click(function(){
				$("#tchr_reg").modal();
			});
			$("#t_login").click(function(){
				$("#tchr_login").modal();
			});
			$("#s_login").click(function(){
				$("#stu_login").modal();
			});
		});
	</script>
<?php include 'includes/footer.php'; ?>