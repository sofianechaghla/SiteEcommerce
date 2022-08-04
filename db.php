<?php

require "config/constants.php";

$servername = HOST;
$username = USER;
$password = PASSWORD;
$db = DATABASE_NAME;


$con = mysqli_connect('localhost', 'root', 'root','admin');


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>