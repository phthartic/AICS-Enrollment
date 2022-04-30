<?php
session_start();
error_reporting(0)

?>

<!DOCTYPE html>
<html>
    <head>
        <title> AICS - Homepage </title>
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
        <div class="header-text">Hello, <?php echo $_SESSION['email'] ?>!</div>
        <!--<div class="">User ID = <?php //echo $_SESSION['userid'] ?></div>-->
    </div>
    <div class="pages">
        <div class="left-pages">
            <a href="profile.php"><button>Profile</button></a>
            <a href="finalize-application.html"><button>Finalize Application</button></a>
        </div>
        <div class="right-pages">
            <a href="application-form.php"><button>Application Form</button></a>
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