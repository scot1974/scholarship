<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Home Page</title>
  
</head>
<style>
  ul.a {
    list-style-type: circle;
}
.bottom{
  clear: both;
  width: 100%;
  text-align: center;
  background-color: black;
  margin-top: 100px;
}
#section{
  clear: both;
}
.section-header{
  text-align: center;
  margin-bottom: 30px;
  margin-top: 30px;
}
.section-header p{
  font-size: 18px;
}
.single-service{
  border:1px solid #ebebeb;
  text-align: center;
  background: #fff;
}
.service-bg{
  height: 200px;
  position: relative;
}
.service-bg-1{
  background: url("images/bg1.jpg");
  -webkit-background-size:cover;
  background-size: cover;
  background-position: center;
}
.service-bg-2{
  background: url("images/bg2.png");
  -webkit-background-size:cover;
  background-size: cover;
  background-position: center;
}
.service-bg-3{
  background: url("images/bg3.jpg");
  -webkit-background-size:cover;
  background-size: cover;
  background-position: center;
}
.service-bg h2{
  color:#fff;
  background: tomato;
  border:1px solid tomato;
  font-size: 17px;
  text-align: center;
  font-weight: 700;
  padding: 15px;
  position: absolute;
  left: 8%;
  width: 84%;
  margin: 0;
  bottom: -25px;
  border-radius: 50px;
  letter-spacing: 2px;
}
.single-service:hover .service-bg-h2{
  background: #fff;
  transition: .9s;
  color: tomato;
}
.service-text{
  padding: 50px 30px 20px;
  font-size: 15px;
  font-weight: 400;
}
.service-text p:last-child{
  margin: 0;
  line-height: 1.8;
}
.btn-area{
  display: inline-block;
  color: #333;
  font-size: 17px;
  font-weight: 700;
  margin-top: 30px;
  text-transform: capitalize;
}
#section{
  clear: both;
}
@media only screen and (max-width: 767px){
  .single-service{
    margin-top: 30px;
  }
  .service-bg h2{
    font-size: 13px;
  }
}
a:focus {outline: 0 solid}

h1,h2,h3,h4,h5,h6{
  margin: 0 0 15px;
  font-weight: 700;
}
html,
body{
  background: #ddd;
  font-family: poppins;
}
a{
  -o-transition: 0.3s;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  color: #333;
}
a:hover{ text-decoration: none; }
#footer{
  clear: both;
}
#p{
  color: #999;
  line-height: 25px;
}
#h3,h2{
  color: #fff;
}
#h2{
  font-size: 18px;
}
.footer-top{
  background: #111;
  padding: 80px; 0;
  height: 350px;
  margin-top: 30px;
}
.segment-one h3{
  font-family: Courgette;
  color: #fff;
  letter-spacing: 3px;
  margin: 10px 0;
}
.segment-two h2{
  columns: #fff;
  font-family: Poppins;
  text-transform: uppercase;
}
.segment-two h2:before{
  content: '|';
  color: #c65039;
  padding-right: 10px;
}
.segment-two ul{
  margin: 0;
  padding: 0;
  list-style: none;
}
.segment-two ul li{
  border-bottom: 1px solid rgba(255,255,255,0.3);
  line-height: 40px;
}
.segment-two ul li a{
  color: #999;
  text-decoration: none;
}
.segment-three h2{
  color: #fff;
  font-family: Poppins;
  text-transform: uppercase;
}
.segment-three h2:before{
  content: '|';
  color: #c65039;
  padding-right: 10px;
}
.segment-three a{
  background: #494848;
  width: 40px;
  height: 40px;
  display: inline-block;
  border-radius: 50%;
}
.segment-three a i{
  font-size: 20px;
  color: #fff;
  padding: 10px 12px;
}
.segment-four h2{
  color: #fff;
  font-family: Poppins;
  text-transform: uppercase;
}
.segment-four h2:before{
  content: '|';
  color: #c65039;
  padding-right: 10px;
}
.segment-four form input[type=submit]{
  background: #c65039;
  border:none;
  padding: 3px 15px;
  margin-left: -5px;
  color: #fff;
  text-transform: uppercase;
}
.footer-bottom-text{
  text-align: center;
  background: #000;
  line-height: 75px;
}
/*Responsive css*/
@media only screen and (min-width: 768px) and (max-width: 991px){
  .md-mb-30{
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 767px){
  .sm-mb-30{
    margin-bottom: 30px;
  }
  .footer-top{
    margin-top: 50px 0;
  }
}
</style>
<body style="background-image: url(images/jpg);">
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="margin-top: 3px;">
    <div class="container">
     <img id="brand-image" alt="logo" src="images/taraba-logo.PNG" style="width:90px; margin-right: 15px;">
      <a class="navbar-brand" href="index.html">Taraba State Scholarship Management System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          
      <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Administration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Ministries
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>  
          <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">AboutUs</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
           Create account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signup.php">Sign Up</a>
          <a class="dropdown-item" href="login.php">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admin/admin-login.php">Admin Login</a>
        </div>
      </li>  
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->


  
    <div class="col-md-8" style="float: left; margin-top: 30px;">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="container-fluid">
                <div class="card-body">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/bg3.jpg" style="width: 100%" height="400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/bg2.png" style="width: 100%" height="400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/bg1.jpg" style="width: 100%" height="400px;" alt="...">
                        </div>
                      </div>
                    </div>
                </div>   
        </div>
    </div>
 </div>
</div>
<div class="card bg-light mb-3" style="max-width: 25rem; float: right; margin-top: 50px;">
  <div class="card-header"><h5>Taraba State Government Scholarship Scheme 2019<h5></div>
  <div class="card-body">
    <h5 class="card-title">ELIGIBILITY OF APPLICANTS</h5>
    <p class="card-text">For recipients to be eligible for any of the various schemes, they must:</p>
    <li>(a) Be Tarabans or residence of the State defined by existing official declaration</li>
    <li>(b) Possess a valid full time admission of any recognize public Nigeria or foreign institution of higher learning (an admission letter in languages other than English must be accompanied by the certified true and accurate translations)</li>
    <li>(c) Attain and maintain level of performance required by the expectations of the specific scholarship scheme for which he or she is a beneficiary (for this purpose the relevant review shall take place at the end of the academic session).</li>
    <li>(d) Complete the prescribe form for the relevant scholarship scheme he or she is expected to be a beneficiary (download the prescribe form, complete and submit to the board or complete online the form on the scholarship board website)</li>
    <li>(e) Submission of the completed prescribed form within the time limit set for the purpose and meeting other deadlines as may be required for the timely processing of admission</li>
    <li>(f) A written recommendation from a respected member of the community attesting to the good behavior of the applicant</li>
    <li>(g) Formally accept the offer of scholarship or financial assistance including the terms and condition of such offer. </li>
  </div>
</div>
<div class="container-fluid">
  <div class="list-group" style="float: left; margin-top: 50px; margin-left: 30px; width: 30%; " id="list">
  <h5 class="list-group-item list-group-item-dark">Criteria For Eligibility:</h5>
  <a href="#" class="list-group-item list-group-item-action">•  Applications for postgraduate studies should possess a minimum of first degree with second class honours Upper Division.</a>
  <a href="#" class="list-group-item list-group-item-action">•  Applicants must be registered full-time students of any recognized and accredited institution of higher learning.</a>
  <a href="#" class="list-group-item list-group-item-action">•  All other applicants (UG, HND, and NCE) must be registered full-time students of any recognized and accredited institution of   higher learning in Nigeria.</a>
</div>
</div>
<div class="container-fluid">
  <div class="list-group" style="float: left; margin-top: 50px; margin-left: 30px; width: 30%; " id="list">
  <h5 class="list-group-item list-group-item-dark">Useful Links</h5>
  <a href="howtoapply.php" class="list-group-item list-group-item-action">HOW TO APPLY FOR SCHOLARSHIP</a>
  <a href="tenure.php" class="list-group-item list-group-item-action">TYPES, VALUE AND TENURE OF SCHOLARSHIP</a>
  <a href="#" class="list-group-item list-group-item-action">Government of Taraba State shall maintain various scholarship schemes for the purpose of achieving the following objectives:</a>
</div>
</div>

<div class="container" id="section">
  <div class="row">
    <div class="col-md-12">
      <div class="section-header">
        <h2></h2>
        <p></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="single-service">
        <div class="service-bg service-bg-1">
        <h2>About Sholarship Board:</h2>
        </div>

        <div class="service-text">
        <p>The Taraba State scholarship Board was established in 1976 when the State was created, with the primary responsibility of 
        </p>
        <a href="aboutScholar.php" class="btn-area">Read More <i class="fa fa-long-arrow-right"></i></a> 
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="single-service">
        <div class="service-bg service-bg-2">
        <h2>Local Scholarship</h2>
        </div>

        <div class="service-text">
        <p>There are five (5) different Local scholarship schemes for applicants wishing to apply for Local Scholarship.:- 
        </p>
        <a href="localScholar.php" class="btn-area">Read More <i class="fa fa-long-arrow-right"></i></a> 
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="single-service">
        <div class="service-bg service-bg-3">
        <h2>Criteria For Eligibility:</h2>
        </div>

        <div class="service-text">
        <p>•  Applications for postgraduate studies should possess a minimum of first degree with second class honours Upper Division.
        </p>
        <a href="Criteria.php" class="btn-area">Read More <i class="fa fa-long-arrow-right"></i></a> 
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="footer-top" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
          <h3 id="h3">TSS Board</h3>
          <p id="p">The Taraba State scholarship Board was established in 1976 when the State was created, with the primary responsibility of disbursing government grants to all indigenous students of Taraba State in all the tertiary institutions in Nigeria and abroad to carter for their welfare and sustenance throughout the period of their study.</p> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
          <h2 id="h2">Useful Link</h2>
          <ul>
            <li><a href="">Event</a></li>
            <li><a href="">Supporting</a></li>
            <li><a href="">Hosting</a></li>
            <li><a href="">Career</a></li>
            <li><a href="">Blog</a></li>
          </ul> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 segment-three md-mb-30 sm-mb-30">
          <h2 id="h2">Follow Us</h2>
          <p id="p">Please follow us on our Social Media Profile in order to keep updated.</p>
          <a href=""><i class="fa fa-facebook"></i></a>
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-linkedin"></i></a>
          <a href=""><i class="fa fa-instagram"></i></a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 segment-four sm-mb-30">
          <h2 id="h2">Our Newletter</h2>
          <p id="p">The following two paragraphs contains a long text that will not fit in the box.</p>
          <form action="">
            <input type="email">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
  <p class="footer-bottom-text" id="p">All Right reserved by &copy;Scholarship Board.2019</p>
</footer>




 
<!-- Optoinal JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
</body>
</html>