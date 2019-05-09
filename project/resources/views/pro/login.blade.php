<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $myusername;
         
         header("location: view.blade.php");
      }else {
          
         $error = "Your Login Name or Password is invalid";
         echo '<script> alert("Your Login Name or Password is invalid");</script>';
      }
   }
   
  
?>

<html lang="en">
<head>

<link rel="stylesheet" href="stylesheet.css"/>
<script language="javascript">

function check()
{
var username = document.login.username.value;
var password = document.login.password.value;
 


if (username==null || username=="")
{
  alert("Username can't be blank");
  return false;
}
else if (password==null || password=="")
{
  alert("password can't be blank");
  return false;
}
}
</script>
</head>

<p align ="right"><input type="button" value="admin" name="admin" onclick="window.location.href='admin.blade.php'" ><br><br>
</p> 
<link rel="stylesheet" href="stylesheet.css"/>
<style>
body {
 background-image: url("https://dkklc3d0jy1nx.cloudfront.net/q/src/https%3A%2F%2Faf-production.s3.amazonaws.com%2Fphotos%2Fimages%2F76458%2Foriginal%2Fbooks.jpg/output/jpg/convert/-auto-orient/thumb/940x470%23");
 background-color: #cccccc;
 background-size: cover;
}
</style>
<script language="javascript"></script><b><center><font face="Lucida Handwriting" size="25" color="orange">Vision Online Courses</font><b></center></head>
<b><center><font face="Lucida Handwriting" size="4" color="white"> "We Provide Knowledge"</font><b></center>
<br>
<table width="100%" height="40" borer="0"cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="orange"><marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" speed="117"><font face="Lucida Handwriting" size="6" color="white">Register For Your Life</font> </marquee> </td>
</tr>
</table>




<br>
<br>
<br>
<!--<img src="C:\Users\fahim\Pictures\books.jpg" width="500" height="200" > -->
<!--<form action="/login.blade.php" method="post" onsubmit="return check()">-->
<div><form action="" method="post" onsubmit="return check()" >


<p align="Center"> <font face="Times New Roman" size="6" color=White>Please Enter The Details To Sign In</font> </br></br></p>
<p align="center"><font face="Lucida Handwriting" size="2" color=white>USER NAME</font>
<input type="text" name="username" required ><br><br> </p>
<p align="center"> <font face="Lucida Handwriting" size="2" color=white>PASSWORD </font>
<input type="password" name="password" required><br></p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="submit" name="submit"> 
<input type="submit" value="register" name="submit" onclick="window.location.href='register.blade'" ><br><br>

</form>


</script>
</head>

</body>
</html>
