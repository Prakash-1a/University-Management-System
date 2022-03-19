<?php

if(isset($_POST['prepare']))
{
	extract($_POST);
	require("connection1.php");
	$stmt="insert into result(examevent,class,admno,marks)values
	('$ee','$class','$stdata','$marksobt')";
	$temp=$con->query($stmt);
	   echo mysqli_error($con);

	if($temp)
{
    echo '<script>alert("Result Updated Successfully.");</script>';
}
else
{
    echo '<script>alert("Operation Failed.");</script>';
    echo mysqli_error($con);
}

}

?>



<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
</head>
<style>
  table.black{background:url(02.jpg);
                 padding-left:4cm;
                 padding-right:4cm;
								margin-top:10px;
								margin-left:500px;
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
select
{
	width:170px;
	height:25px;
}
           
    
     
  </style>
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
<h2 style="background-color: silver; text-align: center; font-size:30px;"> Prepare Result </h2>

<br>
<form name="form1" method="POST" action="#">
<table align='right' class="black" width="400" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
<tr>

<td><font color="white" size=5 >Select ExamEvent</font></td>
<td><font color="white">:</font></td>
<td><select name="event" type="text" id="usn" required>
<?php

require "connection1.php";
$stm="select * from examevent";
$data=$con->query($stm);
while($row=mysqli_fetch_row($data))
{
	echo '<option value="'.$row[0].'">'.$row[0].'</option>';
}

?>


</td>
</tr>

<tr>

<td width="78"><font color="white" size=5 >Select Class</font></td>
<td width="6"><font color="white">:</font></td>
<td width="294"><select name="class" type="text" id="usn" required>
									<option value="BCA">BCA</option>
									<option value="MCA">MCA</option>
									<option value="B-tech">B-tech</option>
									<option value="BBA">BBA</option></td></select>
</tr>


<tr>	
<td align='right'><input align='right' type="submit" name="sbt" value="Proceed"></td>
</tr>
</table>
</form>
</form>
<?php
if(isset($_POST['sbt']))
{
	extract($_POST);
	$a=@$_POST['class'];
	$b=@$_POST['event'];
require "connection1.php";

$stm="select * from examevent";
$usrdata=$con->query($stm);

$stmt="select * from admissionform where Courseappliedfor='$a'";
$userdata=$con->query($stmt);

$stmt="select * from result";
$resultdata=$con->query($stmt);


if(mysqli_num_rows($usrdata)>0)
{	
	$usrdata=mysqli_fetch_array($usrdata);
	
echo '
<form method="POST" action="#">
    	<div>
    	<table class="t1" border="0" cellpadding="4" cellspacing="0">
        
            <tr>
            	<td><p>Exam Event:</p> </td>
            	<td>
                	<input type="text" name="ee" id="textbox" value="'.$b.'" required />
                </td>
            </tr>
             <tr>
			 
            	<td><p1>Class:<p1> </td>
            	<td>
                	<input type="text" name="class" id="textbox" value="'.$a.'" required />
                </td>
            </tr>
           
			
            <tr>
            	<td><p2>Select Student:<p2></td>
            	<td>
					<Select name="stdata">';
					$found=0;
					   while($row=mysqli_fetch_row($userdata))
						{
						
							while($row2=mysqli_fetch_row($resultdata))
							{
								if($row2[2]==$row[0])
								{
									$found=1;
								}
							}
							if(!$found)
							{
							echo '<option value="'.$row[0].'">'.$row[1],  $row[0] .'</option>';
							}
							$found=0;
							}
						
echo '
                </td>
            </tr>
            
            <tr>
            	<td><p3>Marks Obtained:<p3></td>
            	<td>
                	<input type="number" name="marksobt" id="textbox" value=""  required/>
                </td>
            </tr>
            				
            
            <tr>
                <td colspan="2"	>
                	
                	<input type="submit" name="prepare" value="Prepare" id="button-in"  />
                </td>
            </tr>
        </table>

   </div>
    </form>

';

}
else
{
	echo '<script> alert("Student does not exist.");</script>';
}


}
?>


</body>
</html>
