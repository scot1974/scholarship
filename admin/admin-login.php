<?php 

include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
session_start();
$msg='';$msg2=''; $fname=''; $dpass='';
if (isset($_POST['btnloggin']))
 {
	$fname=$_POST['name'];
	$password=$_POST['pass'];	
	if (empty($fname))
	 {
		$msg='<div class="error">Please Enter your Username</div>';
	}
	elseif (empty($password)) 
	{
		$msg2='<div class="error">Please Enter your Password</div>';
	}
	else
	{
		$pass=mysqli_query($con,"SELECT password FROM admin WHERE name='$fname'");
		$pass_w=mysqli_fetch_array($pass);
		$dpass=$pass_w['password'];
		if ($password!==$dpass)
		{
			$msg2='<div class="error">Password is wrong</div>';
		}
		else{
			$_SESSION['name']=$fname;			
			header("Location:admin.php");
		}
	}
}
?>
<title>Admin Login</title>
<style type="text/css">
	#body-bg{
		background: url("images/s1.jpg") center no-repeat fixed;
	}
	.error{
		color: red;
	}
</style>
</head>
<body id='body-bg'>
<div class='container'>
	<div class='login-form col-md-4 offset-md-4'>
		<div class='jumbotron' style='margin-top: 50px; padding-top: 20px; padding-bottom: 10px;'>
		<h2 align='center'>Admin Login</h2><br>
		<form method='post'>
		<div class='form-group'>
			<label>User Name :</label>
			<input type='text' name="name" class='form-control' placeholder='Username' />
			<?php echo $msg; ?>
		</div>
		<div class="form-group">
			<label>Password  :</label>
			<input type='password' name="pass" class='form-control' placeholder='Password'/>
			<?php echo $msg2; ?>
		</div>
		<div class="form-group">
			<center><input type='submit' name='btnloggin' class='btn btn-success' /></center><center><a href="index.php">Back</a></center>
		</div>
		
			
			
		</form>
			
		</div>
		

	</div>
</div>
</body>
</html>