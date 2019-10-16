<!DOCTYPE html>
<html>
<head>
  <title>Add New Priosner</title>
  <link rel="stylesheet" media="screen" href="login.css" >
  <link rel="stylesheet" type="text/css" href="register.css" >
</head>
<body>
  <div class="header">
  	<h2><a href="adminpanel1.php">Back</a> | Add Prisoner </h2>
  </div>
	
  <form method="post" action="addprisoner.php">
  	<!-- <?php include('errors.php'); ?> -->
  	<div class="input-group">
  	  <label>Prisoner ID</label>
  	  <input type="text" name="national_id">
  	</div>
  	<div class="input-group">
  	  <label>Full Nume</label>
  	  <input type="text" name="full_name">
  	</div>
  	<div class="input-group">
  	  <label>Date of Birth</label>
  	  <input type="date" name="DOB">
  	</div>
  	<div class="input-group">
  	  <label>Date In</label>
  	  <input type="date" name="datein">
    <div class="input-group">
  	  <label>Date Out</label>
  	  <input type="date" name="dateout">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address">
  	</div>
	  <div class="input-group">
  	  <label>Country</label>
  	  <input type="text" name="country">
  	</div>
	  <div class="input-group">
  	  <label>Gender</label>
  	  <input type="text" name="gender">
  	</div>
    <div class="input-group">
  	  <label>Marital Status</label>
  	  <input type="text" name="marital_status">
    </div>
    <div class="input-group">
  	  <label>Offence</label>
  	  <input type="text" name="offence">
  	</div>
    <div class="input-group">
  	  <label>Sentence</label>
  	  <input type="text" name="sentence">
  	</div>
    <div class="input-group">
  	  <label>File Number</label>
  	  <input type="text" name="file_num">
  	</div>
    <div class="input-group">
  	  <label>Prison</label>
  	  <input type="text" name="prison">
  	</div>
  	<div class="input-group">
  	  <input type="submit" value="Add Prisoner" name="add_user">
  	</div>
  </form>
  <?php 
include ('../config.php');
session_start();

if (isset($_POST['add_user'])) {
	// receive all input values from the form
	$national_id = $_POST[national_id];
    $full_name = $_POST[full_name];
    $DOB = $_POST[DOB];
	$datein = $_POST[datein];
    $dateout =  $_POST[dateout];
    $address = $_POST[address];
    $country = $_POST[country];
    $gender = $_POST[gender];
    $marital_status = $_POST[marital_status];
    $offence = $_POST[offence];
    $sentence = $_POST[sentence];
	$file_num = $_POST[file_num];
	$prison = $_POST[prison];
  
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
  
		$query = "INSERT INTO prisoners (national_id, full_name, DOB, datein, dateout, address, country, gender, marital_status, offence, sentence, file_num, prison) 
				  VALUES('$national_id', '$full_name', '$DOB', '$datein','$dateout', '$address','$country','$gender','$marital_status','$offence','$sentence', '$file_num', '$prison')";
		mysqli_query($db, $query);
		// $_SESSION['username'] = $username;
		$_SESSION['success'] = "You have successfully added a new prisoner";
		header('location: adminpanel1.php');
	// }
  }
?>
</body>
</html>