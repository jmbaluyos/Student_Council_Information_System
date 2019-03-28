<?php include('server.php'); 

		
	if (isset($_GET['edit5'])) {
		$instructor_id = $_GET['edit5'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM org_moderator WHERE instructor_id='$instructor_id'");
		
	
			$n = mysqli_fetch_array($record);
			$instructor_id = $n["instructor_id"];
			$last_name = $n["last_name"];
			$first_name = $n["first_name"];
			$middle_name = $n["middle_name"];
			$organization_code = $n["organization_code"];
		
	}	


?>


<!DOCTYPE html>
<html>
<head>
	<title>Supreme Student Council</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href = "css/style.css" rel = "stylesheet" type = "text/css" >
</head>
<body>
	<!-- Header Area -->
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		   <a href = "index.php"><img src = "picture/ssc.PNG" style=" height:70px; width:70px;"></a>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		      </li>
		    </ul>
		    	<center><p style="color:white; font-size: 50px; margin-right: 400px;">Supreme Student Council</p></center>
		    	<a href="logout.php">Logout</a> 
		  </div>
		</nav>
	</div>
	<br /><br />
	<!-- Show Data -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3" >
				<div class="btn-group-vertical">
				<ul style="list-style: none;">
					<li><a href = "list_of_student.php"><button type="button" class="btn btn-dark">List of Student</button></a></li>
					<li><a href ="list_of_organization.php"><button type="button" class="btn btn-outline-dark">Organization</button></a></li>
					<li><a href ="list_of_section.php"><button type="button" class="btn btn-outline-dark">Sections</button></a></li>
					<li><a href ="list_of_department.php"><button type="button" class="btn btn-outline-dark">Departments</button></a></li>
					<li><a href ="list_of_program.php"><button type="button" class="btn btn-outline-dark">Program</button></a></li>
					<li><a href ="list_of_event.php"><button type="button" class="btn btn-outline-dark">Events</button></a></li>
					<li><a href ="fines.php"><button type="button" class="btn btn-outline-dark">Fines</button></a></li>
					<li><a href ="payment.php"><button type="button" class="btn btn-outline-dark">Payment</button></a></li>
					<li><a href ="list_of_organization_member.php"><button type="button" class="btn btn-outline-dark">Organization Member</button></a></li>
					<li><a href ="list_of_organization_officer.php"><button type="button" class="btn btn-outline-dark">Organization Officer</button></a></li>
					<li><a href ="list_of_organization_moderator.php"><button type="button" class="btn btn-outline-dark">Organization Moderator</button></a></li>
					<li><a href ="list_of_section_officer.php"><button type="button" class="btn btn-outline-dark">Section Officer</button></a></li>	
					<li><a href ="list_of_acad_year.php"><button type="button" class="btn btn-outline-dark">Academic Year</button></a></li>			
				</ul>
				</div>
			</div>
			<div class="col-sm-1" >
				<div class="vertical_line">

				</div>
			</div>
			<div class="col-sm-8">
			<center><h2>"Update Organization Moderator"</h2></center><br />
			<center><h3>Organization Moderator Information</h3></center><br />
				<form action = "list_of_organization_moderator.php" method="POST">
				  <div class="form-row">
				    <div class="col-md-4">
				      <h6>Instructor ID#</h6><input type="text" class="form-control" value="<?php echo $instructor_id; ?>"  name="instructor_id" placeholder="Instructor Id" readonly>
					</div>
				    <div class="col-md-8">
				      <h6>Lastname: </h6><input type="text" class="form-control" value="<?php echo $last_name; ?>"  name= "last_name" placeholder="Enter last name">
				    </div>
					<div class="col-md-8">
				      <h6>Firstname: </h6><input type="text" class="form-control" value="<?php echo $first_name; ?>"  name= "first_name" placeholder="Enter first name">
				    </div>
					<div class="col-md-8">
				      <h6>M.I: </h6><input type="text" class="form-control" value="<?php echo $middle_name; ?>"  name="middle_name" placeholder="Enter middle name">
				    </div>
					<div class="col-md-8">
				      <h6>Organization Code: </h6>
				     	 <select name = "organization_code" class="form-control">
								  <option selected>Select Organization</option>
									<?php 
										$query = "SELECT * FROM organization";
										$results = mysqli_query($db, $query); 
										$count = mysqli_num_rows($results);
										if($count = 1){
											while ($row = mysqli_fetch_array($results)){
									?>
											<option value = "<?php echo $row['organization_code'] ?>"><?php echo $row['organization_name'] ?></option>
										
										<?php } 
							  			}?>
					  	</select>
					  <h6>Academic Year: </h6>
				      	<select name = "academic_code" class="form-control">
				     		 <option selected>Select Academic Year</option>
									<?php 
										$query = "SELECT * FROM academic_year";
										$results = mysqli_query($db, $query); 
										$count = mysqli_num_rows($results);
										if($count = 1){
											while ($row = mysqli_fetch_array($results)){
									?>
											<option value = "<?php echo $row['academic_code'] ?>"><?php echo $row['acad_year']." "."(".$row['semester'].")" ?></option>
										
										<?php } 
							  			}?>
						</select>
				    </div>
				  </div>
				  <br />
				  <div class="col-md-4 text-center submit-data">
					  <?php if ($update == true): ?>
						<button type="submit" class="btn btn-secondary"  name="update5" style="background: red;">Update</button>
					  <?php else: ?>
						<button type="submit" class="btn btn-primary" name="save">Save</button>
					  <?php endif ?>
					  </div>
				</form>
			</div>
		</div>
	</div>
<script>
function myFunction() {
  confirm("Successfully Save!");
}
</script>
</body>
</html>
