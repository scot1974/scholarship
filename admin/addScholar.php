<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
$msg='';
if (isset($_POST['addScholar'])) 
{
	$sch_id=$_POST['sch_id'];
	$schName=$_POST['schName'];
	$status=$_POST['status'];
	$schAmount=$_POST['schAmount'];

	mysqli_query($con,"INSERT INTO scholarship (sch_id,schName,status,schAmount) VALUES ('$sch_id','$schName','$status','$schAmount')");
	 $msg="<div class='success'><center>Scholarship Inserted Successfully</center></div>";
}

?>
	<title>Add Scholarship</title>
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
		#body-bg{
			background: url("images/s1.jpg") center no-repeat fixed;
		}
		.box{
			border: 1px solid gray;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 3px 3px 3px gray;
			background-color: lightyellow;
		}
	</style>
	</head>
	<body id='body-bg'>
		<div class='container' style='padding-top:50px;background: url("images/s1.jpg") center no-repeat fixed;;margin-top: 20px; margin-bottom: 20px; width: 1200px; height: 640px;'>
		<a href="admin.php"><button class='btn btn-outline-danger' style='float: right;'>Back</button></a>
		<div class='col-md-4 offset-md-4'>
		<div class='box'>
		<h2 align='center'>Add Scholarship</h2><br>
		<?php echo $msg; ?>
		<form method="post">
			<label>Scholarship ID :</label>
			<div class="form-group">
			<input type='text' name='sch_id' class='form-control' placeholder='Enter Scholarship ID'>
			</div>
			<label>Scholarship Name :</label>
			<div class="form-group">
			<input type='text' name='schName' class='form-control' placeholder='Enter Scholarship Name'>	
			<label>Scholarship Status :</label>
			<div class="form-group">
			<input type='text' name='status' class='form-control' placeholder='Enter Scholarship Status'>
			</div>
			<label>Amount :</label>
			<div class="form-group">
			<input type='text' name='schAmount' class='form-control' placeholder='Enter Scholarship Amount'>	
	
			</div>
			<center><button name='addScholar' class='btn btn-success'>Submit</button></center>
		</form>	
		</div>
		</div>
		</div>
	</body>
	</html>

								