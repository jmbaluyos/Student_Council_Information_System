<?php include('server.php'); 
	
		/*$sql = "SELECT * FROM payment,student WHERE payment.id_number = student.id_number";
		$record2 = mysqli_query($db, $sql);	*/

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
				<br /><br />
				<center><h3>Payment Information</h3></center><br />
				<?php $results = mysqli_query($db, "SELECT payment.amount,payment.balance,payment.status,payment.date,fines.id_number as id FROM fines,payment,student WHERE fines.id_number=payment.id_number AND student.id_number=payment.id_number GROUP BY student.id_number"); ?>
				<table class="table table-primary">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">ID #</th>
				      <!-- <th scope="col">Names</th> -->
				      <th scope="col">Amount</th>
				      <th scope="col">Status</th>
				      <th scope="col">Balance</th>
				      <th scope="col">Date</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <?php while ($row = mysqli_fetch_array($results)){ ?>
				  <tbody>
				    <tr>
				      <td><?php echo ucwords($row['id'])?></td>
				    <!-- <?php while ($row1 = mysqli_fetch_array($record2)){ ?>
				   	  <td><?php echo ucwords($row1['last_name']." ".$row1['first_name']." ".$row1['middle_name'])?></td>
				   	<?php }?> -->
				      <td><?php echo $row['amount']?></td>
				      <td><?php echo $row['status']?></td>
				      <td><?php echo $row['balance']?></td>
				      <td><?php echo $row['date']?> </td>
				    
				      <td>
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
							        Ooopss!! Im sorry but you can't Delete this record!
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
