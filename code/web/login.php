<?php
$host = 'db';
$user = 'root';
$pass = 'mypass';
$database = 'akun';
 
$conn = mysqli_connect($host, $user, $pass, $database );
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}
?>