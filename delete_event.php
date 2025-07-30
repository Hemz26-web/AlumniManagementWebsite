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
$id = $_GET['eid'];
$query="DELETE from event WHERE event_id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<script>alert('Event deleted successfully...')</script>";
	header('location:events.php');
	?>
	<meta http-equiv="refresh' content='0; url=http:localhost:90/alumni/Admin/events.php">
	<?php
}
else
{
		echo"<script>alert('Event not deleted...')</script>";
		header('location:events.php');
}
?>
