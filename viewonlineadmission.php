<html>

<title> home page</title>
<style>
body
{
	background-color:lightblue;
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
button:focus
{
	outline: none;
}
</style>
<body>

 <h2 style="background-color: silver; text-align: center; font-size:40px;"> View Admission Form </h2> <br>

<?php
if(isset($_POST['sbt']))
{
echo'

<table border="6"  >
<tr>
<th>Enrollment No</th>
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
$stm="select*from admissionform";
$stmp=$con->query($stm);

while($row=mysqli_fetch_array($stmp))
{
	echo"
<tr> 
<td>$row[0]</td>
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
</table><br><center>
<a href="adminmenu.php"><button> Back </button></a>
</body>
</html>