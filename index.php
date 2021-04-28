<?php
$servername = "localhost";
$username = "root";
$password = "";
// You have to make a Database and Name it here.
$dbname = "register";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("There is an error -->" . mysqli_connect_error());
}

$name_1 = $_POST['1_name'];
$name_2 = $_POST['2_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$conpassword = $_POST['confirm_password'];


// Give Custom table Name.

$sql = "INSERT INTO `user_reg` (`name1`, `name2`, `email`, `pass`, `conpass`) VALUES ('$name_1', '$name_2', '$email', '$password', '$conpassword');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
