<?php
$db =mysqli_connect('localhost','root','','register');

session_start();
error_reporting(0);

$userid = $_SESSION['userid'];

$select = "SELECT * FROM form
            INNER JOIN regacc
            ON form.regacc_fk = regacc.id
            WHERE $userid = form.regacc_fk";

$con = mysqli_query($db,$select);

if(mysqli_num_rows($con) > 0){

    $row = mysqli_fetch_array($con);
   
 }else{
     $error[] = '<script>alert("wrong")</script>';
 }



?>

<!DOCTYPE html>
<html>
    <head>
        <title> AICS - Profile </title>
        <link rel = "icon" href = "Pictures/logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="profile-style.css">
    </head>
<body>
    <div class="container">
   
        <div id="head-line">
            <img id="logo" src="Pictures/logo.png">
        <div id="aics">
            <span>Asian Institute of Computer Studies</span>
        </div>
    </div>
 
    <div class="header">
        <img class="header-bar" src="Pictures/header footer.png">
    </div>

    <div class="info">
        <p>
        <center>
            <h1><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ?></h1></center>
            <hr>
            <h3>
                LRN: <span style = color:#fab830;><?php echo $row['lrn'] ?></span>
            </h3>
            <h4>
                Sex: <span style = color:#fab830;><?php echo $row['sex']?></span><br>
                Birthdate: <span style = color:#fab830;><?php echo $row['birthdate']?></span><br>
                Place of Birth: <span style = color:#fab830;><?php echo $row['birthplace']?></span><br>
                Nationality: <span style = color:#fab830;><?php echo $row['nationality']?></span><br>
                Cellphone Number: <span style = color:#fab830;><?php echo $row['cpnumber']?></span><br>
                Facebook Name: <span style = color:#fab830;><?php echo $row['fbname']?></span><br>
            </h4>
            
        </p>
    </div>
 
    <img id="footer" src="Pictures/header footer.png">
    <div id="inquiries">
        <span><p>For inquiries and concerns email us at <b>aics_montalban@aics.edu.ph</b></p></span>
    </div>
    
    </div>
</body>
</html>