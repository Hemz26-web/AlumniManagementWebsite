<?php
include('header1.php');
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = 'alumnidb';
//Connect with the database
$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if (isset($_POST["email"])) {
    $email = $_POST["email"];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        echo '<script>';
        echo 'alert("Sorry, entered email is not exist, please enter right email...");';
        echo '</script>';
    } else {
        // Additional logic for when the email exists can be added here
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
<style>

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
/*forgot password*/
.form-gap {
    padding-top: 120px;
	
}

/*FOOTER*/

footer {
     background: linear-gradient(#4682B4,#87CEEB);
  color: white;
  margin-top:50px;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
}


/*SOCIAL ICONS*/

/* footer social icons */

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoLinkedin:hover {
  background-color: #007bb7;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoLinkedin:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}
</style> </head>

<body> 
/* Form*/
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" action="sendmail1.php" method="post" role="form" autocomplete="off" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Please enter valid email address." class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input  id="email" name="email" placeholder="Email Address" class="form-control"  type="email" required>
						  <a href="mailto:masteryoda@starwars.com"></a>
						  
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="fpass" id="fpass" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
<a href="mailto:masteryoda@starwars.com"></a><a href= "mailto: name@email.com"> </a>
 <a href="mailto:example@example.com?subject=Hello%20there&body=This%20is%20a%20predefined%20email%20body."> 
                      </div>

                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
					  
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div> 
  
<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
<div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Address</h4>
          <ul class="list-unstyled">
            <li><a href="#"> Lt. M. J. Kundaliya Arts and Commerce Mahila College(Com. Sci. Department),</a></li>
            <li><a href="#">Rashtriyashala Campus,</a></li>
            <li><a href="#">Manhar Plot,</a></li>
            <li><a href="#">Rajkot-360002</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Contact Us</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Email : contact.mjkcollege@gmail.com</a></li>
            <li><a href="#">Contact No. :  0281 248 0272</a></li>
            <li><a href="#">Whatsapp No. : 94290 99978</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Other Links</h4>
          <ul class="list-unstyled">
            <li><a href="privacypolicy.php">Privcacy Policy</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
            <li><a href="aboutus.php">About Us</a></li>
			<li><a href="Feedback.php">Feedback</a></li>
            <li><a href="#"></a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="https://www.facebook.com/mjkcomputerscience" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="https://www.instagram.com/mjkcollege/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>       
    </div>
    </div>
  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 2024 - M.J.Kundaliya.  All rights reserved.</p>
    </div>
  </div>
  </div>
  </div>
</footer>
 
  </body>
</html>