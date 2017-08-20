<?php include 'includes/header.php'; ?>
	<div class="container-fluid">
		<div class="row">
			<div id="headline" class="col-md-10 col-md-offset-1">
				<center><h1>Student Registration - Personal Details</h1></center>
			</div>
		</div>
		<div class="row" style="margin-bottom:100px;">
			<div class="col-md-6 col-md-offset-2">
				<form role="form" id="frm" class="form-horizontal" method="POST" action="">
					<center><h3>Family</h3></center>
					<div class="form-group">
						<label class="col-md-5 control-label">Mother's Name</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your mother's name here" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Occupation</label>
						<div class="col-md-6">
							<input type="text" name="" id="mom" class="form-control" placeholder="Mother's occupation. Eg. Housewife, Teacher, etc." required />
						</div>
						<div class="col-md-1 tip" onclick="fillVal(1)" >
							<span data-toggle="tooltip" data-placement="right" title="In case of death, click here"><i class="fa fa-question-circle"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Father's Name</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your father's name here" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Occupation</label>
						<div class="col-md-6">
							<input type="text" name="" id="dad" class="form-control" placeholder="Father's occupation. Eg. Doctor, Teacher, Business." required />
						</div>
						<div class="col-md-1 tip" onclick="fillVal(2)">
							<span data-toggle="tooltip" data-placement="right" title="In case of death, click here"><i class="fa fa-question-circle"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Mobile</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your guardian's number. DO NOT prefix country codes" required />
						</div>
					</div>
					
					
					<center><h3>Address</h3></center>
					<div class="form-group">
						<label class="col-md-5 control-label">Line No. 1</label>
						<div class="col-md-7">
							<input type="text" name="" id="" class="form-control" placeholder="Enter the flat/building number/name, street name here" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Line No. 2</label>
						<div class="col-md-7">
							<input type="text" name="" id="" class="form-control" placeholder="Enter your town name. Eg. Agarpara" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">City/Gram</label>
						<div class="col-md-7">
							<input type="text" name="" id="" class="form-control" placeholder="Enter your city name. Eg. Kolkata" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">State</label>
						<div class="col-md-7">
							<input type="text" name="" id="" class="form-control" placeholder="Enter your State name. Eg. West Bengal" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Pin Code</label>
						<div class="col-md-7">
							<input type="text" name="" id="" class="form-control" placeholder="Enter your 6 digit Pin Code here. Eg. 700120" required />
						</div>
					</div>
					
					<div class="form-group">
							<div class="row">
								<div class="col-md-1 col-md-offset-5">
									<input type="reset" class="btn btn-primary" name="" value="Clear"></input>
								</div>
								<div class="col-md-1">
									<input type="submit" id="" class="btn btn-primary" name="" value="Save and Proceed"></input>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip(); 
		});
		function fillVal(val)
		{
			var target;
			if(val==1)
			{
				target=document.getElementById("mom");
			}
			else
			{
				target=document.getElementById("dad");
			}
			target.value="Deceased";
		}
	</script>
<?php include 'includes/footer.php'; ?>