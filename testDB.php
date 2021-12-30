<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbName = "alphacrm";

$dbConnect = mysqli_connect($hostname, $username, $password);

$dbSelect = mysqli_select_db($dbConnect, $dbName);

if ($dbConnect) {
    echo "MySQL connected SUCCESSFUL<br><br>";

    if ($dbSelect) {
        echo "DB connection SUCCESSFUL<br><br>";
    } else {
        echo "DB connection FAILED<br><br>";
    }
}
else {
    echo "MySQL connection FAILED<br><br>";
}