<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PhoneBook</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
<form action="log_in.php" method="post">
  <div class="imgcontainer">
    <img src="picture/ssc.png" alt="Avatar" class="avatar">
  </div>
  <?php include ('errors.php'); ?>
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="myInput" name="password" required>
        
    <div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" value="password" class="form-check-input" onclick="myFunction()">
					  Show Password
			</label>
	</div>
	<button type="submit" class="btn btn-primary" name="login">Login</button>
  </div>

</form>
	<script type="text/javascript">
		function myFunction(){
			var x = document.getElementById("myInput");
				if (x.type === "password"){
					x.type = "text";
				}
				else{
					x.type = "password";
				}

		}


	</script>
</body>
</html>