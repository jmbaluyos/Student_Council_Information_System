<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>SCO</title>
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
		  <a href = "index.php"><img src = "ssc.PNG" style=" height:70px; width:70px;"></a>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		      </li>
		    </ul>
		    	</center><p style="color:white; font-size: 50px; margin-right: 400px;">Supreme Student Council<strong></strong></p>
		    	<div class="btn-group">
							<button type="button" class=" dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="login.php"><i class ="fa fa-sign-out">Sign Out</i></a>
					 	</div>
				</div>
		  </div>
		</nav>
	</div>
	<br /><br />
	<!-- Show Data -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2" >
				<div class="vertical_line">
				<ul style="list-style: none;">
					<li><a href = "list_of_student.php"><button type="button" class="btn btn-outline-dark">List of Student</button></a></li><br />
					<li><a href ="list_of_organization.php"><button type="button" class="btn btn-outline-dark">Organization</button></a></li><br />
					<li><a href ="list_of_section.php"><button type="button" class="btn btn-outline-dark">Sections</button></a></li><br />
					<li><a href ="list_of_department.php"><button type="button" class="btn btn-outline-dark">Departments</button></a></li><br />
					<li><a href ="list_of_program.php"><button type="button" class="btn btn-outline-dark">Program</button></a></li><br />
					<li><a href ="list_of_event.php"><button type="button" class="btn btn-outline-dark">Events</button></a></li><br />
					<li><a href ="fines.php"><button type="button" class="btn btn-outline-dark">Fines</button></a></li><br />
					<li><a href ="payment.php"><button type="button" class="btn btn-outline-dark">Payment</button></a></li><br />
					<li><a href ="list_of_organization_member.php"><button type="button" class="btn btn-outline-dark">Organization Member</button></a></li><br />
					<li><a href ="list_of_organization_officer.php"><button type="button" class="btn btn-outline-dark">Organization Officer</button></a></li><br />
					<li><a href ="list_of_organization_moderator.php"><button type="button" class="btn btn-outline-dark">Organization Moderator</button></a></li><br />
					<li><a href ="list_of_section_officer.php"><button type="button" class="btn btn-outline-dark">Section Officer</button></a></li><br />				
				</ul>
				</div>
			</div>
			<div class="col-sm-2" >
				<div class="vertical_line">

				</div>
			</div>
			<div class="col-sm-8">
			<center><h2>"Add new student"</h2></center><br />
			<center><h3>Student Information</h3></center><br />
				<form action="list_of_student.php" method = "POST">
				  <div class="form-row">
					<div class="col-md-2">
				      <h6>ID Number: </h6><input type="text" class="form-control" name = "id_number" placeholder="ID Number">
				    </div>
				    <div class="col-md-4">
				      <h6>First Name: </h6><input type="text" class="form-control" name = "first_name" placeholder="First name">
				    </div>
				    <div class="col-md-4">
				      <h6>Last Name: </h6><input type="text" class="form-control" name = "last_name" placeholder="Last name">
				    </div>
				    <div class="col-md-2">
				      <h6>Middle Initial: </h6><input type="text" class="form-control" name = "middle_name" placeholder="Middle initial">
				    </div>
				  </div>
				  <br />
				  <div class="form-row">
				    <div class="col-md-4">
				      <h6>Course code: </h6>
					  <select name = "course_code">
					  <option selected>Select Course Name</option>
						<?php 
							$query = "SELECT * FROM program";
							$results = mysqli_query($db, $query); 
							$count = mysqli_num_rows($results);
							if($count = 1){
								while ($row = mysqli_fetch_array($results)){
						?>
								<option value = "<?php echo $row['course_code'] ?>"><?php echo $row['course_name']?></option>
							
							<?php } 
				  			}?>
					  </select>
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="col-md-4">
				      <h6>Section:</h6>
					  <select name = "section_id">
					  <option selected>Select Section</option>
						<?php 
							$query = "SELECT * FROM section";
							$result = mysqli_query($db, $query); 
							$count = mysqli_num_rows($result);
							if($count = 1){
								while ($row = mysqli_fetch_array($result)){
						?>
								<option value = "<?php echo $row['section_id'] ?>"><?php echo $row['section_id']?></option>
							
							<?php } 
				  			}?>
					  </select>		  
					</div>
				    <div class="col-md-4">
				      <h6>Status: </h6><input type="text" class="form-control" name = "status" placeholder="Status">
				    </div>
				  </div>
				  <br />
				  <div class="form-row">
					  <div class="col-md-6">
						<button type="reset" class="btn btn-secondary">Reset</button>
						<button type="submit" class="btn btn-primary" name="SAVE">Save</button>
					  </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
