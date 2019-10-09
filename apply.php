<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
session_start();
if (logged_in())
{
	header("Location:login.php");
}
$msg='';
if (isset($_POST['submit'])) 
{	
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];	
	$app_id=$_POST['app_id'];
	$mail=$_POST['mail'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$school=$_POST['school'];
	$dept=$_POST['dept'];
	$level=$_POST['level'];
	$cgpa=$_POST['cgpa'];
	$scholarship=$_POST['scholarship'];
	$status=$_POST['status'];
	
	mysqli_query($con,"INSERT INTO application (sname,fname,app_id,mail,dob,gender,school,dept,level,cgpa,scholarship,status) VALUES ('$sname','$fname','$app_id','$mail','$dob','$gender','$school','$dept','$level','$cgpa','$scholarship','$status')");
	
	$msg="<div class='success'><center>Application Successfully</center></div>";
}


?>
<title>Apply Page</title>
<style type="text/css">
	#body-bg{
		background: url("images/s1.jpg") center no-repeat fixed;
	}
	.success
	{
		color: green;
		font-weight: bold;
	}
</style>
</head>
<body id='body-bg'>
	<div class='container' style='padding-top:10px;background-color:;margin-top: 20px; margin-bottom: 20px; width: 1200px; height: 1000px;'>
	<div class="jumbotron reg" style="margin-bottom: 20px;"> 
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img id="brand-image" alt="logo" src="images/taraba-logo.png" style="width:100px;">
                </a>
            </div>
              <div class="paragraph" id="p">
                    <h2>TARABA STATE SCHOLARSHIP BOARD</h2>
                    
                </div>
          </div>
        </nav><hr>
	<h2>Application Form</h2>
	
	
	<div class="col-12">
	<div class="card" style="margin-top: 30px;">
  	<div class="card-body">
  	<form method="post">
  	
 	
	<!--Aplicant Personal & Academic Data-->
		<fieldset class="fieldset"><legend style="text-align:center;font-weight:bold margin-top:50px;"><?php echo $msg; ?>Aplicant Personal &amp; Academic Data </legend>
		
		<table border="0" cellspacing="2" cellpadding="5" width="" style="margin-left:40px;">
		<tr>
		<td style="text-align:right">Surname:</td>
		<td><input type="text"  name="sname" required class="form-control"></td>
		<td style="text-align:right">First Name:</td>
		<td><input type="text"  name="fname" required class="form-control"></td>
		</tr>
		
		<tr>
		<td style="text-align:right">Applicant ID:</td>
		<td><input type ="text" name="app_id" required class="form-control"></td>
		<td style="text-align:right">E-Mail ID:</td>
		<td><input type="email" name="mail" class="form-control"></td>
		</tr>
		
		<tr>
		<td style="text-align:right">Date of Birth:</td>
		<td><input type="date" name="dob" class="form-control"/></td>
		<td style="text-align:right">Gender:</td>
		<td><select id="gender" name="gender" style="float:right" required class="form-control">
			<option value="">-Gender-</option>
			<option value="Female">Female</option>
			<option value="Male">Male</option>
		</select> 
		</td>
		</tr>
		<tr>
		<td style="text-align:right">School:</td>
		<td><input type ="text" name="school" required class="form-control"></td>
		<td style="text-align:right">Department:</td>
		<td><input type="text" name="dept" class="form-control"></td>
		</tr>
		<tr>
		<td style="text-align:right">Level:</td>
		<td><input type ="text" name="level" required class="form-control"></td>
		<td style="text-align:right">CGPA:</td>
		<td><input type="text" name="cgpa" class="form-control"></td>
		</tr>
		
		
		
		<tr>
		<td style="text-align:right">Scholarship:</td>
		<td >
		<select  name="scholarship" style="float:right" required class="form-control">
			<option value="">-Select Scholarship-</option>
			<!--<option value=""></option>
			<option value=""></option>
			<option value=""></option>-->
			<?php  display_scholar(); ?>
		</select>
		<td><input type="hidden" name="status" value="Pedding"></td>
		</td>
		</tr>
		</table>
			</fieldset><br>
			<center><button type="submit" class="btn btn-outline-success" name="submit">Submit</button><a href="user.php" style="margin-left: 10px;">Back</a></center>
	</form>
		
  	</div>
	</div>
	</div>

	</div>
</body>
</html>

	