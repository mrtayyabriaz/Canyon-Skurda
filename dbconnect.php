<?php
$host = "localhost";
// $host = "";
$username = "root";
// $username = "";
$password = "";
// $password = "";
$database = "canyon_skura";
// $database = "";
$link = mysqli_connect($host, $username, $password, $database);
if ($link->connect_errno) {
    // echo "database connection error";
    die(mysqli_connect_error());
    // exit();
}
// else{
//     echo "connection success";
// }
