<!DOCTYPE html>
<html ln="en">
<head>
<title>OTP</title>
<style>

.login-page {
    height: 90vh;
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
  height: 200px;
  background-color: #ffffff;
  padding:40px;
  box-shadow: 0 20px 20px rgba(0, 0, 0, .2);
  margin-top:0px;
}
.form input {
    outline: 0;
    background: #f2f2f2;
    border-radius: 4px;
    width: 20px;
    border: 0;
    margin: 15px 0;
    padding: 15px;
    font-size: 14px;
	margin-left:20px;
}

.form input:focus {
    box-shadow: 0 0 5px 0 rgba(106, 98, 210);
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

</style>
</head>
<body>
 <div class="login-page">
        <div class="form">
            <form class="login-form " action="#" method="post" >
                <h1 align="center">OTP sent to your E-mail</h1>
                <input type="text" required placeholder="" maxlength="1" id="otp" name="otp" autocomplete="off" onkeypress="return (event.charCode > 47 && event.charCode < 58)"/> 
                <input type="text" required placeholder="" maxlength="1" id="otp" name="otp" autocomplete="off" onkeypress="return (event.charCode > 47 && event.charCode < 58)"/> 
                <input type="text" required placeholder="" maxlength="1" id="otp" name="otp" autocomplete="off" onkeypress="return (event.charCode > 47 && event.charCode < 58)"/> 
                <input type="text" required placeholder="" maxlength="1" id="otp" name="otp" autocomplete="off" onkeypress="return (event.charCode > 47 && event.charCode < 58)"/> 
                <input type="text" required placeholder="" maxlength="1" id="otp" name="otp" autocomplete="off" onkeypress="return (event.charCode > 47 && event.charCode < 58)"/> 
                <input type="text" required placeholder="" maxlength="1" id="otp" name="otp" autocomplete="off" onkeypress="return (event.charCode > 47 && event.charCode < 58)"/> 

		 <button type="submit" class="btn-btn-primary">Validate</button>
             
            </form>
        </div>
    </div> 
	
</body>
<script>

</script>
</html>