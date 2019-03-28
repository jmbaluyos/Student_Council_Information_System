<?php include('server.php'); 

		
	if (isset($_GET['edit6'])) {
		$id_number = $_GET['edit6'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM org_officer WHERE id_number='$id_number'");
		
	
			$n = mysqli_fetch_array($record);
			$organization_code = $n["organization_code"];
			$id_number = $n["id_number"];
			$position = $n["position"];
			$academic_code = $n["academic_code"];
		
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
			<center><h2>"Update Organization Officer"</h2></center><br />
			<center><h3>Organization Officer Information</h3></center><br />
				<form action = "list_of_organization_officer.php" method="POST">
				  <div class="form-row">
				    <div class="col-md-4">
				      <h6>ID#</h6>
				      	<select name = "id_number" class="form-control">
								  <option selected>Select Student</option>
									<?php 
										$query = "SELECT * FROM student";
										$result = mysqli_query($db, $query); 
										$count = mysqli_num_rows($result);
										if($count = 1){
											while ($row = mysqli_fetch_array($result)){
									?>
									<option value="<?php echo $row['id_number'] ?>" ><?php echo ucwords($row['first_name'] ." ". $row['middle_name'] ." ". $row['last_name']) ?></option>										
									
									<?php } 
							  		}?>
						</select>
					</div>
				    <div class="col-md-8">
				      <h6>Position: </h6>
				      	<select name = "position" class="form-control">
								  <option selected>Select Position</option>
									<option value="President">President</option>
									<option value="Vice_president">Vice President</option>
									<option value="Secretary">Secretaty</option>
									<option value="Treasurer">Treasurer</option>
									<option value="Auditor">Auditor</option>
									<option value="P.I.O">P.I.O</option>
									<option value="Muse">Muse</option>
									<option value="Prince">Prince</option>

						</select>
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
				    </div>
					<div class="col-md-8">
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
				  <div class="form-row">
					  <div class="col-md-4 text-center submit-data">
					  <?php if ($update == true): ?>
						<button type="submit" class="btn btn-secondary"  name="update6" style="background: red;">Update</button>
					  <?php else: ?>
						<button type="submit" class="btn btn-primary" name="save">Save</button>
					  <?php endif ?>
					  </div>
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
