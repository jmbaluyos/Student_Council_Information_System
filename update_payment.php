<?php include('server.php'); 
	
	//update payment
		$id_number = "";
		$amount = "";
		$status = "";
		$balance = "";
		$date = "";
	if (isset($_GET['EDIT_4'])) {
		$id_number = $_GET['EDIT_4'];
		$update = true;
		$Record = mysqli_query($db, "SELECT *,SUM(penalty) as TOTAL  FROM fines WHERE id_number='$id_number'");
		
			
}	

		//edit payment
		$id_number = "";
		$amount = "";
		$status = "";
		$balance = "";
		$date = "";
	if (isset($_POST['save7'])) {
		$id_number = $_POST['id_number'];
		$amount = $_POST['amount'];
		$status = $_POST['status'];
		$balance = $_POST['balance'];

			
		$sql = "INSERT INTO payment (id_number,amount, status, balance )
			VALUES ('$id_number',$amount,'$status',$balance)";
			$result = mysqli_query($db, $sql);
			if ($result == true) {
				$_SESSION['message'] = "Successfully updated!"; 
				header('location: payment.php');
			}
			
		
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
					<li><a href = "list_of_student.php"><button type="button" class="btn btn-outline-dark">List of Student</button></a></li>
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
				
			</div>
			<div class="col-sm-8">
			<center><h2>"Add new Payment"</h2></center><br />
			<center><h3>Payment Information</h3></center><br />
				<form action="" method="POST">
				  <div class="form-row">
				  	<?php if(mysqli_num_rows($Record)){
						  		while ($row1 = mysqli_fetch_array($Record)){
						  			
						  		
					?>
				    <div class="col-md-4">
				      <h6>ID#: </h6>
				  		<select name = "id_number" class="form-control" selected>
									<?php 
										$query = "SELECT * FROM fines";
										$results = mysqli_query($db, $query); 
										if(mysqli_num_rows($results)){;
										
											while ($row = mysqli_fetch_array($results)){
									?>
											<option value = "<?php echo $row['id_number']; ?>"<?php if($row['id_number'] == $row1['id_number']); echo "Selected";?> ><?php echo $row['id_number'];  ?></option>
										
									<?php 	} 
										}
							  		?>
						</select>
				    </div>
				    
				    <div class="col-md-4">
				     		<h6>Penalty: </h6><input class="form-control" value="<?php echo $row1['TOTAL']; ?>"  name="penalty" readonly>
				    </div>
					<?php 
							}
						}
					?>
				    <div class="col-md-4">
				      <h6>Amount: </h6><input type="text" class="form-control" placeholder="Amount" name="amount">
				    </div>
				  </div>
				  <br />
				  <div class="form-row"> 
				    <div class="col-md-4">
				    	<h6>Status: </h6>
					    	<select name="status" class="form-control">
					    		<option selected>Select Status</option>
					    		<option value="Paid">Paid</option>
					    		<option value="Unpaid">Unpaid</option>
					    	</select>
				    </div>
				    <div class="col-md-4">
				      <h6>Balance: </h6><input type="text" class="form-control" placeholder="Balance" name="balance">
				    </div>
				    
				  </div>
				  <br />
				  <div class="form-row">
					  <div class="col-md-6">
							<button type="submit" class="btn btn-primary" name="save7">Save</button>
					  </div>
				  </div>
				
				</form>
				
			</div>
		</div>
	</div>
<script>
function myFunction() {
  confirm("Successfully Updated!");
}
</script>
</body>
</html>
