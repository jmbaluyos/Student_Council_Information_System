<?php
session_start();
	$db = mysqli_connect('localhost','root','','sco');

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
				mysqli_query($db, "DELETE * FROM student WHERE id_number='$id_number'");
				$_SESSION['message'] = "Contact deleted!"; 
				header('location: list_of_student.php');
			}
		}
		
}



 ?>