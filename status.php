<html>
<head><title> status</title>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<style>
input[type=email]
{
	width:190px;
	height:35px;
	font-size: 13px;
	border-radius: 10px;
	padding-left:5px;
}
table.table
{
	position:absolute;
	margin-top:300px;
}

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
<body><center>
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


<center>
<form action="#" method="POST" id="f">

<div id="d6"><h1> Admission status</h1>

<p id="p5">Email ID: &nbsp;&nbsp;&nbsp;&nbsp;
 <input type="email" name="t1" id="t1"/></p>
<br>
 
<center> <input type="submit" name="sbt" value="check status" id="s2"/></center>
</center>
</div>

</form>
<?php
if(isset($_POST['sbt']))
{
echo'

<table border="6" class="table"  >
<tr>
<th> FirstName </th>
<th> Last Name </th>
<th> Fathers Name </th>
<th> Mother Name </th>
<th> DOB </th>
<th> Mob No </th>
<th> Email ID </th>
<th> Gender </th>
<th> Address </th>
<th> City </th>
<th> Pincode </th>
<th> State </th>
<th> Country </th>
<th> Course applied </th>
<th> Photo </th>
<th> Signature </th>
</tr>';
	
include "connection1.php";
$n1=@$_POST['t1'];
$stm="select*from admissionform where Emailid='$n1'";
$stmp=$con->query($stm);

while($row=mysqli_fetch_array($stmp))
{
	echo"

<td> $row[1]</td>
<td> $row[2]</td>
<td> $row[3]</td>
<td> $row[4]</td>
<td> $row[5]</td>
<td> $row[6]</td>
<td> $row[7]</td>
<td> $row[8]</td>
<td> $row[9]</td>
<td> $row[10]</td>
<td> $row[11]</td>
<td> $row[12]</td>
<td> $row[13]</td>
<td> $row[14]</td>
<td><img src=$row[photo] height=60px width=70px/></td>
<td><img src=$row[sign] height=60px width=70px/></td></tr>";

}
}

?>
</table>

</body>
</html>