<html>
<head>
<title>Dashboard</title>
<style>
body
{
  background : white;
}
table
{
margin-top:0px;
	background : white;
}

.update, .delete{
background-color : green;
color:white;
border:0;
outline:none;
border_radius:50px;
font-weight:bold;
cursor:pointer;
}
.delete
{
background-color : red;
}
.add
{
background-color : #4682B4;
color:white;
cursor:pointer;
}


</style>
</head>
<body>
<?php
include("connectionDB.php");
include("header1.php");
$query = "select * from event " ;
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
?>

<br><br><br><br>
<h2 align="center"><mark>All Events</mark></h2>

<?php
if($total!=0)
{?>
<center><table border = "3" cellspacing =  "7" width = "100%" >
<tr>
<th width="5%">Event ID</th>
<th width="15%">Event Title</th>
<th width="10%">Event Date </th>
<th width="10%">Event Time </th>
<th width="20%">Event Location</th>
<th width="50%">Event Description</th>
</tr>
<?php

while($result = mysqli_fetch_assoc($data))
{
    echo "<tr>
    <td>".$result['event_id']."</td>
    <td>".$result['event_name']."</td>
    <td>".$result['event_date'] ."</td>
    <td>".$result['event_time']."</td>
    <td>".$result ['event_location']."</td>
	  <td>".$result['event_desc']."</td>
	 
	</tr>";    
}
}
else
{ 
  echo "No record found..." ;
 }
?>
<script>
function checkdelete()
{
	return confirm('Are you sure to Delete this data');
}
</script>
</body>
</html>
<?php
/*include("header1.php");
$query="select * from event";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if ($total > 0) {
   // $result=mysqli_fetch_assoc($data);
} else {
    // Handle case where no user is found
    $result = [];
}*/
?>
<!--DOCTYPE html>
<html lang="en">
<head>
  <title>Events</title>
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


/* Styling the body */
        body {
            margin-top:0px;
            padding: 0;
        }
 
        /* Styling section, giving background
            image and dimensions */
        section {
            width: 100%;
            height: 600px;
            background       
            background-size: cover;
        }

 
        /* Styling the three events section */
        section .events {
            position: relative;
            width: 1000px;
            height: 650px;
			padding:10px;
            background: rgba(0, 0, 0, 0.0);
            float: center;
            box-sizing: border-box;
			margin-top:60px;
			align:center;
			margin-left:300px;				
        }
 
        /* Styling the links of 
        the events section */
        section .events ul {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            margin: 10px;;
            padding: 40px;
            box-sizing: border-box;
        }
 
        /* Styling the lists of the event section */
        section .events ul li {
            list-style: none;
            background: #fff;
            box-sizing: border-box;
            height: 200px;
            margin: 15px 0;
			margin-top:0px
        }
 
        /* Styling the time class of events section */
        section .events ul li .time {
            position: relative;
            padding: 20px;
            background: #262626;
            box-sizing: border-box;
            width: 30%;
            height: 100%;
            float: left;
            text-align: center;
            transition: .5s;
        }
 
        /* Styling the hover effect
            of events section */
        section .events ul li:hover .time {
            background: #FFFFF;
        }
 
        /* Styling the header of time 
            class of events section */
        section .events ul li .time h2 {
            position: absolute;
            margin: 0;
            padding: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 60px;
            line-height: 30px;
        }
 
        /* Styling the texts of time 
        class of events section */
        section .events ul li .time h2 span {
            font-size: 30px;
        }
 
        /* Styling the details 
        class of events section */
        section .events ul li .details {
            padding: 20px;
            background:linear-gradient(#4682B4,#87CEEB);
            box-sizing: border-box;
            width: 70%;
            height: 100%;
            float: left;
			align:center
        }
 
        /* Styling the header of the 
        details class of events section */
        section .events ul li .details h3 {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 22px;
        }
 
        /* Styling the lists of details 
        class of events section */
        section .events ul li .details p {
            position: relative;
            margin: 10px 0 0;
            padding: 0;
            font-size: 14px;
        }
 
        /* Styling the links of details
        class of events section */
        section .events ul li .details a {
            display: inline-block;
            text-decoration: none;
            padding: 10px 15px;
            border: 1.5px solid #262626;
            margin-top: 8px;
            font-size: 18px;
            transition: .5s;
        }
 
        /* Styling the details class's hover effect */
        section .events ul li .details a:hover {
            background: #FFFFF;
            color: #fff;
            border-color: #FFFFF
        }


/*FOOTER*/

footer {
     background: linear-gradient(#4682B4,#87CEEB);
  color: white;
  margin-top:100px;
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

</style>
</head>
<body>

<section>
       
        <div class="events">
            <ul>
                <li>-->
			   <?php
           /* while ($result = mysqli_fetch_assoc($data)) {
                echo "<li>
                    <div class='time'>
                        <h2>
                           " . $result['event_date'] . " " . $result['event_time'] . " <br><span>March</span>
                        </h2>
                    </div>
                    <div class='details'>
                        <h3>
                           " . $result['event_name'] . "
                        </h3>
                        <p>
                          " . $result['event_desc'] . "
                        </p>
                    </div>
                </li>";
            }
            ?>
			   
            </ul>
        </div>
    </section>

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
</html>*/