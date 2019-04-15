<?php
session_start();

$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'myKitchen');

// REGISTER USER
if (isset($_POST['signUp'])) {
  $username = mysqli_real_escape_string($db, $_POST['Name']);
  $email = mysqli_real_escape_string($db, $_POST['mail']);
  $password_1 = mysqli_real_escape_string($db, $_POST['Password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['Cpassword']);
  
if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 /* echo "UN".$username."<br>";
   echo "MAIL".$email."<br>";*/
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
          
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location:Home.php');
  }
}

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['Name']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);
  
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  header('location: Home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
/**login as admin*/
if (isset($_POST['admin'])) {
  $username = mysqli_real_escape_string($db, $_POST['Name']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);
  
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM admin WHERE adminName='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  header('location: admin/adminHome.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

if (isset($_GET['logout'])) {
    echo "<script type='text/javascript'>alert('Goodbye ♥3♥');</script>";
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>