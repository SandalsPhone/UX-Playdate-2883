<?php
$host = 'db';
$user = 'root';
$pass = 'mypass';
$database = 'akun';
 
$conn = mysqli_connect($host, $user, $pass, $database );
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];
$password_retype = $_POST['password_retype'];
$phone_number = $_POST['phone_number'];

//check if both password and password_retype are the same
if($password != $password_retype){
    header('Location: sign_up_page.html');
    exit();
}
else if($phone_number < 7 || $phone_number > 13) {
    header('Location: sign_up_page.html');
    exit();
}
//validate phone number
//on hold, current database is wrong