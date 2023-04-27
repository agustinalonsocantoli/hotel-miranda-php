<?php
require "vendor/autoload.php";

DEFINE ('USER', 'root');
DEFINE ('PASSWORD', '09901525');
DEFINE ('URL', 'localhost');
DEFINE ('NAME', 'hotelmiranda');


$conn = new mysqli(URL, USER, PASSWORD, NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>