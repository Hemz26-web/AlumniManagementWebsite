<?php
include('connectionDB.php');
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">  
  <title>Login</title>
<style>

/*Login Box*/

.login-page {
    height: 100vh;
    width: 100%;
    align-items: center;
    display: flex;
    justify-content: center;
}

.form {
background: linear-gradient(#4682B4,#87CEEB);
  position: relative;
  filter:drop-shadow(0 0 2px #000000);
  border-radius: 5px;
  width: 450px;
  height: 450px;
  background-color: #ffffff;
  padding:40px;
  box-shadow: 0 20px 20px rgba(0, 0, 0, .2);
  margin-top:70px;
}

.form img {
    position: absolute;
    height: 20px;
    top: 200px;
    right: 60px;
    cursor: pointer;
}

.form input {
    outline: 0;
    background: #f2f2f2;
    border-radius: 4px;
    width: 100%;
    border: 0;
    margin: 15px 0;
    padding: 15px;
    font-size: 14px;
}

.form input:focus {
    box-shadow: 0 0 5px 0 rgba(106, 98, 210);
}

span {
    color: white;
    margin: 10px 0;
    font-size: 14px;
}

.form button {
    outline: 0;
    background: #4682D8;
    width: 100%;
    border: 0;
    margin-top: 10px;
    border-radius: 3px;
    padding: 15px;
    color: white;
    font-size: 15px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.4s ease-in-out;
    cursor: pointer;
}

.form button:hover,
.form button:active,
.form button:focus {
    background: black;
    color: #fff;

}

.message{
    margin: 15px 0;
    text-align: center;

}
.form .message a {
    font-size: 14px;
    color: #3498hb;
    text-decoration: none;
}
.form .message a:hover {
    font-size: 14px;
    color: black;
    text-decoration: underline;
}

.form .signup-link{
  text-align: center;
  padding:25px;

}
.form .signup-link a{
  color: #3498hb;
  text-decoration: none;
}
.form .signup-link a:hover{
  text-decoration: underline;
}

</style>  </head>

<body>

    <div class="login-page">
        <div class="form">
            <form class="login-form "  method="post" >
                <h2>LOGIN YOUR ACCOUNT</h2>
                <input type="text" required placeholder="Username" id="userName" name="userName" autocomplete="off" onkeypress="return (event.charCode > 64 && event.charCode < 91)|| (event.charCode > 47 && event.charCode < 58) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)"/>
                <input oninput="return formvalid()" type="password" required placeholder="Password" id="password" name="password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter one special character(@,#,$,%,&,^,!,*,?), and at least 8 or more characters"/>
                <img src="https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png"
                    onclick="show()" id="showimg">
                <span id="vaild-pass"></span>
                <button type="submit" name="submit" id="submit" class="btn-btn-primary">Login</button>
                <p class="message"><a href="forgotpwd.php">Forgot your password?</a></p>
				<p class="signup-link"><a href="register.php">Signup now [Create New Account]</a></p>
            </form>
        </div>
    </div> 

    
<script>
//TODO : Its a Completed Code
function formvalid() {
  var vaildpass = document.getElementById("pass").value;

  if (vaildpass.length <= 8 || vaildpass.length >= 20) {
    document.getElementById("vaild-pass").innerHTML = "Minimum 8 characters";
    return false;
  } else {
    document.getElementById("vaild-pass").innerHTML = "";
  }
}
//Password hide and show
function show() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById("showimg").src =
      "https://static.thenounproject.com/png/777494-200.png";
  } else {
    x.type = "password";
    document.getElementById("showimg").src =
      "https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png";
  }
}
</script>
</body>
</html>
<?php
include("footer.php");
?>

<?php

$_SESSION['userName']=$data['userName'];
if(isset($_POST['submit']))
{
$userName = $_POST['userName'];
$password = $_POST['password'];

$sql= "SELECT * FROM `registration` WHERE userName = '$userName' AND password = '$password' ";

$rs=mysqli_query($conn,$sql);

  if(@mysqli_num_rows($rs) > 0)
  {
    $data =mysqli_fetch_array($rs);
    $uname=$data['userName'];

    $_SESSION['uid']=$data['id'];
    $_SESSION['user']=$uname;
$unm='Admin';
   if($uname == $unm)
{
    echo "<script>alert('admin login successfully')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
}
else // Corrected from else($uname != 'Admin')
{
    echo "<script>alert('user login successfully')</script>";
    echo "<script>window.location.href='home.php';</script>";
}
}
   else
   {
   echo "<script>alert('invalid username & password')</script>";
   echo "<script>window.location.href='login.php';</script>";
 }
 
 }
?>