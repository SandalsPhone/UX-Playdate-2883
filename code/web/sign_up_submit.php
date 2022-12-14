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

$query = "SELECT `email_akun` FROM `akun`";
$qr = mysqli_query($conn, $query);
$email_array = array();

while($row = mysqli_fetch_array($qr)){
     $email_array[] = $row['email_akun'];
}

$email_array_size = count($email_array);
//calculate phone number int length, used https://stackoverflow.com/questions/28433798/php-get-length-of-digits-in-a-number as ref
if($phone_number !== 0){
    $phone_number_length = strlen((string)$phone_number);
}
else{
    $phone_number_length = 1;
}

//check if all inpputs are filled
if(empty($first_name)
    || empty($last_name)
    || empty($gender)
    || empty($email)
    || empty($address)
    || empty($password)
    || empty($password_retype)
    || empty($phone_number)
    || $birth_date == ''
){
    header('Location: signup_page.html');
    exit();
}
//check if name is valid
else if(!(ctype_alpha($first_name)) || !(ctype_alpha($last_name))){
    header('Location: sign_up_page.html');
    exit();
}
//check if both password and password_retype are the same
else if($password != $password_retype){
    header('Location: sign_up_page.html');
    exit();
}
//check if phone number is valid
else if($phone_number_length < 7 || $phone_number_length > 13) {
    header('Location: sign_up_page.html');
    exit();
}
//check if email address is valid
else if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
    header('Location: sign_up_page.html');
    exit();
}
else{
    //check if email is already in database
    for($i = 0; $i < count($email_array); $i++){
        if((strcmp($email, $email_array[$i])) == 0){
            header('Location: sign_up_page.html');
            exit();
        }
    }
    
    //insert details into db
    //WARNING: THIS HAS NO SECURITY AT ALL, 100% VUNERABLE TO SQL INJECTION
    $query = "INSERT INTO `akun` (`first_name_akun`, `last_name_akun`, `email_akun`, `address_akun`, `no_hp_akun`, `password_akun`, `gender_akun`, `birth_date`) VALUES ('$first_name' ,'$last_name', '$email', '$address', '$phone_number', '$password', '$gender', '$birth_date')";
    $qr = mysqli_query($conn, $query);
    header('Location: landing_page.php');
    exit();
}