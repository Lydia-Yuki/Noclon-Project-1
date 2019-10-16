
<!DOCTYPE html>
<html>
<head>
  <title>Add New Visitor</title>
  <link rel="stylesheet" media="screen" href="login.css" >
  <link rel="stylesheet" type="text/css" href="register.css" >
</head>
<body>
  <div class="header">
  	<h2><a href="adminpanel1.php">Back</a> | Add Visitor </h2>
  </div>
	
  <form method="post" action="addvisitor.php">
  	<!-- <?php include('errors.php'); ?> -->
  	<div class="input-group">
  	  <label>National ID</label>
  	  <input type="text" name="national_id">
  	</div>
  	<div class="input-group">
  	  <label>Full Name</label>
  	  <input type="text" name="full_name">
  	</div>
  	<div class="input-group">
  	  <label>Date of Visit</label>
  	  <input type="date" name="visit_date" placeholder="YYYY-MM-DD">
  	</div>
  	<div class="input-group">
  	  <label>Time In</label>
  	  <input type="time" name="timein">
  	</div>
	  <div class="input-group">
  	  <label>Relationship</label>
  	  <input type="text" name="relationship">
  	</div>
	  <div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="number">
  	</div>
	  <div class="input-group">
  	  <label>Prisoner Name</label>
  	  <input type="text" name="prisoner">
  	</div>
  	<div class="input-group">
  	  <input type="submit" value="Add Visitor" name="add_user">
  	</div>
  </form>
  <?php 
include ('../config.php');
session_start();

if (isset($_POST['add_user'])) {
	// receive all input values from the form
	$national_id = $_POST[national_id];
	$full_name = $_POST[full_name];
	$visit_date = $_POST[visit_date];
	$timein =  $_POST[timein];
	$relationship = $_POST[relationship];
	$number = $_POST[number];
	$prisoner = $_POST[prisoner];
  
	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	// if (empty($national_id)) { array_push($errors, "National ID is required"); }
	// if (empty($full_name)) { array_push($errors, "Full name is required"); }
	// if (empty($visit_date)) { array_push($errors, "Date of visit is required"); }
	// if (empty($timein)) { array_push($errors, "Time in is required"); }
	// if (empty($relationship)) { array_push($errors, "Relationship to prisoner is required"); }
	// if (empty($number)) { array_push($errors, "Phone number is required"); }
	// if (empty($prisoner)) { array_push($errors, "Name of prisoner is required"); }

  
	// first check the database to make sure 
	// a user does not already exist with the same username and/or email
	// $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	// $result = mysqli_query($db, $user_check_query);
	// $user = mysqli_fetch_assoc($result);
	
	// if ($user) { // if user exists
	//   if ($user['username'] === $username) {
	// 	array_push($errors, "Username already exists");
	//   }
  
	//   if ($user['email'] === $email) {
	// 	array_push($errors, "email already exists");
	//   }
	// }
  
	// // Finally, register user if there are no errors in the form
	// if (count($errors) == 0) {
		// $password = md5($password_1);//encrypt the password before saving in the database
  
		$query = "INSERT INTO visitortbl (national_id, full_name, visit_date, timein, relationship, number, prisoner) 
				  VALUES('$national_id', '$full_name', '$visit_date', '$timein', '$relationship', '$number', '$prisoner')";
		mysqli_query($db, $query);
		// $_SESSION['username'] = $username;
		$_SESSION['success'] = "You have successfully added a new visitor";
		header('location: adminpanel1.php');
	// }
  }
?>
</body>
</html>