<?php 
session_start();
@include 'config.php';

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM regacc WHERE email = '$email' AND `password` = '$password'";

    $con = mysqli_query($db,$select);

    $row = mysqli_fetch_array($con);

    if($row['role'] == 'admin'){ // This will route the page to admin side
        
        $_SESSION['email'] = $row['email'];
        $_SESSION['userid'] = $row['id'];
        $_SESSION['role'] = 'admin';
        header('location: admin.php');
    
    } else if ($row['role'] == 'enrollee'){ // This will route the page to enrollee

        $_SESSION['email'] = $row['email'];
        $_SESSION['userid'] = $row['id'];
        $_SESSION['role'] = 'enrollee';
        header('location: homepage.php');

    }else {
        $error[] = '<script>alert("wrong")</script>';
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> AICS - Login Page </title>
        <link rel = "icon" href = "Pictures/logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="login-style.css">
    </head>
    <body>
        <div class="login-container">
            <img id="bg" src="Pictures/bg.jpg">
            <img id="yellow" src="Pictures/yellow.jpg">
            <div id="text">
                <h1>Welcome!</h1>
                <h3>Interested upcoming senior high school enrollees may use<br>this online service to process their enrollment 
                    forms and requirements<br>for AICS Montalban branch.</h3>
                    <br>
                    <br>
                <h5>Sign in if you already have an account or register to create one.</h5>
                <h6>For more information, visit <a href="https://www.facebook.com/AICSMontalbanOfficial">@AICSMontalbanOfficial</a> on Facebook.</h6>
            </div>
        </div>
        <div class="logo">
            <img id="aics-logo" src="Pictures/logo.png">
            <p>AICS iEnroll 1.0</p>
            <h5>No account yet? <a class="register" href="register.php">Register here</a></h5>
            <h6>Forgot password?</h6>
        </div>
        <div class="login-button">
            <form action="" method="post">
            <div class="email">
                <input type="email" placeholder="Email Address" name="email" required>
            </div>
            <div class="password">
                <input type="password" placeholder="Password" name="password" required>
            </div>
         <button type="submit" name="submit">Sign In</button>
                </form>
        </div>
        <div class="tos">
            <h3>By using this service, you understand and<br>
                agree to the AICS Online Services<br>
                <a href="">Terms of Services</a> and <a href="">Privacy Statement</a></h3>
                <br>
                <h4>
                    For inquiries and concerns email<br>us at aics_montalban@aics.edu.ph
                </h4>
        </div>
    </body>
    </html>