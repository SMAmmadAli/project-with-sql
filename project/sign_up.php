<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Sign Up|Ammad</title>

</head>
<body>
<div class="top">
    <a href="login.php">
    <img class="img1" src="picture/logout.png" alt="">
    </a>
    <a href="https://www.google.com">
    <img class="img2" src="picture/cancelicon.png" alt=""></a>
      <h1>Sign Up</h1>
</br>
    <p>Already have an account? <a href="login.php"> Log In </a></p>
</div>


<form action="" method="post" enctype="multipart/form-data">   
    <div class="wrapper1">    
        <div class="input-data">
            <input type="text" required name="email">
            <div class="underline"></div>
            <label>Email</label>
        </div>
    </br>
        <div class="input-data">
        <input type="text" required name="cemail">
        <div class="underline"></div>
        <label>Type your email again</label>
    </div>
    </br>
        <div class="input-data">
            <input type="password" required name="password">
            <div class="underline"></div>
            <label>Password</label>
        </div>
    </br>
        <div class="input-data">
        <input type="password" required name="cpassword">
        <div class="underline"></div>
        <label>Type your password again</label>
        </div>
        <div class="button">
            <input type="submit" name="reg" class="submit-btn" id="myBtn" value="Sign Up">
        </div>
        <div class="line1"></div>
        <div class="or1">OR</div>

        <div class="right-side1">
            <span class="right-title">Sign up with <br> Social Network </span>
            <button class="facebook1"> <img src="" alt=""> Login with facebook</button>
            <button class="google1"><img src="" alt="">Login with Google</button>
            <button class="twitter1"><img src="" alt="">Login with Twitter</button>
        </div>
    </div>
</form>

<?php 
    require_once('connection.php');
    if(isset($_POST['reg']))
    {
        $email = $_POST["email"];
        $cemail = $_POST["cemail"];
        $pass = $_POST["password"];
        $cpass = $_POST["cpassword"];

        if($email == $cemail){
            if($pass == $cpass){
                $query = "INSERT INTO users (user_email, user_password, user_cemail, user_cpassword) VALUES ('".$email."','".$pass."','".$cemail."','".$cpass."')";
                $data = mysqli_query($con,$query); 
                
                if($data){
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Successfully Register Your Account')
                    window.location.href='login.php';
                    </SCRIPT>");
                }
            }
            else{
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Password Not Same')
                window.location.href='sign_up.php';
                </SCRIPT>");
            }
        }
        else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Email Not Same')
            window.location.href='sign_up.php';
            </SCRIPT>");
        }
    }
?>


<div class="para">
    <span>* By signing up, you agree to our 
       <a href="Terms to use.html"> Terms of Use </a> and to
    </br>
    receive Ammad email & updated and acknowledge that 
    <p class="para1">
    you read out 
    <a href="#"> Privacy Policy.</a>
    </p>
    </span>
</div>

</body>
</html>

