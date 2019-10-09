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

<title>TSSM</title>
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
  $email=$_COOKIE['name'];
  $result=mysqli_query($con,"SELECT id,sname,fname,scholarship,status FROM application WHERE mail='$email'");
  $row=mysqli_num_rows($result);
  echo "<div class='container'>";
  echo "<h3><br>Application Status</h3>";
  echo "<a href='user.php'><button class='btn btn-primary' style='float:right;'>Back</button><a/>";
  echo "</br></br>";
  echo "<table class='table table-striped table-bordered'>";
  echo "<tr align='center'>";
  echo "<th>S/NO</th>";
  echo "<th>Last Name</th>";
  echo "<th>First Name</th>";
  echo "<th>Scholarship</th>";
  echo "<th>Status</th>";
  
  echo "</tr>";
  $i=0;
  while ($retrive=mysqli_fetch_array($result)) 
  { 
    $id=$retrive['id'];
    $lname=$retrive['sname'];
    $fname=$retrive['fname'];
    $scholarship=$retrive['scholarship'];
    $status=$retrive['status'];
      echo "<tr align='center'>";
      echo "<th>".$i=$i+1;"</th>";
      echo "<th>$fname</th>";
      echo "<th>$lname</th>";
      echo "<th>$scholarship</th>";
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

<?php

?>

