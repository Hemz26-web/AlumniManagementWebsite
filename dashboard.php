<?php 
include('connectionDB.php');
include('header.php');
/*
session_start();
if (!isset($_SESSION['uname']))
{
    header("location:login.php");
}
else {
    $userid = $_SESSION['uid'];
}*/
 ?>
<!DOCTYPE html>
<html ln="en">
<head>
<title>Dashboard</title>
<style>
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
.p1
{
	color:#050119;
	padding-left:20px;
	font-size:30px;
	font-style:oblique;
	font-weight:bolder;
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
}
</style>
</head>
<body>
 <div class="container1">
    <img src="mjkcampus.jpg" alt=""> 
  </div>

<p class="p1">Welcome to MJK College Alumni</p>

<br />
</body>
</html>