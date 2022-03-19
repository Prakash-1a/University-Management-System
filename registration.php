<?php
if(isset($_POST['sbt']))
{
extract($_POST);
include "connection1.php";
$stmt="insert into registration(SName,Pname,Dob,Mob,Email,Date) values('$name','$pname','$dob','$mobile','$e','$dat')";
$temp=$con->query($stmt);
echo mysqli_error($con);
if($temp)
{
    echo '<script>alert(" Re-registration Successfull");</script>';
}
else
{
    echo '<script>alert(" Failed.");</script>';
    echo mysqli_error($con);
}

}
?>


<html>
<head><title>Re-registrationSS</title>
<link rel="stylesheet" type="text/css" href="homestyle.css"/>
<style>

input[type=text],input[type=number]
{	    
    font-weight: 500;
    font-style: normal;
    font-size: 1.15em;
    text-shadow: 0px 0px 3px rgba(130, 150, 150, 0);
    }
	
	input[type=email]{
	    
    font-weight: 100;
    font-style: normal;
    font-size: 1.15em;
    text-shadow: 0px 1px 3px rgba(130, 150, 150, 0);
    }
	input[type=date]
	{
		width:235px;
		height:30px;
	}
	select
	{
		width:235px;
		height:30px;
	}
	
	p,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10{
     font-style: normal;
    font-size: 1.55em;
}



</style>
<body style="background-color:lightblue">

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

</div>

<center>
<h1> Re-registration</h1></center>


	<form method="POST" action="#">
    	
    	<table border="0" cellpadding="4" cellspacing="0">
        
            <tr>
            	<td><p>Name Of Student:</p> </td>
            	<td>
                	<input type="text" name="name" id="textbox" required />
                </td>
            </tr>
             <tr>
			 
            	<td><p1>Father's Name:<p1> </td>
            	<td>
                	<input type="text" name="pname" id="textbox" required />
                </td>
            </tr>
           
			
            <tr>
            	<td><p2>DOB:<p2></td>
            	<td>
                	<input type="date" name="dob" id="textbox" required/>
                </td>
            </tr>
            
               
            <td><p4>Mobile No:</p4></td>
            	<td>
                	<input type="number" name="mobile" id="textbox" onblur="validatemobile(this)"  required/>
                </td>
            </tr>
						
						<td><p5>Email:</p5></td>
            	<td>
                	<input type="email" name="e" id="textbox"  required/>
                </td>
            </tr>
			
						<td><p6>Date:</p6></td>
            	<td>
                	<input type="date" name="dat" id="textbox"  required/>
                </td>
            </tr>
			 <tr>
                <td colspan="2">
                	
                	<input type="submit" name="sbt" value="Submit" id="button-in"  />
                </td>
            </tr>
			

</form>
<script>
function validatemobile(str)
{
if(str.value.length != 10)
{
alert("mobile number must be of 10 digits");
str.value="";
}
}

function changetoupper(str)
{
if(str.value.length != 0)
{
str.value=str.value.toUpperCase();

}
}
</script>
</body>
</html>
