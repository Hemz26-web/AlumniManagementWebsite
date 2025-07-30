<?php
include("connectionDB.php");
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
  <title></title>
<style>
body {
  padding: 0;
  margin: 0;
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

</style></head>

<body>
  <nav>
    <input type="checkbox" id="nav-toggle">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="dashboard.php">Home</a>
  <a href="userdetails.php">Users</a>
  <a href="gallary.php">Gallery</a>
  <a href="courses.php">Courses</a>
  <a href="events.php">Event</a>
  <a href="feedback.php">Feedbacks</a>
  <a href="contact.php">Contact Us</a>
  <a href="about.php">About Us</a>
   <a href="logout.php">Log Out</a>
</div>

<div id="main">
      <span style="font-size:24px;cursor:pointer" onclick="openNav()"> &#9776 <strong> M.J.Kundaliya</strong> College </span></div>
        <ul class="links">
      <li><a href="dashboard.php">Home</a></li>
	  <li><a href="userdetails.php">Users</a></li>
      <li><a href="gallary.php">Gallery</a></li>
	  <li><a href="courses.php">Courses</a></li>
      <li><a href="events.php">Event</a></li>
      <li><a href="feedback.php">Feedbacks</a></li>
	  <li><a href="login.php">Login</a></li>
	     </ul>
</div>    
  </nav>
  
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "0px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>