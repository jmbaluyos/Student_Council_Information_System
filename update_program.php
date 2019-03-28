<?php include('server.php'); 

	if (isset($_GET['edit'])) {
		$course_code = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM department,program WHERE department.department_code=program.department_code AND course_code='$course_code'");
		
	
			
		
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
			<div class="col-sm-2" >
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
			<div class="col-sm-2" >
				<div class="vertical_line">

				</div>
			</div>
			<div class="col-sm-8">
			<center><h2>"Update Program"</h2></center><br />
			<center><h3>Program Information</h3></center><br />
				<form action="list_of_program.php" method="POST">
					<?php if(mysqli_num_rows($record)){
						  		while ($row1 = mysqli_fetch_array($record)){
						  			
						  		
					?>
				  <div class="form-row">
				    <div class="col-md-4">
				      <h6>Course Code: </h6><input type="text" class="form-control" value = "<?php echo $row1['course_code']; ?>" name="course_code" placeholder="Department Code" readonly>
				  	</div>
				    <div class="col-md-8">
				      <h6>Course Name: </h6><input type="text" class="form-control" value="<?php echo $row1['course_name']; ?>" name="course_name" placeholder="Department Name">
				    </div>
				    <div class="col-md-8">
				      <h6>Department Name: </h6>
				      <select name = "department_code" class="form-control">
						<?php 
							$query = "SELECT * FROM department";
							$results = mysqli_query($db, $query); 
							$count = mysqli_num_rows($results);
							if($count = 1){
								while ($row = mysqli_fetch_array($results)){
						?>
								<option value = "<?php echo $row['department_code'] ?>"<?php if($row['department_code'] == $row1['department_code']);?> ><?php echo $row['department_name']?></option>
							
							<?php } 
				  			}?>
			  			</select>
			  		<?php }}?>
				    </div>
				  </div>
				  <br />
				  <div class="form-row">
					  <div class="col-md-4">
					  <?php if ($update == true): ?>
						<button type="submit" class="btn btn-secondary"  name="update_4" style="background: red;">Update</button>
					  <?php else: ?>
						<button type="submit" class="btn btn-primary" name="save">Save</button>
					  <?php endif ?>
					  </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
