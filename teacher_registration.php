<?php include 'includes/header.php';?>
	<div class="container-fluid">
		<div class="row">
			<div id="headline" class="col-md-10 col-md-offset-1">
				<center><h1>Teacher Registration</h1></center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<form role="form" id="frm" class="form-horizontal" method="POST" action="">
					<div class="form-group">
						<label class="col-md-5 control-label">Employee ID</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your Employee ID here" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Name</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your full name here. Eg. John Reese" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Password</label>
						<div class="col-md-7">
							<input type="password" name="" id="pwd" class="form-control" placeholder="Enter your password here" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Confirm Password</label>
						<div class="col-md-7">
							<input type="password" name="" id="confirmPwd" class="form-control" onpaste="return false" placeholder="Re-enter above password here" required />
						</div>
					</div>
					<div class="form-group">
							<div class="row">
								<div class="col-md-1 col-md-offset-5">
									<input type="reset" class="btn btn-primary" name="" value="Clear"></input>
								</div>
								<div class="col-md-1">
									<input type="submit" id="submitButton" class="btn btn-primary" name="" value="Register"></input>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<script src="js/myscript.js"></script>
<?php include 'includes/footer.php'; ?>