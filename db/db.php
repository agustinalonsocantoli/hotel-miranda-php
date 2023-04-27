<?php
DEFINE ('USER', 'root');
DEFINE ('PASSWORD', '09901525');
DEFINE ('URL', 'localhost');
DEFINE ('NAME', 'hotelmiranda');

function getStart() {
    $connections = mysqli_connect (URL, USER, PASSWORD, NAME);
    
    if (!$connections) {
        trigger_error ('Could not connect to MySQL: ' . mysqli_connect_error() );
    } else {
        return $connections;
    }
} 
?>