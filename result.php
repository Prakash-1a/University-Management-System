<html>
<head>
<title> result page</title>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<style>
input[type=submit]
{
	width:140px;
	height:35px;
	font-size: 13px;
	border-radius: 20px;
	background-image:url(B.gif);
	background-size:100%;
	padding-left:5px;
}

input[type=submit]
{
	color: white;
}

input[type=textbox]
{
	width:190px;
	height:35px;
	
	font-size: 13px;
	border-radius:5px;
	background-size:100%;
	padding-left:5px;
}
table.table
{
	font-size:25px;
	
}
button
{
	width:250px;
	height:40px;
	font-size: 20px;
	border-radius: 25px;
	background-color:rgb(53,196,189);
	padding-left:10px;
	
}
button:hover
{
	color:black;
}
button
{
	color: white;
}


</style>


<body style="background-color:lightblue;">
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



<form method="POST" action="#">
<p id="p3"> ENROLLMENT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="roll"></p>
<input type="submit" name="sbt" value="Submit">
</form>

<?php
	if(isset($_POST['sbt']))
	{
		extract($_POST);
		
		$r=@$_POST['roll'];
		
		
include "connection1.php";
$stm="select * from result where admno='$r'";
$s=$con->query($stm);
if(mysqli_num_rows($s)>0)
{
$s=mysqli_fetch_array($s);


?>
<center>

<table border="5"  class="table">

<tr>
<td colspan="2">Exam Event:  </td>
<td><?php echo "$s[0]"; ?></td>
</tr>
<tr>
<td colspan="2">Class: </td>
<td><?php echo "$s[1]"; ?> </td>
</tr>
<tr>
<td colspan="2">Enrollment No:  </td>
<td><?php echo "$s[2]"; ?></td>
</tr>
<tr>
<td colspan="2">Marks:  </td>
<td><?php echo "$s[3]"; ?></td>
</tr>


</table><br>


<?php

}	 //closing of if
else
{
echo '<script>alert("Roll not found."); </script>';
}

} //closing of isset

?>

</html>
</body>
