

<html>
<head><title> home page</title>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<style>
 table.black{background:url(02.jpg);
                 padding-left:2cm;
                 padding-right:2cm;
								margin-bottom:40px;
								margin-left:450px;
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

<br>
<h2 style="background-color: silver; text-align: center; font-size:30px;"> Add Exam Event </h2>
<br>
<form name="form1" method="POST" action="#">
<table align='right' class="black" width="400" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="78"><font color="white" size=5 >Event Name</font></td>
<td width="6"><font color="white">:</font></td>
<td width="294"><input name="event" type="text" id="usn" required></td>
</tr>

<tr>
<td width="78"><font color="white" size=5 >Date</font></td>
<td width="6"><font color="white">:</font></td>
<td width="294"><input name="date" type="date" id="usn" required></td>
</tr>
<tr>
<td width="78"><font color="white" size=5 >Total Marks</font></td>
<td width="6"><font color="white">:</font></td>
<td width="294"><input name="total" type="number" id="usn" required></td>
</tr>


<tr>
<td align='right'><input align='right' type="submit" name="sbt" value="Add"></td>
</tr>
</table>
</form>
</form>


</body>
</html>
<?php

if(isset($_POST['sbt']))
{
extract($_POST);
$usr1=@$_POST['event'];
$usr2=@$_POST['date'];
$usr3=@$_POST['total'];
include "connection1.php";

$stmt="insert into examevent(Eventname,Date,Totalmarks)values('$usr1','$usr2','$usr3')";
$temp=$con->query($stmt);

if($temp)
{
    echo '<script>alert(" Exam Event added successfully");</script>';
}
else
{
    echo '<script>alert(" Exam Event insertion failed.");</script>';
    echo mysqli_error($con);
}
}

?>

