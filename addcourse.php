<html>
<head><title> home page</title>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>

<body>
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
<li><a href="gallery.php">Gallery</a></li></ul><div>





<center>
<div id="newdiv">
<form action="#" method="POST" id="f">
<br><br><br>
<h2> ADD COURSES </h2><br>
COURSES:&nbsp;&nbsp;&nbsp;<input type="text" name="course"><br><br><br>
TYPE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="type"><br><br><br>
FEE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="fee"><br><br><br>
DURATION:&nbsp;&nbsp;<input type="text" name="duration"><br><br><br>
<input type="submit" name="sbt" value="add"><br></center>
</form>
</div>
<?php
if(isset($_POST['sbt']))
{
$cr=@$_POST['course'];
$ty=@$_POST['type'];
$fe=@$_POST['fee'];
$du=@$_POST['duration'];

include "connection1.php";
$stmt="insert into course(Course,Type,Fee,Duration)
values('$cr','$ty','$fe','$du')";

$tmp=$con->query($stmt);


if($tmp)
{
	echo "Data inserted successfully";
}
else
{
	echo "Data insertion failed";
}
}
?>
</div>
</body>
</html>


