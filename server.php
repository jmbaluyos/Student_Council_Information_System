<?php
session_start();
$errors = array();
	$db = mysqli_connect('localhost','root','','sco');

		//log in user
if (isset($_POST['login'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)){
		array_push($errors, "Username is required");
	}
		if (empty($password)){
		array_push($errors, "Password is required");
	}
	if (count($errors) == 0){
		$password = md5($password);
		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
		$results = mysqli_query($db, $sql);
		$num_count = mysqli_num_rows($results);
		if ($num_count == 1){
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Welcome";
		header('location: index.php?username='.$username);
	}
	else{
		array_push($errors, "Invalid username or Password");
		}
	}
}
	//add department
		$department_code="";
		$department_name="";
		$update = false;
	if(isset($_POST['Save'])){
		$department_code = $_POST['department_code'];
		$department_name = $_POST['department_name'];

		$sql = "INSERT INTO department (department_code, department_name)
			VALUES ('$department_code','$department_name')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: list_of_department.php'); //redirect to homepage
		} 


		//delete department
		$department_code="";
		$department_name="";
	if (isset($_GET['del_1'])) {
		$department_code = $_GET['del_1'];

		$query = "SELECT * FROM department WHERE department_code='$department_code'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result)==1){

			while ($row = mysqli_fetch_assoc($result)) {
				mysqli_query($db, "DELETE FROM department WHERE department_code='$department_code'");
				$_SESSION['message'] = "Contact deleted!"; 
				header('location: list_of_department.php');
			}
		}
		
	}


	//edit department
	if (isset($_POST['update_1'])) {
	$department_code = $_POST['department_code'];
	$department_name = $_POST['department_name'];

	$query = "SELECT * FROM department WHERE department_code='$department_code'";
	$Result = mysqli_query($db, $query);
	if (mysqli_num_rows($Result)==1){
		while ($row = mysqli_fetch_assoc($Result)) {
			mysqli_query($db, "UPDATE department SET department_code='$department_code', department_name='$department_name' WHERE department_code='$department_code'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_department.php');
			}
		}
}






	//add organization
		$organization_code="";
		$organization_name="";
		$update = false;
	if(isset($_POST['savE'])){
		$organization_code = $_POST['organization_code'];
		$organization_name = $_POST['organization_name'];

		$sql = "INSERT INTO organization (organization_code, organization_name)
			VALUES ('$organization_code','$organization_name')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: list_of_organization.php'); //redirect to homepage
		}

	//delete organization
		
	if (isset($_GET['del'])) {
		$organization_code = $_GET['del'];

		$query = "SELECT * FROM organization WHERE organization_code=$organization_code";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result)==1){

			while ($row = mysqli_fetch_assoc($result)) {
				mysqli_query($db, "DELETE FROM organization WHERE organization_code=$organization_code");
				$_SESSION['message'] = "Contact deleted!"; 
				header('location: list_of_organization.php');
			}
		}
		
	}

	//edit organization
	if (isset($_POST['update'])) {
	$organization_code = $_POST['organization_code'];
	$organization_name = $_POST['organization_name'];

	$query = "SELECT * FROM organization WHERE organization_code='$organization_code'";
	$result = mysqli_query($db, $query);
	if (mysqli_num_rows($result)==1){
		while ($row = mysqli_fetch_assoc($result)) {
			mysqli_query($db, "UPDATE organization SET organization_code ='$organization_code', organization_name ='$organization_name' WHERE organization_code='$organization_code'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_organization.php');
			}
		}
}
		
	//add program
		$course_code="";
		$course_name="";
		$department_code="";
		$update = false;
	if(isset($_POST['SAve'])){
		$course_code = $_POST['course_code'];
		$course_name = $_POST['course_name'];
		$department_code = $_POST['department_code'];

		$sql = "INSERT INTO program (course_code, course_name, department_code)
			VALUES ('$course_code','$course_name' ,'$department_code')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: list_of_program.php'); //redirect to homepage
	}

	//delete program
		
	if (isset($_GET['del'])) {
		$course_code = $_GET['del'];

		$query = "SELECT * FROM program WHERE course_code=$course_code";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result)==1){

			while ($row = mysqli_fetch_assoc($result)) {
				mysqli_query($db, "DELETE FROM program WHERE course_code=$course_code");
				$_SESSION['message'] = "Contact deleted!"; 
				header('location: list_of_program.php');
			}
		}
		
	}


	//edit program
	if (isset($_POST['update_4'])) {
	$course_code = $_POST['course_code'];
	$course_name = $_POST['course_name'];
	$department_code = $_POST["department_code"];

	$query = "SELECT * FROM program WHERE course_code='$course_code'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "UPDATE program SET course_code ='$course_code', course_name ='$course_name', department_code ='$department_code' WHERE course_code='$course_code'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_program.php');
			}
		}
}
	
	
	//add section
		$section_id="";
		$year="";
		$update = false;
	if(isset($_POST['SAVe'])){
		$section_id = $_POST['section_id'];
		$year = $_POST['year'];

		$sql = "INSERT INTO section (section_id, year)
			VALUES ('$section_id','$year')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: list_of_section.php'); //redirect to homepage
		} 
	
	
	//edit section
	if (isset($_POST['UPDATE'])) {
	$section_id = $_POST['section_id'];
	$year = $_POST['year'];

	$query = "SELECT * FROM section WHERE section_id='$section_id'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "UPDATE section SET section_id ='$section_id', year ='$year' WHERE section_id='$section_id'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_section.php');
			}
		}
	}
	
	//delete section
	
		
	if (isset($_GET['DEL'])) {
		$section_id = $_GET['DEL'];

		$query = "SELECT * FROM section WHERE section_id='$section_id'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result)==1){

			while ($row = mysqli_fetch_assoc($result)) {
				mysqli_query($db, "DELETE FROM section WHERE section_id='$section_id'");
				$_SESSION['message'] = "Contact deleted!"; 
				header('location: list_of_section.php');
				}
		}
		
}
	
		//add student
		$id_number = "";
		$first_name="";
		$last_name="";
		$middle_name="";
		$course_code = "";
		$section_id = "";
		$status = "";
		$update = false;
	if(isset($_POST['SAVE'])){
		$id_number = $_POST['id_number'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$middle_name = $_POST['middle_name'];
		$course_code = $_POST['course_code'];
		$section_id = $_POST['section_id'];
		$status = $_POST['status'];

		$sql = "INSERT INTO student (id_number, first_name, last_name, middle_name, course_code, section_id, status)
			VALUES ('$id_number','$first_name','$last_name' ,'$middle_name','$course_code','$section_id','$status')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: list_of_student.php'); //redirect to homepage
	}

	//edit student
	if (isset($_POST['UPDATE1'])) {
		$id_number = $_POST['id_number'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$middle_name = $_POST['middle_name'];
		$course_code = $_POST['course_code'];
		$section_id = $_POST['section_id'];
		$status = $_POST['status'];

		$query = "SELECT * FROM student WHERE id_number='$id_number'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)==1){
			while ($row = mysqli_fetch_assoc($results)) {
				mysqli_query($db, "UPDATE student SET id_number ='$id_number', first_name ='$first_name', last_name ='$last_name', middle_name ='$middle_name', course_code ='$course_code', section_id ='$section_id', status ='$status' WHERE id_number='$id_number'");
				$_SESSION['message'] = "Successfully updated!"; 
				header('location: list_of_student.php');
				}
			}
		}

	//delete student
	
	if (isset($_GET['DEL1'])) {
		$id_number = $_GET['DEL1'];
		$query = "SELECT * FROM student WHERE id_number='$id_number'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result)==1){

			while ($row = mysqli_fetch_assoc($result)) {
				mysqli_query($db, "DELETE FROM student WHERE id_number='$id_number'");
				$_SESSION['message'] = "Contact deleted!"; 
				header('location: list_of_student.php');
			}
		}
		
}

	//add event
		$event_code="";
		$event_name="";
		$date="";
		$update = false;
	if(isset($_POST['save2'])){
		$event_code = $_POST['event_code'];
		$event_name = $_POST['event_name'];
		$date = $_POST['date'];

		$sql = "INSERT INTO event (event_code, event_name, date)
			VALUES ('$event_code','$event_name','$date')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: list_of_event.php'); //redirect to homepage
		} 

	//edit event
	if (isset($_POST['UPDATE2'])) {
	$event_code = $_POST['event_code'];
	$event_name = $_POST['event_name'];
	$date = $_POST["date"];

	$query = "SELECT * FROM event WHERE event_code='$event_code'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "UPDATE event SET event_code ='$event_code', event_name ='$event_name', date ='$date' WHERE event_code='$event_code'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_event.php');
			}
		}
	}

	//delete event
	
	if (isset($_GET['DEL2'])) {
		$event_code = $_GET['DEL2'];
		$query = "SELECT * FROM event WHERE event_code='$event_code'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result)==1){

			while ($row = mysqli_fetch_assoc($result)) {
				mysqli_query($db, "DELETE FROM event WHERE event_code='$event_code'");
				$_SESSION['message'] = "Contact deleted!"; 
				header('location: list_of_event.php');
			}
		}
		
}

	//add fines
		$id_number = "";
		$event_code = "";
		$penalty = "";
		$update = false;
	if(isset($_POST['save1'])){
		$id_number = $_POST['id_number'];
		$event_code = $_POST['event_code'];
		$penalty = $_POST['penalty'];

		$sql = "INSERT INTO fines (id_number, event_code, penalty )
			VALUES ('$id_number','$event_code','$penalty')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: add_new_fines.php'); //redirect to homepage
	}

	//edit fines
	if (isset($_POST['edit_1'])) {
		$id_number = $_POST['id_number'];
		$event_code = $_POST['event_code'];
		$penalty = $_POST['penalty'];

	$query = "SELECT * FROM fines WHERE id_number='$id_number'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "UPDATE fines SET id_number ='$id_number', event_code ='$event_code', penalty ='$penalty' WHERE id_number='$id_number'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: fines.php');
			}
		}
}

	//add section officer
		$id_number = "";
		$position = "";
		$section_id="";
		$academic_code = "";
		$update = false;
	if(isset($_POST['save8'])){
		$id_number = $_POST['id_number'];
		$section_id = $_POST['section_id'];
		$position = $_POST['position'];
		$academic_code = $_POST['academic_code'];

		$sql = "INSERT INTO section_officer (id_number, position, section_id, academic_code )
			VALUES ('$id_number','$position','$section_id','$academic_code')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: add_new_section_officer.php'); //redirect to homepage
	}

	//edit section officer
	if (isset($_POST['EDIT8'])) {
		$id_number = $_POST['id_number'];
		$position = $_POST['position'];
		$academic_code = $_POST['academic_code'];
		$section_id = $_POST['section_id'];

	$query = "SELECT * FROM section_officer WHERE id_number='$id_number'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "UPDATE section_officer SET id_number ='$id_number', section_id = '$section_id', position ='$position', academic_code ='$academic_code' WHERE id_number='$id_number'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_section_officer.php');
			}
		}
}


	//add organization officer
		$id_number = "";
		$position = "";
		$organization_code = "";
		$academic_code = "";
		$update = false;
	if(isset($_POST['save6'])){
		$id_number = $_POST['id_number'];
		$position = $_POST['position'];
		$organization_code = $_POST['organization_code'];
		$academic_code = $_POST['academic_code'];

		$sql = "INSERT INTO org_officer (id_number, position, organization_code, academic_code )
			VALUES ('$id_number','$position','$organization_code','$academic_code')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: add_new_organization_officer.php'); //redirect to homepage
	}
	//edit organization officer
	if (isset($_POST['update6'])) {
		$id_number = $_POST['id_number'];
		$position = $_POST['position'];
		$organization_code = $_POST['organization_code'];
		$academic_code = $_POST['academic_code'];

	$query = "SELECT * FROM org_officer WHERE id_number='$id_number'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "UPDATE org_officer SET id_number ='$id_number', position ='$position', organization_code ='$organization_code', academic_code ='$academic_code'  WHERE id_number='$id_number'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_organization_officer.php');
			}
		}
}


	//add organization member
		$organization_code = "";
		$id_number = "";
		$academic_code = "";
		$update = false;
	if(isset($_POST['SAVE4'])){
		$organization_code = $_POST['organization_code'];
		$id_number = $_POST['id_number'];
		$academic_code = $_POST['academic_code'];

		$sql = "INSERT INTO org_member (organization_code, id_number, academic_code )
			VALUES ('$organization_code','$id_number','$academic_code')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: add_new_organization_member.php'); //redirect to homepage
	}

	//edit organization member
	if (isset($_POST['UPDATE4'])) {
		$id_number = $_POST['id_number'];
		$organization_code = $_POST['organization_code'];
		$academic_code = $_POST['academic_code'];

	$query = "SELECT * FROM org_member WHERE id_number='$id_number'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "UPDATE org_member SET id_number ='$id_number', organization_code ='$organization_code', academic_code ='$academic_code'  WHERE id_number='$id_number'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_organization_member.php');
			}
		}
}


	//add organization moderator
		$instructor_id = "";
		$last_name = "";
		$first_name = "";
		$middle_name = "";
		$organization_code = "";
		$academic_code="";
		$update = false;
	if(isset($_POST['save5'])){
		$instructor_id = $_POST['instructor_id'];
		$last_name = $_POST['last_name'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$organization_code = $_POST['organization_code'];
		$academic_code = $_POST['academic_code'];

		$sql = "INSERT INTO org_moderator (instructor_id, last_name, first_name, middle_name, organization_code, academic_code )
			VALUES ('$instructor_id','$last_name','$first_name','$middle_name','$organization_code','$academic_code')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: add_new_organization_moderator.php'); //redirect to homepage
	}

	//edit organization moderator
	if (isset($_POST['update5'])) {
		$instructor_id = $_POST['instructor_id'];
		$last_name = $_POST['last_name'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$organization_code = $_POST['organization_code'];
		$academic_code = $_POST['academic_code'];

	$query = "SELECT * FROM org_moderator WHERE instructor_id='$instructor_id'";
	$result = mysqli_query($db, $query);
	if (mysqli_num_rows($result)==1){
		while ($row = mysqli_fetch_assoc($result)) {
			mysqli_query($db, "UPDATE org_moderator SET instructor_id ='$instructor_id', last_name ='$last_name', first_name ='$first_name', middle_name ='$middle_name',organization_code ='$organization_code',academic_code ='$academic_code' WHERE instructor_id='$instructor_id'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_organization_moderator.php');
			}
		}
}


	//add academic year
		$academic_code = "";
		$acad_year = "";
		$semester = "";
		$update = false;
	if(isset($_POST['Save3'])){
		$academic_code = $_POST['academic_code'];
		$acad_year = $_POST['acad_year'];
		$semester = $_POST['semester'];

		$sql = "INSERT INTO academic_year (academic_code, acad_year, semester )
			VALUES ('$academic_code','$acad_year','$semester')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: add_new_acad_year.php'); //redirect to homepage
	}

	//edit academic year
	if (isset($_POST['EDIT3'])) {
		$academic_code = $_POST['academic_code'];
		$acad_year = $_POST['acad_year'];
		$semester = $_POST['semester'];

	$query = "SELECT * FROM academic_year WHERE academic_code='$academic_code'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "UPDATE academic_year SET academic_code ='$academic_code', acad_year ='$acad_year', semester ='$semester', WHERE academic_code='$academic_code'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: list_of_acad_year.php');
			}
		}
}

	//add payment
		$id_number = "";
		$event_code = "";
		$penalty = "";
		$amount = "";
		$status = "";
		$balance = "";
		$status = "";
		$update = false;
	if(isset($_POST['save7'])){
		$id_number = $_POST['id_number'];
		$event_code = $_POST['event_code'];
		$penalty = $_POST['penalty'];
		$amount = $_POST['amount'];
		$status = $_POST['status'];
		$balance = $_POST['balance'];
		$date = $_POST['date'];

		$sql = "INSERT INTO payment (id_number, event_code, penalty, amount, status, balance, date )
			VALUES ('$id_number','$event_code','$penalty','$amount','$status','$balance','$date')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "successfully saved";
			header('location: add_new_payment.php'); //redirect to homepage
	}

	//edit payment
	if (isset($_POST['EDIT4'])) {
		$amount = $_POST['amount'];
		$status = $_POST['status'];
		$balance = $_POST['balance'];
		$date = $_POST['date'];

	$query = "SELECT * FROM payment WHERE id_number='$id_number'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results)==1){
		while ($row = mysqli_fetch_assoc($results)) {
			mysqli_query($db, "INSERT INTO payment SET amount ='$amount', status ='$status', balance ='$balance', date ='$date' WHERE id_number='$id_number'");
			$_SESSION['message'] = "Successfully updated!"; 
			header('location: payment.php');
			}
		}
}

 ?>