<?php
  
$con=mysqli_connect('localhost:3306', 'mohammed','password', 'db_data');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$result=mysqli_query($con,"SELECT source FROM links where category='marketing'");

$sql="SELECT source FROM links where category='marketing'";

$row = mysqli_fetch_assoc($result);




//echo implode(', ', $row);

?>

<html lang="en">
<head>



<body style="background-image:url('https://sourceonetech.com/wp-content/uploads/2018/01/welive-branding-digital-marketing-background-image-1-1.png');">


<link rel="stylesheet" href="stylesheet.css"/>
<script language="javascript"></script><b><center>

<b><center><font face="Lucida Handwriting" size="4" color="white"> "Welcome to Marketing Section"</font><b></center>
<br>

<tr>
<td bgcolor="black">
<!--<marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" speed="117">-->

<p align ="center">'<font face="Lucida Handwriting" size="6" color="white">Marketing Courses</font> </p>
<p align ="center"><font face="Arial" size="4" color="white">Marketing courses  from social media marketing and marketing management courses to public relations tutorials and digital marketing lessons, will teach you how to attract customers and convince them to buy and use your product or service. Marketing is a crucial function in any organisation, large or small, so learning about these essential marketing topics will bring your résumé to the next level in no time.</p>
 </marquee> </td>
</tr>
</table>


<body bgcolor="grey"> 

<style>
ul {

  padding: 10px;
}

ul li {
  background: #cce5ff;
  margin: 10px;
}
i
</style>


<ul class="a">
 <br>

  <br>
<a href="<?php echo implode(', ', $row);?>"><img src="http://www.businessrole.net/wp-content/uploads/2018/09/Thrive_18_08_135.jpg" style="width:250px; height:200px" title="Digital Marketing" alt="Tech"></a>
<a href="<?php echo implode(', ', $row);?>"><img src="https://learnfinder.com/wp-content/uploads/2019/03/Social-media-marketing.jpg" style="width:250px; height:200px" title="Social Media Marketing" alt="Tech"></a>
<a href="<?php echo implode(', ', $row);?>"><img src="https://www.tridentdxb.com/cms/wp-content/uploads/2017/05/Marketing-Management-500x300.png" style="width:250px; height:200px" title="Marketing Management" alt="Tech"></a>
<a href="<?php echo implode(', ', $row);?>"><img src="https://bdq49mnm5a-flywheel.netdna-ssl.com/wp-content/uploads/2015/07/inbound-marketing-strategy.jpg" style="width:250px; height:200px" title="Marketing Strategy" alt="Tech"></a>
    <br>
  <br>
  <br>
  </ul>
  </head>
  </html>