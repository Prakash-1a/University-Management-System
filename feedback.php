<html>
<head><title>feedback</title>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<body style="background-color:lightblue;"><center>
<div id="d1">

<div id="d2">
<img src="unilogo.png" height="100px" width="150px" id="pic1" />
<p id="p1" > Sharda professional university </p><br><br><br><br><br><br><br><br>
<ul>
<li><a href="firstpage.php">Home</a></li>
<li><a href="colleges.php">Colleges</a></li>
<li><a href="courses.php">Courses</a></li>
<li><a href="registration.php">Re-registration</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="newadmissionform.php">Online admission</a></li>
<li><a href="status.php">Admission status</a></li>
<li><a href="result.php">Result</a></li>
<li><a href="contact.php">Contact us</a></li>
<li><a href="gallery.php">Gallery</a></li>
</ul>
<marquee> WWW.unisharda123789.ac.in </marquee>



<center><div id="d5">
<form action="#" method="POST"><center><h1> feedback </h1>
<p id="p4"> Feedback type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select type="text" name="feed"> 
<option> Select </option>
<option> Examination</option>
<option> Website related </option>
<option> General</option>
<option> Academic </option>
<option> Administrative </option></select>
</p>
<p id="p4"> Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="t1" id="t1"/></p>

<p id="p4"> Address &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="t2" id="t1"/></p>

<p id="p4"> country &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="t3"  id="t1"/></p>

<p id="p4"> e-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="t4" id="t1"/></p>

<p id="p4"> phone no 1.&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<input type="number" name="t5" id="t1"/></p>
<p id="p4"> phone no 2. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="number" name="t6" id="t1"/></p>

<p id="p4"> feedbackdetail&nbsp;
<textarea name="t7"  id="t1"/></textarea><br><br>

<input type="submit" name="sbt" value="Add" id="s1"/>


</form></center></div>
</body>
</html>
<?php
if(isset($_POST['sbt']))
{
extract($_POST);
include "connection1.php";
$stmt="insert into feedback1(Type,Name,Address,Country,Email,Phn1,Phn2,Details) values('$feed','$t1','$t2','$t3','$t4','$t5','$t6','$t7')";
$temp=$con->query($stmt);
echo mysqli_error($con);
if($temp)
{
    echo '<script>alert(" Feedback added successfully");</script>';
}
else
{
    echo '<script>alert(" Insertion failed.");</script>';
    echo mysqli_error($con);
}

}
?>
