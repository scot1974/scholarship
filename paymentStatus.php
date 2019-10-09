<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
session_start();
if (logged_in())
{
	header("Location:login.php");
}
?>

<title>Payment Status</title>
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
		<div class='container' style='padding-top:10px;background-color:#fff;margin-top: 100px; margin-bottom: 20px; width: 1200px; height: 500px;'>
			<div class="col-md-12">
				<div class="card" style="margin-top: 30px;">
		  			<div class="card-body">
		  			<?php 
		  			$result=mysqli_query($con,"SELECT id,acctName,acctNumber,bankName,acctType,status FROM bankdetails");
		  			$row=mysqli_num_rows($result);
		  			echo "<div class='container'>";
		  			echo "<h3><b>Payment Status</b></h3>";
		  			echo "<a href='user.php'><button class='btn btn-primary' style='float:right;'>Back</button><a/>";
		  			echo "</br></br>";
		  			echo "<table class='table table-striped table-bordered'>";
					echo "<tr align='center'>";
					echo "<th>ID</th>";
					echo "<th>Account Name</th>";
					echo "<th>Account Number</th>";
					echo "<th>Bank Name</th>";
					echo "<th>Account Type</th>";
					echo "<th class='success'>Status</th>";
  					echo "</tr>";

  					while ($retrive=mysqli_fetch_array($result)) 
  					{
  						$id=$retrive['id'];
  						$acctName=$retrive['acctName'];
  						$acctNumber=$retrive['acctNumber'];
  						$bankName=$retrive['bankName'];
  						$acctType=$retrive['acctType'];
  						$status=$retrive['status'];
  						echo "<tr align='center'>";
  						echo "<th>$id</th>";
  						echo "<th>$acctName</th>";
  						echo "<th>$acctNumber</th>";
  						echo "<th>$bankName</th>";
  						echo "<th>$acctType</th>";
  						echo "<th class='success'>$status</th>";
  						echo "</tr>";

  					}
  					echo "</table>";


		  			?>
  					</div>
				</div>
			</div>
		</div>
</body>
</html>


