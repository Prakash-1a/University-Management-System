<html>
<head>
	<title> student admission form </title>
	<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<body ><center>
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


<form action="#" method="POST" id="f" enctype="multipart/form-data">

	<h3> STUDENT ADMISSION FORM</h3>

<table align ="center" cellpadding="10" id="admtable">
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="fn">
</td></tr>
<tr>
<td>LAST NAME</td>
<td><input type="text" name="ln">
</td>
</tr>

<tr>
<td>FATHER NAME</td>
<td><input type="text" name="ftn">
</td></tr>

<tr><td>MOTHER NAME</td>
<td><input type="text" name="mn">
</td></tr>

<tr>
<td>DATE OF BIRTH</td>
<td>
<input type="date" name="db" id="bday">
</td></tr>

<tr><td>MOBILE NUMBER</td>
	<td> <input type="text" name="mob"/></td>
	</tr>

	<tr><td> EMAIL ID</td>
<td><input type="text" name="ed"/></td>
</tr>
<tr>
<td> GENDER</td>
<td>
 Male<input type="radio" name="gen" value="male"/>
 Female<input type="radio" name="gen" value="female"/></td>
  </tr>

</tr>
<tr>
<td>ADDRESS</br></br></br> </td>
<td><textarea name="add" rows="4" cols="30">
</textarea></td>
</tr>
<tr><td>CITY</td>
<td><input type="text" name="cty"/></td></tr>
<tr>
<td>PIN CODE</td>
<td><input type="text" name="pn"/>
</td></tr>
<tr>
<td>STATE</td>
<td><input type="text" name="st" /></td></tr>

<tr>
<td>COUNTRY</td>
<td><input type="text" name="ct" value="INDIA"/></td>
</tr>




<tr><td>COURSES<br/> APPLIED FOR</td>
<td> 
<select onchange="show(this)" name="cr">
<option>BCA</option>
<option>B-tech</option>
<option>BBA</option>
<option>MCA</option>
</select>
</td></tr>

<tr>
<td>UPLOAD PHOTO</td>
<td>&nbsp; &nbsp; &nbsp; <input type="file" name="pic1">
</td></tr>

<tr>
<td>UPLOAD SIGNATURE</td>
<td><input type="file" name="sig1">
</td></tr>


 </table>
<table id="admtable"> 
  <tr>
<td>QUALIFICATION REQUIREMENTS<br/><br/><br/><br/><br/><br/><br/></td>
<tr><td aling="center"><b>S1.NO.</b></td>
<td aling="center"><b>EXAMINATION</b></td>
<td aling="center"><b>BOARD</b></td>
<td aling="center"><b>PERCENTAGE</b></td>
<td aling="center"><b>YEAR OF PASSING</b></td>
</tr>
<tr>
<tr><td>1</td>
<td><input type="text" name="classx" value="Class X" readonly/></td>
<td><input type="text" name="classxboard"/></td>
<td><input type="text" name="classxpercentage"/></td>
<td><input type="text" name="classxyearpassing"/></td>

</tr>

<tr><td>2</td>
<td><input type="text" name="classxii" value="Class XII" readonly/></td>
<td><input type="text" name="classxiiboard"/></td>
<td><input type="text" name="classxiipercentage"/></td>
<td><input type="text" name="classxiiyearpassing"/></td>


</tr>
<tr><td>3</td>
<td><input type="text" name="classgraduation" value="Graduation" readonly/></td>
<td><input type="text" name="graduationboard"/></td>
<td><input type="text" name="graduationpercentage"/></td>
<td><input type="text" name="graduationyearpassing"/></td>
</tr>



<tr><td colspan="2" align="center">
<input type="submit" value="submit" name="sbt">
</td></tr></table>

</form>

<script>
window.onload=function()
{
divs=document.getElementById("f").getElementsByTagName('tr');
divs[18].style.display='none';
 }
 function show(e)  {
 divs[18].style.display='none';
 if(e.selectedIndex ==0||e.selectedIndex ==1||e.selectedIndex ==2)
 {
}
 else
 {
 divs[18].style.display='block';
 }
 }
</script>


<?php
if(isset($_POST['sbt']))
{
$FName=@$_POST['fn'];
$LName=@$_POST['ln'];
$FaName=@$_POST['ftn'];
$MName=@$_POST['mn'];
$DOB=@$_POST['db'];
$MNumber=@$_POST['mob'];
$Ed=@$_POST['ed'];
$Gen=@$_POST['gen'];
$Add=@$_POST['add'];
$Cty=@$_POST['cty'];
$Pn=@$_POST['pn'];
$St=@$_POST['st'];
$Ct=@$_POST['ct'];
$Cr=@$_POST['cr'];
$enroll=rand(100000,999999);
$exam1=@$_POST['classx'];
$exam2=@$_POST['classxii'];
$exam3=@$_POST['classgraduation'];

$board1=@$_POST['classxboard'];
$board2=@$_POST['classxiiboard'];
$board3=@$_POST['graduationboard'];

$percentage1=@$_POST['classxpercentage'];
$percentage2=@$_POST['classxiipercentage'];
$percentage3=@$_POST['graduationpercentage'];

$yearofpassing1=@$_POST['classxyearpassing'];
$yearofpassing2=@$_POST['classxiiyearpassing'];
$yearofpassing3=@$_POST['graduationyearpassing'];

$target="student_image/";
$filename1=$_FILES['pic1']['name'];
$tmp1=$_FILES['pic1']['tmp_name'];
$img_address1=$target.$filename1;

$filename2=$_FILES['sig1']['name'];
$tmp2=$_FILES['sig1']['tmp_name'];
$img_address2=$target.$filename2;

move_uploaded_file($tmp1,$img_address1);
move_uploaded_file($tmp2,$img_address2);


include "connection1.php";
$stmt="insert into admissionform(Enrollment,FirstName,LastName,FatherName,Mothername,DateOfBirth, 
MobileNo,Emailid,Gender,Address,City,PinCode,State,
Country,Courseappliedfor,photo,sign)values('$enroll','$FName','$LName','$FaName','$MName','$DOB','$MNumber','$Ed','$Gen',
'$Add','$Cty','$Pn','$St','$Ct','$Cr','$img_address1','$img_address2')";
$tmp=$con->query($stmt);
if($tmp)
{
	 echo '<script>alert(" Admisssion Successfull");</script>';
}
else
{
	 echo '<script>alert(" Admission Failed");</script>';
	 echo mysqli_error($con);
}

$stmt2="INSERT INTO `qualification`(email,examination, board, percentage, yearofpassing)
VALUES('$Ed','$exam1','$board1','$percentage2','$yearofpassing2')";
$temp1=$con->query($stmt2);

$stmt3="INSERT INTO `qualification`(email,examination, board, percentage, yearofpassing)
VALUES('$Ed','$exam2','$board2','$percentage1','$yearofpassing1')";
$temp2=$con->query($stmt3);


if($board3!=''&& $percentage3!='' && $yearofpassing3!='')	
{
	$stmt4="INSERT INTO `qualification`(email,examination, board, percentage, yearofpassing)
VALUES('$Ed','$exam3','$board3','$percentage3','$yearofpassing3')";
$temp3=$con->query($stmt4);
}
if($tmp)
{
	echo "Data applied successfully";
}
else
{
	echo "Data insertion failed";
}

}
?>

</body></html>



