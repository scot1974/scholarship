<?php 
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$msg='';
if(isset($_POST['update_data']))
{
	$id=$_POST['id'];
	$status=$_POST['status'];
	mysqli_query($con,"UPDATE bankdetails SET status='$status' WHERE id='$id'");
	
	$msg="<div class='success'><center>Payment Updated Successfully...!!!</center></div>";
}

?>
<title>Update Payment</title>
</head>
<style type="text/css">
	
	.error
	{
		color: red;	
	}
	
	.success
	{
		color: green;
		font-weight: bold;
	}
	#body-bg
	{
		background: url("images/s1.jpg") center no-repeat fixed;	
	}
</style>
<body id="body-bg">
<div class='container-fluid'>
<form class="form-group" action="" method="post">
	<div class='login-form col-md-4 offset-md-4'>
		<div class='jumbotron' style='margin-top: 50px; padding-top: 20px;padding-bottom: 20px;'>
		<h3 align='center'>Update Payment Status</h3><br>
		<?php echo $msg; ?>
		<div class="form-group">
			<label><b>Applicant ID:</b></label><br>
			<input type="text" name="id" class="form-control" placeholder="Enter Applicant ID">
			</div>
		<div class="form-group">
			<label><b>Payment Status:</b></label><br>
			<select class="form-control" name="status">
				<option>Select Payment Status</option>
				<option value="Paid">Paid</option>
				<option value="Not paid">Not Paid</option>
			</select>
			</div>
		
		<center><input type='submit' name='update_data' value='Update' class='btn btn-success'>
		<a href="admin.php"><input type='button' value='Back' class='btn btn-default'></a></center><br>
		</form>
			
		</div>
		
	</div>
	</form>
</div>
</body>