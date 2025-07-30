<html>
<head>
<title>Delete Data</title>
</head>
<?php
include('connectionDB.php');
/*
session_start();
if (!isset($_SESSION['uid'])){
    header("location:login.php");
}
else {
    $userid = $_SESSION['uid'];
}*/
$id= $_GET['uid'];
$query="delete from registration where id='$id' ";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Data deleted successfully...')</script>" ;
?>
	 <meta http-euiv="refresh' content="0; url=http://localhost:90/alumni/Admin/userdetails.php"/>
	 <?php
}	 
	 else
	 {
	echo "<script>alert('Data not deleted ...')</script>" ;
	}
?>
</html>