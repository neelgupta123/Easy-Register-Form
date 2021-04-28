<?php
$sn = "localhost";
$un = "root";
$pw = "";
// You have to make a Database and Name it here.
$db = "register";

$conn = mysqli_connect($sn, $un, $pw, $db);

if(!$conn){
    echo("There is an error -->". mysqli_connect_error());
}

$name_1 = $_POST['1_name'];
$name_2 = $_POST['2_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$conpassword = $_POST['confirm_password'];

// Give Custom table Name.

$sql = "INSERT INTO `user_reg` (`name1`, `name2`, `email`, `pass`, `conpass`) VALUES ('$name_1', '$name_2', '$email', '$password', '$conpassword');";
