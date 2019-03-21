<?php include('server.php'); 

	if (isset($_GET['EDIT_4'])) {
		$section_id = $_GET['EDIT_4'];
		$update = true;
		$Record = mysqli_query($db, "SELECT * FROM fines WHERE id_number='$id_number'");
		
			$n = mysqli_fetch_array($Record);
			$id_number = $n['id_number'];
			$event_code = $n['event_code'];
			$penalty = $n['penalty'];
			$amount = $n['amount'];
			$status = $n['status'];
			$balance = $n['balance'];
			$date = $n['date'];
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
		    	</center><p style="color:white; font-size: 50px; margin-right: 400px;">Supreme Student Council<strong></strong></p>
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
			<center><h2>"Add new Payment"</h2></center><br />
			<center><h3>Payment Information</h3></center><br />
				<form action="payment.php" method="POST">
				
				  <div class="form-row">
				    <div class="col-md-4">
				      <h6>ID#: </h6><input type="text" class="form-control" values="<?php echo $id_number; ?>" readonly>
				    </div>
				    <div class="col-md-4">
				      <h6>Names: </h6><input type="text" class="form-control" values="<?php echo $row['last_name']." ".$row['first_name']." ".$row['middle_name']?>" readonly>
				    </div>
				    <div class="col-md-4">
				      <h6>Penalty: </h6><input type="text" class="form-control" values="<?php echo $section_id; ?>" readonly>
				    </div>
				    <div class="col-md-4">
				      <h6>Amount: </h6><input type="text" class="form-control" placeholder="Amount" name="amount">
				    </div>
				  </div>
				  <br />
				  <div class="form-row">
				    <div class="col-md-4">
				      <h6>Status: </h6><input type="text" class="form-control" placeholder="Status" name="status">
				    </div>
				    <div class="col-md-4">
				      <h6>Balance: </h6><input type="text" class="form-control" placeholder="Balance" name="balance">
				    </div>
				    <div class="col-md-4">
				      <h6>Date: </h6><input type="date" class="form-control" placeholder="Date" name="date">
				    </div>
				  </div>
				  <br />
				  <div class="form-row">
					  <div class="col-md-6">
							<?php if ($update == true): ?>
								<button type="submit" class="btn btn-secondary"  name="EDIT4" style="background: red;">Update</button>
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
