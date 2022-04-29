<?php
$db =mysqli_connect('localhost','root','','register');

session_start();

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
            <h1><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ?></h1>
            <hr>
            <h3>
                LRN: <?php echo $row['lrn'] ?>
            </h3>
            <h4>
                Sex: <?php echo $row['sex']?><br>
                Birthdate: <?php echo $row['birthdate']?><br>
                Place of Birth: <?php echo $row['birthplace']?><br>
                Nationality: <?php echo $row['nationality']?><br>
                Cellphone Number: <?php echo $row['cpnumber']?><br>
                Facebook Name: <?php echo $row['fbname']?><br>
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