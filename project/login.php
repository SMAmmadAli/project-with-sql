<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="app.js"></script>
    <title>Login|Ammad</title>
</head>
<body>

<div class="top">
    <a href="index.php">
    <img class="img1" src="picture/logout.png" alt="">
    </a>
    <a href="https://www.google.com">
    <img class="img2" src="picture/cancelicon.png" alt=""></a>
      <h1>Log In</h1>
</br>
    <p>Don't have an account? <a href="sign_up.php"> Sign Up </a></p>
</div>  


<form action=""  method="post">   
    <div class="wrapper">
        
        <div class="input-data">
            <input type="text" required name="email">
            <div class="underline"></div>
            <label>Email</label>
        </div>
    </br>
    </br>
        <div class="input-data">
            <input type="password" required name="password">
            <div class="underline"></div>
            <label>Password</label>
            <span>
                <i class="fa fa-eye" onclick="togglePW()" aria-hidden="true" id="font"></i>
            </span>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="true" value="True">
            <label for="checkbox">Remember Me</label>
            <span>Forget Password or Email?</span>
        </div>
        <div class="button">
            <input type="submit" class="submit-btn" name="lgn" value="Log In">
        </div>
        <div class="line"></div>
        <div class="or">OR</div>

        <div class="right-side">
            <span class="right-title">Sign up with <br> Social Network </span>
            <button class="facebook"> <img src="" alt=""> Login with facebook</button>
            <button class="google"><img src="" alt="">Login with Google</button>
            <button class="twitter"><img src="" alt="">Login with Twitter</button>
        </div>

    </div>
</form>

<?php
require_once('connection.php');
session_start();

    if(isset($_POST['lgn'])){
        $t = $_POST["true"];
        $ue = $_POST['email'];
        $up = $_POST['password'];

        if($t == "True"){

            $query = "SELECT * FROM users Where user_cemail = '$ue' and user_cpassword ='$up'";
            $select_data = mysqli_query($con,$query);

            if($row = mysqli_fetch_array($select_data)){
                $_SESSION['user']=$ue;
                    header('location:index.php');
            }
            else{
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Wrong Details')
                    window.location.href='login.php';
                    </SCRIPT>");
            }
        }
        else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Please Click to Remember Me ...')
                    window.location.href='login.php';
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