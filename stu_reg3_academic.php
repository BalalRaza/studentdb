<?php include 'includes/header.php'; ?>
	<div class="container-fluid">
		<div class="row">
			<div id="headline" class="col-md-10 col-md-offset-1">
				<center><h1>Student Registration - Academic Details</h1></center>
			</div>
		</div>
		<div class="row" style="margin-bottom:100px;">
			<div class="col-md-6 col-md-offset-2">
				<form role="form" id="frm" class="form-horizontal" method="POST" action="">
					
					<!--	SCHOOL	-->
					<div class="row">
						<div class="col-md-3 col-md-offset-5">
							<h3>School</h3>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">School Name</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your school's name here" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Board</label>
						<div class="col-md-7">
							<select name="" class="form-control" required>
								<option disabled selected>None</option>
								<option>CISCE</option>
								<option>CBSE</option>
								<option>WBBSE</option>
								<option>Bihar Board</option>
								<option>UP Board</option>
								<option>Orissa Board</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Percentage Attained</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your Xth standard Board percentage. Eg. 84.5" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Year of Passing</label>
						<div class="col-md-7">
							<input type="number" name="" min="2008" max="<?php echo date("Y"); ?>" class="form-control" placeholder="Enter the passing year" required />
						</div>
					</div>
					
					<!--	HIGH SCHOOL	-->
					<div class="row">
						<div class="col-md-3 col-md-offset-5">
							<h3>High School</h3>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">School Name</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your school's name here" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Board</label>
						<div class="col-md-7">
							<select name="" class="form-control" required>
								<option disabled selected>None</option>
								<option>CISCE</option>
								<option>CBSE</option>
								<option>WBBSE</option>
								<option>Bihar Board</option>
								<option>UP Board</option>
								<option>Orissa Board</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Percentage Attained</label>
						<div class="col-md-7">
							<input type="text" name="" class="form-control" placeholder="Write your XIIth standard Board percentage. Eg. 84.5" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Year of Passing</label>
						<div class="col-md-7">
							<input type="number" name="" min="2008" max="<?php echo date("Y"); ?>" class="form-control" placeholder="Enter the passing year" required />
						</div>
					</div>
					
					
					<!--	COLLEGE	-->
					<div class="row">
						<div class="col-md-3 col-md-offset-5">
							<h3>College</h3>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Semester 1</label>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Marks" required/>
						</div>
						<label class="col-md-2 col-md-offset-1" style="text-align:right;">Semester 2</label>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Marks" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Semester 3</label>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Marks" required/>
						</div>
						<label class="col-md-2 col-md-offset-1" style="text-align:right;">Semester 4</label>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Marks" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Semester 5</label>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Marks" required/>
						</div>
						<label class="col-md-2 col-md-offset-1" style="text-align:right;">Semester 6</label>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Marks" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Semester 7</label>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Marks" required/>
						</div>
						<label class="col-md-2 col-md-offset-1" style="text-align:right;">Semester 8</label>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Marks" />
						</div>
					</div>
					
					
					<!--	LATERAL ENTRY	-->
					<div class="row">
						<div class="col-md-7 col-md-offset-5">
							<h3>Others</h3>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label">Are you a lateral entry?</label>
						<div class="col-md-7">
							<select class="form-control" name="" id="lateral" onchange="show(this.value)">
								<option value="2">No</option>
								<option value="1">Yes</option>
							</select>
						</div>
					</div>
					<div id="diploma">
						<!--Content Added Dynamically-->
					</div>
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-1 col-md-offset-5">
								<input type="reset" class="btn btn-primary" name="" onclick="show('')" value="Clear"></input>
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
		
		function show(val)
		{
			var div=document.getElementById("diploma");
			if(val == 1)
			{
				div.innerHTML = '<div class="form-group">\
									<label class="col-sm-5 control-label" >Course Name</label>\
									<div class="col-sm-7">\
										<input type="text" name="" class="form-control" id="" placeholder="Eg. Polytechnic, etc." required>\
									</div>\
								</div>\
								<div class="form-group">\
									<label class="col-sm-5 control-label" >College/University Name</label>\
									<div class="col-sm-7">\
										<input type="text" name="" class="form-control" id="" placeholder="Enter your previous College/University name here" required>\
									</div>\
								</div>';
			}
			else
			{
				
				div.innerHTML = '';
			}
		}
	</script>
<?php include 'includes/footer.php'; ?>