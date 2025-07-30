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
$id = $_GET['uid'];
$stmt = $conn->prepare("SELECT * FROM registration WHERE id = ?");
$stmt->bind_param("i", $id); // "i" indicates the type is integer
$stmt->execute();
$result = $stmt->get_result();
$total = $result->num_rows;

if ($total > 0) {
    $userData = $result->fetch_assoc();
} else {
    // Handle case where no user is found
    $userData = [];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
 <link rel="stylesheet" href="css/register.css">
  </head>

  <body>
        <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Update User Data</h1>
          </div>
          <div class="panel-body">
            <form <?php  echo "action='updatedata.php?id=". $userData['id'] . " ' "; ?> method="post">
			
			<div class="form-group">
                <label for="img">Profile Image</label>
                <input
                  type="file"
                  class="form-control"
                  id="img"
                  name="img"
              </div>
			  
<div class="form-group">
                <label for="userName">User Name</label>
                <input type="text" 
                  class="form-control"
                  id="userName"
                  name="userName" required 				  
				onkeypress="return (event.charCode > 64 && event.charCode < 91)|| (event.charCode > 47 && event.charCode < 58) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" 
		 value="<?php echo  $userData['userName']; ?>"/>
              </div>

<div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
				  value="<?php echo  $userData['password']; ?>"
				  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter one special character(@,#,$,%,&,^,!,*,?), and at least 8 or more characters"
		required>
              </div>

              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
				  value="<?php echo  $userData['firstName']; ?>"
				  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" 
		required/>
              </div>

              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
				  value="<?php echo  $userData['lastName']; ?>"
				  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" 
		required>
              </div>
 
			<div class="form-group">
                <label for="dob">Date of Birth</label>
                <input
                  type="date"
                  class="form-control"
                  id="dob"
                  name="dob"
				  value="<?php echo  $userData['dob']; ?>"
			required/>
              </div>

			<div class="form-group">
                <label for="city">City</label>
                <input
                  type="text"
                  class="form-control"
                  id="city"
                  name="city"
				  value="<?php echo  $userData['city']; ?>"
				  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" 
			required/>
              </div>

			<div class="form-group">
                <label for="state">State</label>
                <input
                  type="text"
                  class="form-control"
                  id="state"
                  name="state"
				  value="<?php echo  $userData['state']; ?>"
				  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" 
			required/>
              </div>

			<div class="form-group">
                <label for="country">Country</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  name="country"
				  value="<?php echo  $userData['country']; ?>"
				  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" 
			required />
              </div>
	

                            <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
				  value="<?php echo  $userData['email']; ?>"
				  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Please enter valid email address."
		required />
              </div>
              
              <div class="form-group">
                <label for="phno">Phone Number</label>
                <input
    		type="text"
                  class="form-control"
                  id="phno"
                  name="phno"
				  maxlength="10"
				  value="<?php echo  $userData['phno']; ?>"
				  onkeypress="return (event.charCode > 47 && event.charCode < 58)"
		required/>
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; MJK College</small>
          </div>
        </div>
      </div>
    </div>
   
  </body>
</html>
