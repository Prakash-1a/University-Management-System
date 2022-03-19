<html>
<head><title>loginpage</title>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<body><center>
<div id="d11">

<div id="d2">
<img src="unilogo.png" height="100px" width="150px" id="pic1" />
<p id="p1" > Sharda professional university </p><br><br><br><br><br><br><br><br>
</div>
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
<div id="log">
<br><br>
<div id="formm1">

<form action="#" method="POST"><center><br>
	<u>  <h1> Login </h1>  </u>
	<br>
	<input type="text"  name="email" placeholder="email" ><br><br>
	<input type="password" name="pass" placeholder="password"><br><br>
	<input type="submit" name="sbt" value="Login">
</form>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['sbt']))
{
extract($_POST);
include "connection1.php";
$n1=@$_POST['email'];
$pwd=@$_POST['pass'];

$stm="select * from admin where Email='$n1'";
$usrdata=$con->query($stm);

if(mysqli_num_rows($usrdata)>0)
{

$usrdata=mysqli_fetch_array($usrdata);
if($usrdata[2]==$pwd)
{	
	echo '<script> window.location.href="adminmenu.php";   </script>';
}
else
{
	echo '<script> alert("Wrong email or Password");</script>';
}
}
else
{
	echo '<script> alert("Wrong email or Password");</script>';
}

}
?>

