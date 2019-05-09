<?php



// REGISTER USER
 if(isset($_POST['submit'])) 
 {// receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password =  $_POST['password'];
  
$con=mysqli_connect('localhost:3306', 'mohammed','password', 'db_data');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"INSERT INTO users (username,password,password2,email) 
VALUES ('$username','$password','$password','$email')");

header("location: login.blade.php");
mysqli_close($con);
}
  
 // if (empty($password_1)) { array_push($errors, "Password is required"); }
 // if ($password_1 != $password_2) {
	//array_push($errors, "The two passwords do not match");
  

  
  

?>