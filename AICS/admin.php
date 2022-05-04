<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['role'])){
   header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> AICS - Admin Page </title>
        <link rel = "icon" href = "Pictures/logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="homepage-style.css">
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
        <div class="header-text">Hello, <?php echo $_SESSION['role'] ?>!</div>
        <!--<div class="">User ID = <?php //echo $_SESSION['userid'] ?></div>-->
    </div>
    <div class="pages">
        <div class="left-pages">
            <a href="admin-profile.html"><button>Profile</button></a>
            <a href="users.php"><button>Users</button></a>
        </div>
        <div class="right-pages">
            <a href="user-forms.php"><button>Forms</button></a>
            <a href="logout.php"><button>Sign Out</button></a>
        </div>
    </div>
    <img id="footer" src="Pictures/header footer.png">
    <div id="inquiries">
        <span><p>For inquiries and concerns email us at <b>aics_montalban@aics.edu.ph</b></p></span>
    </div>
    </div>
</body>
</html>