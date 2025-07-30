<?php
include("connectionDB.php");
/*
session_start();
if (!isset($_SESSION['uid'])){
    header("location:login.php");
}
else {
    $userid = $_SESSION['uid'];
}*/
$id = $_GET['cid'];
$query="DELETE from courses WHERE course_id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<script>alert('Courses deleted successfully...')</script>";
	header('location:courses.php');
	?>
	<meta http-equiv="refresh' content='0; url=http:localhost:90/alumni/Admin/events.php">
	<?php
}
else
{
		echo"<script>alert('Courses not deleted...')</script>";
		header('location:courses.php');
}
?>
