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
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-50" src="ssc.PNG" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-50" src="ustp.PNG" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-50" src="2.PNG" alt="Third slide">
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
		</div>
	</div>
</body>
</html>
