<html>
<body bgcolor="lightblue">
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
<form action="#" method="POST">
<font color="Blue" size=+2>	Enter EmailID:</font>
		<input type="textbox" name="t1" required><br><br>
		<input type="submit" name="sbt" value="Get Result">
		<br>
	</form>

<?php
	if(isset($_POST['sbt']))
	{
		extract($_POST);
		$EmailId=@$_POST['t1'];
		
include 'connection1.php';
$stm="select * from admissionform where Emailid='$EmailId'";
$s=$con->query($stm);
if(mysqli_num_rows($s)>0)
{
$stm2="select * from qualification where email ='$EmailId'";
$m=$con->query($stm2);
$s=mysqli_fetch_array($s);

$m=mysqli_fetch_array($m);

?>
<center>

<table border="2" width="50%" class="table">

<tr>
<td colspan="2">FirstName:  </td>
<td><?php echo "$s[1]"; ?></td>
</tr>
<tr>
<td colspan="2">LastName: </td>
<td><?php echo "$s[2]"; ?> </td>
</tr>
<tr>
<td colspan="2">FatherName:  </td>
<td><?php echo "$s[3]"; ?></td>
</tr>
<tr>
<td colspan="2">MotherName:  </td>
<td><?php echo "$s[4]"; ?></td>
</tr>

<tr>
<td colspan="2">DateOfBirth:  </td>
<td><?php echo "$s[5]"; ?></td>
</tr>
<tr>
<td colspan="2">MobileNo:  </td>
<td><?php echo "$s[6]"; ?></td>
</tr>
<tr>
<td colspan="2">EmailId: </td>
<td> <?php echo "$s[7]"; ?></td>
</tr>
<tr>
<td colspan="2">Gender:  </td>
<td><?php echo "$s[8]"; ?></td>
</tr>
<tr>
<td colspan="2">Address: </td>
<td> <?php echo "$s[9]"; ?></td>
</tr>
<tr>
<td colspan="2">City: </td>
<td><?php echo "$s[10]"; ?></td>
</tr>
<tr>
<td colspan="2">PinCode:  </td>
<td><?php echo "$s[11]"; ?></td>
</tr>
<tr>
<td colspan="2">State: </td>
<td> <?php echo "$s[12]"; ?></td>
</tr>
<tr>
<td colspan="2">Country:  </td>
<td><?php echo "$s[13]"; ?></td>
</tr>
<tr>
<td colspan="2">Courseappliedfor:  </td>
<td><?php echo "$s[14]"; ?></td>
</td>


<tr>
<td colspan="2">Examination:  </td>
<td><?php echo "$m[1]"; ?></td>
</tr>
<tr>
<td colspan="2">Board:  </td>
<td><?php echo "$m[2]"; ?></td>
</tr>
<tr>
<td colspan="2">Percentage:  </td>
</td><?php echo "$m[3]"; ?></td>
</tr>
<tr>
<td colspan="2">Yearofpassing:  </td>
<td><?php echo "$m[4]"; ?></td>
</td>



<tr>

</table><br>
<a href="adminmenu.php"><button> Back </button></a>

<?php

} //closing of if
else
{
echo '<script>alert("emailid not found."); </script>';
}

} //closing of isset

?>

</html>
</body>
