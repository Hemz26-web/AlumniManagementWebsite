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
$id = $_GET['fid'];
$query="DELETE from feedback WHERE feedback_id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<script>alert('Feedback deleted successfully...')</script>";
	header('location:feedback.php');
	?>
	<meta http-equiv="refresh' content='0; url=http:localhost:90/alumni/feedback.php">
	<?php
}
else
{
		echo"<script>alert('Feedback not deleted...')</script>";
		header('location:feedback.php');
}
?>
