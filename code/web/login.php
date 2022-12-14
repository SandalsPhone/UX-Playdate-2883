<?php
$host = 'db';
$user = 'root';
$pass = 'mypass';
$database = 'akun';
 
$conn = mysqli_connect($host, $user, $pass, $database );
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `akun`";
$qr = mysqli_query($conn, $query);
$email_array = array();
$password_array = array();
$first_name_array = array();
$last_name_array = array();
$birth_date_array = array();
$gender_array = array();
$address_array = array();
$phone_number_array = array();

while($row = mysqli_fetch_array($qr)){
    $email_array[] = $row['email_akun'];
    $password_array[] = $row['password_akun'];
    $first_name_array[] = $row['first_name_akun'];
    $last_name_array[] = $row['last_name_akun'];
    $birth_date_array[] = $row['birth_date'];
    $gender_array[] = $row['gender_akun'];
    $address_array[] = $row['address_akun'];
    $phone_number_array[] = $row['no_hp_akun'];
}

for($i = 0; $i < count($email_array); $i++){
    if(((strcmp($email, $email_array[$i])) == 0) && ((strcmp($password, $password_array[$i])) == 0)){
        session_start();
        $_SESSION["is_login"] = true;
        $_SESSION["first_name"] = $first_name_array[$i];
        $_SESSION['last_name'] = $last_name_array[$i];
        $_SESSION['birth_date'] = $birth_date_array[$i];
        $_SESSION['gender'] = $gender_array[$i];
        $_SESSION['phone_number'] = $phone_number_array[$i];
        $_SESSION['email'] = $email_array[$i];
        $_SESSION['address'] = $address_array[$i];
        
        header('Location: myprofile_page.php');
        exit();
    }
}
header('Location: login_page.html');
exit();
?>