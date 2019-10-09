<?php   
//Connection for database
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#">Welcome to Admin Panel</a></li>

                <li><a href="javascript:displayDiv('home-div','pending-div','reviewed-div','about-div')">Home</a></li>
                <li><a href="javascript:displayDiv('pending-div','home-div','reviewed-div','about-div')">Applications</a></li>
                <li><a href="javascript:displayDiv('reviewed-div','pending-div', 'home-div','about-div')">Scholarships</a></li>
                <li><a href="admin-panel.php">View Users</a></li> 
                <li><a href="javascript:displayDiv('about-div','pending-div', 'reviewed-div','home-div')">About</a></li>
                <li><a href="admin-login.php">Logout</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>

                        <div id="home-div" style="display:block">

                          <h4>TARABA STATE SCHOLARSHIP MANAGEMENT SYSTEM</h4><br><br>
                          
                       <div class="panel panel-info">
                            <!-- Default panel contents -->
                            <button style="background-color:lightblue;text-align:left" bcoltype="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo">Notifications</button>
                            <!-- List group -->
                            <div id="demo" class="collapse">
                              <ul class="list-group">
                                <li class="list-group-item">Alison James has submitted his  Application.</li>
                                <li class="list-group-item">David Scott has submitted his  Application.</li>
                                <li class="list-group-item">12 new applications for Scholarship for Post-Graduate Study.</li>
                              </ul>
                            </div>
                          </div>

                          <div class="panel panel-primary">
                            <!-- Default panel contents -->
                            <button style="text-align:left" bcoltype="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo1">Announcements</button>

                            <div id="demo1" class="collapse">
                               <!-- List group -->
                              <ul class="list-group">
                                <li class="list-group-item">Deadline for Scholarship for Post-Graduate Study applications is on November 13, 2019 11:59 PM.</li>
                                <li class="list-group-item">The Application for COOPERATE is now open.</li>
                                <li class="list-group-item">The Application for Fully Founded Genius Scholarship is now open.</li>
                                <li class="list-group-item">Scholarship to study abroad is now on.</li>
                                <li class="list-group-item">The Application for COOPERATE is now open.</li>
                              </ul>
                            </div>

                          </div>
                        </div>
                        <br />
                        <br />
                        <div id="pending-div" style="display:none">
                            <table class = "table table-hover table-condensed" class="ab1">
                              
                              <tbody>
  <?php

      $result=mysqli_query($con,"SELECT id,sname,fname,mail,dob,cgpa, scholarship FROM application");
  $row=mysqli_num_rows($result);
  echo "<div class='container'>";
  echo "<h3><br>Pending Applications</h3>";
  echo "<a href='admin.php'><button class='btn btn-primary' style='float:right;'>Back</button><a/>";
  echo "</br></br>";
  echo "<table class='table table-striped table-bordered'>";
  echo "<tr align='center'>";
  echo "<th>S/NO</th>";
  echo "<th>Last Name</th>";
  echo "<th>First Name</th>";
  echo "<th>Email</th>";
  echo "<th>Date of Birth</th>";
  echo "<th>CGPA</th>";
  echo "<th>Scholarship</th>";
  echo "<th>Approve</th>";
  echo "<th>Reject</th>";
  echo "</tr>";
  $i=0;
  while ($retrive=mysqli_fetch_array($result)) 
  { 
    $id=$retrive['id'];
    $lname=$retrive['sname'];
    $fname=$retrive['fname'];
    $mail=$retrive['mail'];
    $date=$retrive['dob'];
    $cgpa=$retrive['cgpa'];
    $scholarship=$retrive['scholarship'];
      echo "<tr align='center'>";
      echo "<th>".$i=$i+1;"</th>";
      echo "<th>$fname</th>";
      echo "<th>$lname</th>";
      echo "<th>$mail</th>";
      echo "<th>$date</th>";
      echo "<th>$cgpa</th>";
      echo "<th>$scholarship</th>";
      echo "<th><form action='approve.php' method='post'>
      <input type='hidden' name='status' value=''>
      <button class='btn btn-success' name='accept' value='Accept' >Approve</button>
      </form></th>";
      echo "<th><form action='approve.php' method='post'>
      <input type='hidden' name='status' value=''>
      <button class='btn btn-danger' name='reject' value='Reject' >Reject</button>
      </form></th>";
      echo "</tr>";
  }
  echo "</table>";
     ?>













          
                              </tr>
                            </tbody>
                            </table>

                                  <div id="statusModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Application Status</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class = "table table-hover table-condensed">
                                            
                                          </table>
                                        </div>
                                        <div class="modal-footer">
                                          <div class="pull-left">
                                            <form method="post">
                                            <input type="submit" name="accept" class="btn btn-success" value="Accept" formaction="adminApprove.php">
                                            <input type="submit" name="reject" class="btn btn-danger" value="Reject" formaction="adminApprove.php">
                                            
                                            </form>
                                          </div>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                            </div>  
                        </div>

                        <div id="reviewed-div" style="display:none">
                            <table class = "table table-hover table-condensed">
                              
                              <tbody>
                              <?php

  $result=mysqli_query($con,"SELECT id,sch_id,schName,status,schAmount,created FROM scholarship");
  $row=mysqli_num_rows($result);
  echo "<div class='container'>";
  echo "<h3><br>Scholarship</h3>";
  echo "<a href='admin.php'><button class='btn btn-primary' style='float:right;'>Back</button><a/>";
  echo "</br></br>";
  echo "<table class='table table-striped table-bordered'>";
  echo "<tr align='center'>";
  echo "<th>S/NO</th>";
  echo "<th>Scholarship ID</th>";
  echo "<th>Scholarship</th>";
  echo "<th>Status</th>";
  echo "<th>Funding</th>";
  echo "<th>Date</th>";
  echo "<th>Update User Details</th>";
  echo "<th>Delete User</th>";
  echo "</tr>";
  $i=0;
  while ($retrive=mysqli_fetch_array($result)) 
  { 
    $id=$retrive['id'];
    $sch_id=$retrive['sch_id'];
    $schName=$retrive['schName'];
    $status=$retrive['status'];
    $schAmount=$retrive['schAmount'];
    $created=$retrive['created'];
      echo "<tr align='center'>";
      echo "<th>".$i=$i+1;"</th>";
      echo "<th>$sch_id</th>";
      echo "<th>$schName</th>";
      echo "<th>$status</th>";
      echo "<th>$schAmount</th>";
      echo "<th>$created</th>";
      echo "<th><a href='update-scholar.php?user=$id'><button class='btn btn-success'>Update</button></a></th>";
      echo "<th><a href='delete-admin.php?del=$id'><button class='btn btn-danger'>Delete</button></a></th>";
      
      echo "</tr>";
  }
  echo "</table>";

?>
                              </tbody>
                            </table>

                            <div class="modal fade" id="scholarshipDescription" role="Dialog">
                              <div class="modal-dialog">
                                <div class = "modal-content">
                                  <div class = "modal-header">
                                    <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
                                    <h4 class = "modal-title">Description</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type = "button" class = "btn btn-default" data-dismiss = "modal"> Close </button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            
                              <button type = "button" class = "btn btn-info" data-toggle = "modal" data-target = "#newScholarship"> Define New Scholarship </button>
                            </div>
                            <div id="newScholarship" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <div class = "modal-content">
                                  <div class = "modal-header">
                                    <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
                                    <h4 class = "modal-title">Defining new scholarship</h4>
                                  </div>
                                  <div class = "modal-body">
                                    <ul>
                                      <li><a href='addScholar.php'>Add scholarship</a></li>
                                    </ul>
                                  </div>
                                  <div class = "modal-footer">
                                    <button type = "button" class = "btn btn-default" data-dismiss = "modal"> Close </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div id="about-div" style="display:none">
                          <h1>About</h1>
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


    </script>

    <!-- Display Div Script -->
    <script type="text/javascript">
    function displayDiv(div1, div2, div3, div4, div5)
    {
       d1 = document.getElementById(div1);  // this is the div we want to disply
       d2 = document.getElementById(div2);  // the divs below are the div, pardon for inefficiency
       d3 = document.getElementById(div3);
       d4 = document.getElementById(div4);
       d5 = document.getElementById(div5);

       if( d1.style.display == "none" )
       {
          d1.style.display = "block";
          d2.style.display = "none";
          d3.style.display = "none";
          d4.style.display = "none";
          d5.style.display = "none";
       }

    }

    </script>




</body>

</html>
