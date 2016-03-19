<?php include 'includes/header.php'; ?>
	<div class="container-fluid">
		<div class="row">
			<div id="headline" class="col-md-10 col-md-offset-1">
				<center><h1>Student Registration - Basic Details</h1></center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<form role="form" id="frm" class="form-horizontal" method="POST" action="">
					<div class="form-group">
						<label class="col-md-5 control-label">Roll No.</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your full Class Roll Number here. Eg. 10213051" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Name</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your full name here. Eg. John Reese" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Date of Birth</label>
						<div class="col-md-7">
							<input type="date" name="" class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Email</label>
						<div class="col-md-7">
							<input type="email" name="" class="form-control" placeholder="Write your email address. Eg. someone@example.com" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Hosteller?</label>
						<div class="radio col-md-1">
							<label><input type="radio" name="hosteller" />Yes</label>
						</div>
						<div class="radio col-md-1">
							<label><input type="radio" name="hosteller" />No</label>
						</div>
						<label class="col-md-2 col-md-offset-1">Semester</label>
						<div class="col-md-2">
							<select class="form-control">
								<option disabled selected>None</option>
								<?php
									for($i=1;$i<=8;$i++){
								?>
								<option><?php echo $i;?></option>
								<?php 
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Password</label>
						<div class="col-md-7">
							<input type="password" name="" id="pwd" class="form-control" placeholder="Enter your password. You MUST remember it from today" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Confirm Password</label>
						<div class="col-md-7">
							<input type="password" name="" id="confirmPwd" class="form-control" onpaste="return false" placeholder="Re-enter above password. Be smart and do not copy paste!" required />
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