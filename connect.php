<?php
$filename=$_FILES["img"]["name"];
$tempname=$_FILES["img"]["tmp_name"];
$folder="Image/".$filename;
move_uploaded_file($tempname,$folder);

	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];	
	$lastName = $_POST['lastName'];
	$dob = $_POST['dob'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$phno = $_POST['phno'];

	// Database connection
	$conn = new mysqli('localhost','root','','alumnidb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(img,userName, password, firstName, lastName, dob, city, state, country, email, phno ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssssi", $folder, $userName, $password, $firstName, $lastName, $dob, $city, $state, $country, $email, $phno);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
		header('location:login.php');
	}

?>