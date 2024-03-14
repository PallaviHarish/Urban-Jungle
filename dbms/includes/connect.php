<?php
$db_username = "root";
$db_hostname = "localhost";
$db_password = "";
$db_name = "mystore";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);;

try {
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    // echo ("Connection successful");
} catch (mysqli_sql_exception) {
    echo "Could not connect to database!";
}
