<?php
if(isset($_POST['sbt']))
{
require "connection1.php";
$usr=@$_POST['usn'];

$stm="select * from examevent where Eventname='$usr'";
$usrdata=$con->query($stm);

if(mysqli_num_rows($usrdata)>0)
{
$stm="delete from examevent where Eventname='$usr'";
$temp=$con->query($stm);

if(mysqli_affected_rows($con)>0)
{
	echo '<script> alert("Exam Event Deleted successfully.");</script>';
}
else
{
	echo '<script> alert("Operation failed.");</script>';
}

}
else
{
	echo '<script> alert("Exam Event does not exist.");</script>';
}


}


?>

<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<style>
  table.black{background:url(02.jpg);
                 padding-left:4cm;
                 padding-right:4cm;
								
								margin-left:500px;
								border-radius:15px;
				 }
				 
	 input[type=submit]   
{
	
	background-color:green;
	color:white;
	padding:14px 20px;
	margin:10px 0;
	margin-left:0px;
	border:none;
	cursor:pointer;
	width:80px;

}
           
    
     
  </style>
<center>
<div id="d1">

<div id="d2">
<img src="unilogo.png" height="100px" width="150px" id="pic1" />
<p id="p1" > Sharda professional university </p><br><br><br><br><br><br><br><br>
<ul>
<li><a href="firstpage.php">Home</a></li>
<li><a href="loginpage.php">Admin</a></li>
<li><a href="colleges.php">Colleges</a></li>
<li><a href="courses.php">Courses</a></li>
<li><a href="registration.php">Re-registration</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="newadmissionform.php">Online admission</a></li>
<li><a href="status.php">Admission status</a></li>
<li><a href="result.php">Result</a></li>
<li><a href="contact.php">Contact us</a></li>
<li><a href="gallery.php">Gallery</a></li></ul>
</div><br>
<div id="newdiv">
<h2> ADMIN MENU</h2>

<center><br><br><br>
<br>
<h2 style="background-color: silver; text-align: center; font-size:30px;"> Delete Exam Event </h2>
<br>
<form name="form1" method="POST" action="#">
<table align='right' class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="3"><strong><font  size=6 color="white">Delete Event</font></strong></td>
</tr>

<tr>
<td width="78"><font color="white" size=3 >Event Name</font></td>
<td width="6"><font color="white">:</font></td>
<td width="294"><input name="usn" type="text" id="usn" required></td>
</tr>
<tr>
<td align='right'><input align='right' type="submit" name="sbt" value="Delete"></td>
</tr>
</table>
</form>



</body>
</html>
