<html lang="en">
<head>
<link rel="stylesheet" href="stylesheet.css"/>
<script language="javascript">
function check()
{
var user=document.forms.msg1.value;
var pass=document.forms.msg2.value;
if((user!="fahim") && (pass!="8122321841"))
{
alert("invalid Username or Password");
return false;
}
}

</script>
</head>


<link rel="stylesheet" href="stylesheet.css"/>
<script language="javascript"></script><b><center><font face="Lucida Handwriting" size="25" color="orange">Vision Online Courses</font><b></center></head>
<b><center><font face="Lucida Handwriting" size="4" color="white"> "We Provide Knowledge"</font><b></center>
<br>
<table width="100%" height="40" borer="0"cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="orange"><marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" speed="117"><font face="Lucida Handwriting" size="6" color="white">Register For Your Life</font> </marquee> </td>
</tr>
</table>

<body bgcolor="brown"> 



<br>
<br>
<br>
<!--<img src="C:\Users\fahim\Pictures\books.jpg" width="500" height="200" > -->
<!--<form action="/login.blade.php" method="post">-->
<form name="forms" action="adminpro.php" onsubmit="return check()"> -->

<p align="Center"> <font face="Times New Roman" size="5" color=Orange>Please Enter The Details To Sign In</font> </br></br>
<font face="Lucida Handwriting" size="2" color=white>USER NAME</font>
<input type="text" name="msg1" required ><br><br>
<font face="Lucida Handwriting" size="2" color=white>PASSWORD </font>
<input type="password" name="msg2" required><br></p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p align="Center">  <input type="submit" value="login" name="submit"> <br><br>
</form>


</script>
</head>

</body>
</html>
