<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
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
 <h2 style="background-color: silver; text-align: center; font-size:30px;"> View Result </h2> <br>

 <center>
<table  border="5" cellspacing=3  cellpadding=4>
<tr>
<th>Exam Event</th>
<th>Class</th>
<th>Admission no</th>
<th>Marks</th>
</tr>
<?php
require "connection1.php";
$stm="select * from result";
$data=$con->query($stm);

while($row=mysqli_fetch_array($data))
{
	echo '
	<tr>
	<td> '.$row[0].' </td>
	<td> '.$row[1].' </td>
	<td> '.$row[2].' </td>
	<td> '.$row[3].' </td>
	';
}

?>
</table></center>
</body>
</html>