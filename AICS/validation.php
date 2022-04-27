<?php

session_start();

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'register');

$name = $_POST['email'];
$name = $_POST['password'];
$name = $_POST['cpassword'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo"Username Already Taken";
} else {
    $reg = " insert into usertable (email, password, cpassword) values ('$name')";
    mysqli_query($con, $reg);
    echo" Registration Succesful";
}

?>