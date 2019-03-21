<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Supreme Student Council</title>
	<link href="css/stylesheet.css" rel="stylesheet" type ="text/css" >
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class = "header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
	<?php include ('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder = "Username" autofocus >
		</div> 
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder = "Password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<hr />
	</form>
</body>
</html>