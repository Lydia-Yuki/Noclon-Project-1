
<!DOCTYPE html>
<html>
<head>
  <title>Add New Prison Location</title>
  <link rel="stylesheet" media="screen" href="login.css" >
  <link rel="stylesheet" type="text/css" href="register.css" >
</head>
<body>
  <div class="header">
  	<h2><a href="adminpanel1.php">Back</a> | Add Prison</h2>
  </div>
	
  <form method="post" action="addprison.php">
  	<!-- <?php include('errors.php'); ?> -->
  	<div class="input-group">
  	  <label>Prison ID</label>
  	  <input type="text" name="pno">
  	</div>
  	<div class="input-group">
  	  <label>Prison Name</label>
  	  <input type="text" name="pname">
  	</div>
  	<div class="input-group">
  	  <label>Location</label>
  	  <input type="text" name="location">
  	</div>
  	<div class="input-group">
  	  <label>Date of Establishment</label>
  	  <input type="date" name="opendate">
  	</div>
	  <div class="input-group">
  	  <label>Officer in Charge</label>
  	  <input type="text" name="in_charge">
  	</div>
	  <div class="input-group">
  	  <label>Officer's Contact </label>
  	  <input type="text" name="contact">
  	</div>
	  <div class="input-group">
  	  <label>Total Capacity</label>
  	  <input type="text" name="capacity">
  	</div>
  	<div class="input-group">
  	  <input type="submit" value="Add Prison Location" name="add_user">
  	</div>
  </form>
  <?php 
include ('../config.php');
session_start();

if (isset($_POST['add_user'])) {
	// receive all input values from the form
	$pno = $_POST[pno];
	$pname = $_POST[pname];
	$location = $_POST[location];
	$opendate =  $_POST[opendate];
	$in_charge = $_POST[in_charge];
	$contact = $_POST[contact];
	$capacity = $_POST[capacity];
  
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
  
		$query = "INSERT INTO prisontbl (pno, pname, location, opendate, in_charge, contact, capacity) 
				  VALUES('$pno', '$pname', '$location', '$opendate', '$in_charge', '$contact', '$capacity')";
		mysqli_query($db, $query);
		// $_SESSION['username'] = $username;
		$_SESSION['success'] = "You have successfully added a new Prison";
		header('location: adminpanel1.php');
	// }
  }
?>
</body>
</html>