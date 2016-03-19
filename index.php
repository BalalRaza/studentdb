<?php include 'includes/header.php'; ?>
		
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
						
						<!-- Modal -->
						<div class="modal fade" id="tchr_login" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header" style="padding:35px 50px;">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4><i class="fa fa-lock"></i> Sign in</h4>
									</div>
									<div class="modal-body" style="padding:40px 50px;">
										<form role="form">
											<div class="form-group">
												<label for="usrname"><i class="fa fa-user"></i> Username</label>
												<input type="text" class="form-control" id="usrname" placeholder="Enter email">
											</div>
											<div class="form-group">
												<label for="psw"><i class="fa fa-key"></i> Password</label>
												<input type="text" class="form-control" id="psw" placeholder="Enter password">
											</div>
											<button type="submit" class="btn btn-success btn-block"><i class="fa fa-sign-in"></i> Login</button>
										</form>
									</div>
								</div>
							</div>
						</div> 
						
						<button class="btn btn-primary btn-lg" id="t_reg">Register as Teacher</button>
						
						<!-- Modal -->
						<div class="modal fade" id="tchr_reg" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3>Authentication</h3>
									</div>
									<div class="modal-body">
										<form role="form" method="POST" action="">
											<div class="form-group">
												<div class="row">
													<label class="col-md-3">Passkey</label>
													<div class="col-md-5">
														<input type="text" style="width:100%;" name="" placeholder="Not meant to be disclosed" required />
													</div>
													<div class="col-md-4">
														<input type="submit" class="btn btn-success" name="" value="Authenticate Me" />
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
						<a href="#"><button class="btn btn-primary btn-lg">Login as Student</button></a>
						<a href="stu_reg1_basic.php"><button class="btn btn-primary btn-lg">Register as Student</button></a>
					</div>
				</div>
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
			});
		</script>
<?php include 'includes/footer.php'; ?>