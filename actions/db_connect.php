<?php 

$localhost = "127.0.0.1";
$username = "root";
$password = "";
// local $password = "root";
$dbname = "BE17_CR4_Amina Brakmic_BigLibrary";

// create connection
$link = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
// }else {
//     echo "Connected successfully";
}