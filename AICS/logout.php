<?php
session_start();
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['userid']);
unset($_SESSION['role']);

header('Location: login.php');
?>