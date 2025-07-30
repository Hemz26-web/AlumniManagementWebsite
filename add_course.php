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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <style>
        /*Login Box*/
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: linear-gradient(#4682B4,#87CEEB);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
            margin-top: 0px;
            margin-bottom: 20px;
        }
        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        .login-box .user-box {
            position: relative;
        }
        .login-box .user-box input,
        .login-box .user-box textarea {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }
        .login-box .btn input {
            background-color: #4682B4;
            color: white;
            border: 0;
            outline: none;
            border-radius: 50px;
            height: 40px;
            width: 50%;
            font-size: 20px;
            cursor: pointer;
        }
    </style>  
</head>
<body>
<div class="back">
<a href="courses.php">
<h3>< Back</h3></a></div>
    <div class="login-box">
        <h2>Add Course</h2>
        <form action="addcourse.php" method="post">
            <div class="user-box">
                <input type="text" name="course_title" required="">
                <label>Course Title</label>
            </div>
            <div class="user-box">
                <input type="text" name="course_desc" required="">
                <label>Course Description</label>
            </div>
            <div class="user-box">
                <input type="text" name="course_duration" required="">
                <label>Course Duration</label>
            </div>
            <div class="user-box">
                <input type="text" name="course_eligibility" required="">
                <label>Course Eligibility</label>
            </div>
            <div class="user-box">
                <input type="text" name="course_fees" required="">
                <label>Course Fees</label>
            </div>
            <div class="btn">
                <input type="submit" name="submit" value="Upload" required="">
            </div>
        </form>
    </div>
</body>
</html>
