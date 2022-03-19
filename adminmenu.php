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
<li><a href="gallery.php">Gallery</a></li></ul>
</div><br>
<div id="newdiv">
<h2> ADMIN MENU</h2>


<center><br><br><br>

<form action="viewonlineadmission.php" method="POST">
<input type="submit" name="sbt" value="View Online Admission"><br><br>


</form>
<form action="addcourse.php" method="POST">
<input type="submit" name="add" value="Add Courses"><br><br>

</form>
<form action="viewadmissionform.php" method="POST">
<input type="submit" name="view" value="View Admission Form"><br><br>


</form>
<form action="view re-registration.php" method="POST">
<input type="submit" name="v" value="View Re-registration"><br><br>

</form>

<form action="viewfeedback.php" method="POST">
<input type="submit" name="view" value="View Feedback"><br><br>

</form>

<form action="resultadmin.php" method="POST">
<input type="submit" name="rst" value="Result"><br><br>
</center></div></div>
</form>


</body>
</html>