<html>
<head>
<title> coursrs</title>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<body style="background-color:lightblue"><center>
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
</div>
<br>
<table border="2" width="70%">
<tr>
<th> COURSE  </th>
<th> TYPE </th>
<th> FEE </th>
<th> DURATION </th>
</tr>
<?php
include"connection1.php";
$stm="select*from course";
$stmp=$con->query($stm);


while
($row=mysqli_fetch_array($stmp))
{
echo" <tr>
<td> $row[Course]</td>
<td> $row[Type]</td>
<td> $row[Fee]</td>
<td> $row[Duration]</td></tr>";

}
?>
</table>
</div>
</body>
</html>