<?php
include('connectionDB.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'vendor/autoload.php'; // Ensure this path is correct
/*

$token = bin2hex(random_bytes(16)); // Generate a new token
$token_hash = hash("sha256", $token); // Hash the token for storage
$expiry = date("Y-m-d H:i:s", time() + 60 * 30); // Set expiration to 30 minutes

$sql = "UPDATE registration SET reset_token_hash = ?, reset_token_expires_at = ?, user_otp = ? WHERE email = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $token_hash, $expiry, $otp, $email);
$stmt->execute();
if ($mysqli->affected_rows) 
{
    // Log the token and OTP for debugging
    error_log("Generated Token: " . $token);
    error_log("Token Hash: " . $token_hash);
    error_log("Generated OTP: " . $otp);

    $mail = require __DIR__ . "/mailer.php"; // Get the mail object
	*/
  // Instantiate PHPMailer
  $email = $_POST["email"];
    $mail = new PHPMailer(true);
	try {
   
    // Uncomment for debugging
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // Server settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->SMTPAuth = true; // Enable SMTP authentication

    // SMTP configuration
    $mail->Host = "smtp.gmail.com"; // Set the SMTP server to send through
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to
    $mail->Username = "mjkalumnisite@gmail.com"; // Your Gmail address
    $mail->Password = "ljgy ipvi sudc pbwm"; // Use your app password

    // Recipients
    $mail->setFrom("mjkalumnisite@gmail.com", "MJK Alumni Site"); // Set sender's email and name
    $mail->addAddress($email); // Add a recipient

    // Email content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "Your requested reset PASSWORD Link"; // Email subject
    $mail->Body = forgetPassword($email);; // Email body with the OTP

    // Send the email
    if ($mail->send()) {
         echo '<script type ="text/JavaScript">';  
echo 'alert("Reset password link sent to your Email...")';  
echo '</script>';  
    } else {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$e->getMessage()}";
}

function forgetPassword($email) {
    global $conn; // Assuming $conn is your database connection
    $stmt = $conn->prepare("SELECT username FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc()['username'];
	//$otp = rand(100000, 999999); // Generate a random OTP
    $body = "Hi " . $user . ",<br><br>We got your request to reset password. <br>To Reset Your Password <a href='http://localhost:90/Alumni/resetpwd.php'>click here</a>.";
    return $body;
}
/*
} 
else {
    echo "No user found with that email.";
}*/
?>