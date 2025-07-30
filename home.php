<?php
include("header1.php");
//Database credentials
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = 'alumnidb';

//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName,3307);

//Display error if failed to connect
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <title>Home</title>
<style>
body {
  padding: 0;
  margin: 0;
}

 .container {
  display: inline-block;
  cursor: pointer;
}
.container1 {
  position: relative;
  margin-top: 100px;
}
.container1 img {
  display: block;
  width: 100%;
  height:100%;
  margin-left: auto;
  margin-right: auto;
}

/*Side Navigation*/
nav .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  color:white;
  background: linear-gradient(#4682B4,#87CEEB); 
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 10px;
}

nav .sidenav a {
  padding: 8px 8px 8px 20px;
  text-decoration: none;
  font-size: 20px;
font-family: "Montserrat", "sans-serif";
  color: white;
  display: block;
  transition: 0.3s;
}

nav .sidenav a:hover {
  color: #000000;
}

nav .sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 20px;
  margin-left: 10px;
}

#main {
  transition: margin-left :10px;
color:white;
font-family: "Montserrat", "sans-serif";
  padding: 0px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 0px;}
  .sidenav a {font-size: 18px;}
}

/*Header*/
nav {
  position: fixed;
  z-index: 10;
  left: 0;
  right: 0;
  top: 0;
  font-family: "Montserrat", "sans-serif";
  height: 90px;
  background-color: #4682B4;
  padding: 2%;
}
nav .logo {
  float: left;
  width: 40%;
  height: 100%;
  display: flex;
  align-items: center;
  font-size: 24px;
padding: 4%;
  color: #fff;
}
nav .links {
  float: right;
  padding: 0;
  margin: 0;
  width: 60%;
  height: 100%;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
nav .links li {
  list-style: none;
align-items: center;
}
nav .links a {
  display: block;
  padding: 0px 0px 60px 0px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  text-decoration: none;
  position: relative;
}
nav .links a:hover {
  color: black;
}
nav .links a::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: black;
  visibility: hidden; 
  transition: all 0.3s ease-in-out 0s;
}
nav .links a:hover::before {
  visibility: hidden;
    color: black;
}
#nav-toggle {
  position: absolute;
  top: -100px;
}
nav .icon-burger {
  display: none;
  position: absolute;
  right: 5%;
  top: 50%;
  transform: translateY(-50%);
}
nav .icon-burger .line {
  width: 30px;
  height: 5px;
  background-color: #fff;
  margin: 5px;
  border-radius: 3px;
  transition: all 0.5s ease-in-out;
}
@media screen and (max-width: 768px) {
  nav .logo {
    float: none;
    width: auto;
    justify-content: center;
  }
  nav .links {
    float: none;
    position: fixed;
    z-index: 9;
    left: 0;
    right: 0;
    top: 100px;
    bottom: 80%;
    width: auto;
    height: auto;
    flex-direction: column;
    justify-content: space-evenly;
    background-color: rgba(0, 0, 0, 0.8);
    overflow: hidden;
    transition: all 0.5s ease-in-out;
  }
  nav .links a {
    font-size: 20px;
  }
  nav :checked ~ .links {
    bottom: 0;
  }
  nav .icon-burger {
    display: block;
  }
  nav :checked ~ .icon-burger .line:nth-child(1) {
    transform: translateY(10px) rotate(225deg);
  }
  nav :checked ~ .icon-burger .line:nth-child(3) {
    transform: translateY(-10px) rotate(-225deg);
  }
  nav :checked ~ .icon-burger .line:nth-child(2) {
    opacity: 0;
  }
}


/*search*/
nav .fa { 
  color: white;
  font-size: 1.2em;
  transition: all 1s; 
}
nav .fa:hover{
color:black;
}
nav .input {
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 42.5px;
  line-height: 30px;
  outline: 0;
  border: 0;
  font-size: 1em;
  border-radius: 20px;
  padding: 0 20px;
}

/*FOOTER*/

footer {
     background: linear-gradient(#4682B4,#87CEEB);
  color: white;
  margin-top:100px;
align:center;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
  align:center;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
align:center;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
align:center;
}

.footer-middle {
  padding-top: 2em;
  color: white;
align:center;
}


/*SOCİAL İCONS*/

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


/*Content*/
@charset "utf-8";
/* CSS Document */

.p1
{
	color:#050119;
	padding-left:20px;
	font-size:30px;
	font-style:oblique;
	font-weight:bolder;
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
}
.p2
{
	color:#050119;
	padding-left:20px;
	padding-right:50px;
	font-size:20px;
	font-weight:bold;
	font-family:Georgia, "Times New Roman", Times, serif;
}
.p3
{
	padding-left:50px;
	padding-right:50px;
	font-size:16px;
	font-family:Georgia, "Times New Roman", Times, serif;
	line-height:1.5;
}

.ul_2
{
	margin-left:50px;
	padding-left:20px;
	font-size:10px;
	font-family:Georgia, "Times New Roman", Times, serif;
}

#index_totop
{
	display: none;
  	position: fixed;
  	bottom: 20px;
  	right: 30px;
  	z-index: 99;
  	border: none;
  	outline: none;
  	background-color:rgb(255, 136, 136);
	padding:10px;
  	border-radius: 4px;
}
</style>  
</head>

<body>
  <div class="container1">
    <img src="mjkcampus.jpg" alt=""> 
  </div>
<p class="p1">Welcome to MJK College Alumni</p>
<p class="p2">Let's keep in touch.. <br><br> </p>
<p class="p3">Are you missing them? Your coursemates, your squad, your friends who up all night with you for assignments, gathering, events and so on.
Come and join MJK College Alumni to keep in touch with your friends that you miss!<br><br> 
Welcome back dearest alumni. Genuinely, one of our greatest assets is our global network of alumni. This page is to celebrate your achievements and provides you an access to our alumni community.
Let's discover how to get involved and connect with the University and its supporters. Learn about the events we hold, and our services for MJK College alumni.
We’re currently in touch with over 15,000 of our alumni from across India and the world, and we’re still looking for those we’ve lost contact with. Do you currently receive mailings from us? Have you recently changed address and need to let us know? MJK College Alumni maintains a database of tens of thousands of MJK College graduates, but we do not have accurate contact details for everyone. Please help us to keep in touch with you. </p>
<br><br><br>
<br /><hr color="peru" size="4"/>
</div>
<br><br><br>
<div id="howto">
<p class="p1">How to register as a member?</p>
<p class="p2">Steps to become a member of MJK College Alumni...<br><br></p>
</div>
<p class="img2" align="center"><img src="AlumniDiagram.png"></p>
<br><br>
<?php include('footer.php'); ?> 
</body>
</html>