<?php


 if(isset($_POST['submit'])) 
 {// receive all input values from the form
  $category = $_POST['category'];
  $source = $_POST['source'];
  
$con=mysqli_connect('localhost:3306', 'mohammed','password', 'db_data');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,'delete from links where source="$source");');

echo '<script> alert("Deleted");</script>';
header("location: adminaccess.php");
 
mysqli_close($con);
}
  
 

  
 header("location: adminaccess.php"); 

?>
