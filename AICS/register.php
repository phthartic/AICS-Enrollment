<?php 

$db = mysqli_connect('localhost','root','','register');



if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $insertng = "SELECT * FROM  regacc WHERE email ='$email' && password = '$password'";
$result =  mysqli_query($db,$insertng);



if(mysqli_num_rows($result) > 0){

    $error[] = 'User Already Exist!';

 }else{

    if($password != $cpassword){
       $error[] = 'password not matched!';
    }else{
       $insert = "INSERT INTO regacc(email,`password`, `role`) VALUES('$email','$password', 'enrollee')";
       mysqli_query($db, $insert);
       header('location:registered.html');
       
    }
 }

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> AICS - Register Page </title>
        <link rel = "icon" href = "Pictures/logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="register-style.css">
    </head>


    <body>
        <div class="register-container">
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
        </div>
        <div class="login-button">
            <form action="" method="post">
                <div class="email">
                <input type="email" placeholder="Email Address" name="email" required>
                </div>
                <div class="password">
                <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="cpassword">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
                </div>
            <button type="submit" name="submit">Register</button>
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