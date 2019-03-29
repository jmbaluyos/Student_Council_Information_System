<?php include ('server.php');

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
				
					<a href = "list_of_student.php"><button type="button" class="btn btn-outline-dark">List of Student</button></a>
					<a href ="list_of_organization.php"><button type="button" class="btn btn-outline-dark">Organization</button></a>
					<a href ="list_of_section.php"><button type="button" class="btn btn-outline-dark">List of Sections</button></a>
					<a href ="list_of_department.php"><button type="button" class="btn btn-outline-dark">Departments</button>
					<a href ="list_of_program.php"><button type="button" class="btn btn-outline-dark">Program</button></a>
					<a href ="list_of_event.php"><button type="button" class="btn btn-outline-dark">Events</button></a>
					<a href ="fines.php"><button type="button" class="btn btn-outline-dark">Fines</button></a>
					<a href ="list_of_organization_member.php"><button type="button" class="btn btn-outline-dark">Org. Member</button></a>
					<a href ="list_of_organization_officer.php"><button type="button" class="btn btn-outline-dark">Org. Officer</button></a>
					<a href ="list_of_organization_moderator.php"><button type="button" class="btn btn-outline-dark">Org. Moderator</button></a>
					<a href ="list_of_section_officer.php"><button type="button" class="btn btn-outline-dark">Section Officer</button></a>
					<a href ="list_of_acad_year.php"><button type="button" class="btn btn-outline-dark">Academic Year</button></a>		
				</div>
				<hr />
		<br /><br />
		<div class = "row">
			<div class="col-sm-8">	
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-50" src="picture/ssc.PNG" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-50" src="picture/2.PNG" alt="Second slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
			<div class="col-sm-4">
				<h1>PREAMBLE</h1>
				<p style="font-family: Arial, Helvetica, sans-serif"><bold><i>We, the dedicated student of the University of Science and Technology of Southern Philippines, Oroquieta Campus, imploring the aid of  Almighty God in order to build a Student Council that shall protect our ideals and rights, promote the common good, in social, political, economic, moral and spiritual development, imbued with the University Core Values, support and defend our laws and uphold the ideals and democracy with the regime of truth, justice and peace, do hereby promulgate this Constitution.</i></bold></p>
			</div>
		</div>
	</div>
</body>
</html>
