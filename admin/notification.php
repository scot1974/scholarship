<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$msg='';
if (isset($_POST['notify'])) {
  $message=$_POST['message'];
  mysqli_query($con,"INSERT INTO notification (message) VALUES ('$message')");
  $msg="<div class='success'>Notification Sent Successfully</div>";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notification</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="user.css" rel="stylesheet">

</head>
<style>
  #comment{
    width: 500px;
    margin-left: 20px;
  }
  #h1{
    margin-left: 20px;
  }
  #label{
    margin-left: 20px;
  }
  .error
  {
    color: red; 
  }
  
  .success
  {
    color: green;
    font-weight: bold;
    text-align: center;
  }
</style>

<body style="background-image: url('images/banner.jpg');">
<div class="container-fluid" style="margin-top: 70px;">
<div class="card" style="margin-top: 20px; width: 600px; margin-left: 350px;">
<?php echo $msg; ?>
<h4 id="h1">Taraba State Scholarship Notification Board</h4>
<form method="post">
<div class="form-group">
<label id="label" for="comment">Write your notification here:</label>
<textarea class="form-control" rows="5" id="comment" name="message"></textarea>
<button type="submit" name="notify" style="margin-top:10px; margin-left: 20px;" class="btn btn-default">Submit</button>
<a href="admin.php"><button type="button" style="margin-top:10px; margin-left: 5px;" class="btn btn-default">Back</button></a>
</div>
</form>
</div>
</div>
                  

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
      var button = document.getElementById('showDivButton'); // Assumes element with id='button'
      button.onclick = function() {
          var div = document.getElementById('editDiv');
          if (div.style.display !== 'none') {
              div.style.display = 'none';
          }
          else {
              div.style.display = 'block';
          }
      };

      function displayDiv(div1, div2, div3, div4, div5, div6, div7)
      {
         d1 = document.getElementById(div1);  // this is the div we want to disply
         d2 = document.getElementById(div2);  // the divs below are the div, pardon for inefficiency
         d3 = document.getElementById(div3);
         d4 = document.getElementById(div4);
         d5 = document.getElementById(div5);
         d6 = document.getElementById(div6);
         d7 = document.getElementById(div7);

         if( d1.style.display == "none" )
         {
            d1.style.display = "block";
            d2.style.display = "none";
            d3.style.display = "none";
            d4.style.display = "none";
            d5.style.display = "none";
            d6.style.display = "none";
            d7.style.display = "none";
         }
      }
    </script>
</body>
</html>
