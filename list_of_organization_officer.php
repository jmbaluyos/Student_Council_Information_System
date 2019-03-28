<?php include('server.php'); ?>


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
				<div class="btn-group btn-group-lg" role="group"">
				
					<a href = "list_of_student.php"><button type="button" class="btn btn-outline-dark">Student</button></a>
					<a href ="list_of_organization.php"><button type="button" class="btn btn-outline-dark">Organization</button></a>
					<a href ="list_of_section.php"><button type="button" class="btn btn-outline-dark">Sections</button></a>
					<a href ="list_of_department.php"><button type="button" class="btn btn-outline-dark">Departments</button>
					<a href ="list_of_program.php"><button type="button" class="btn btn-outline-dark">Program</button></a>
					<a href ="list_of_event.php"><button type="button" class="btn btn-outline-dark">Events</button></a>
					<a href ="fines.php"><button type="button" class="btn btn-outline-dark">Fines</button></a>
					<a href ="payment.php"><button type="button" class="btn btn-outline-dark">Payment</button></a>
					<a href ="list_of_organization_member.php"><button type="button" class="btn btn-outline-dark">Org. Member</button></a>
					<a href ="list_of_organization_officer.php"><button type="button" class="btn btn-outline-dark">Org. Officer</button></a>
					<a href ="list_of_organization_moderator.php"><button type="button" class="btn btn-outline-dark">Org. Moderator</button></a>
					<a href ="list_of_section_officer.php"><button type="button" class="btn btn-outline-dark">Section Officer</button></a>
					<a href ="list_of_acad_year.php"><button type="button" class="btn btn-outline-dark">Academic Year</button></a>	
				
				</div>
				<hr />
				<br /><br />
				<a href = "add_new_organization_officer.php"><span style="float: left; font-size: 50px; margin-right: 50px;"><i class="fa fa-plus-circle" font-size = "50px"></i></span></a>
				<center><h3>List of Organization Officer</h3></center><br />
				<?php $results = mysqli_query($db, "SELECT * FROM org_officer,student,academic_year WHERE student.id_number=org_officer.id_number AND org_officer.academic_code=academic_year.academic_code"); ?>
				<table class="table table-primary">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Names</th>
				      <th scope="col">Position</th>
				      <th scope="col">Organization code</th>
					  <th scope="col">Academic Year</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <?php while ($row = mysqli_fetch_array($results)){ ?>
				  <tbody>
				    <tr>
							
							<td><?php echo ucwords($row['last_name']." ".$row['first_name']." ".$row['middle_name'])?></td>
							<td><?php echo $row['position']?></td>
							<td><?php echo $row['organization_code']?></td>
							<td><?php echo $row['acad_year']." "."(".$row['semester'].")" ?></td>
							
							<td>
			 
								<button type="button" class="btn btn-outline-info btn-sm fa fa-pencil"><a href="update_org_officer.php?edit6=<?php echo $row['id_number']; ?>"> Edit </a></button> 

								<button type="button" class="btn btn-outline-danger btn-sm fa fa-trash" data-toggle="modal" data-target="#exampleModal">Delete</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Delete Payment Record</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        Ooopss!! Im sorry but you can't Delete this data!
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">OK</button>
								      </div>
								    </div>
								  </div>
								</div>
							

							</td>
				    </tr>
				  </tbody>
				<?php 
  				  } ?>
				</table>			
	</div>
</body>
</html>
