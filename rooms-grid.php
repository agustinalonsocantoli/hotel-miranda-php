<?php
include './config.php';
include './db/db.php';

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

echo $blade->run("rooms-grid", ["rooms" => $result->fetch_all(MYSQLI_ASSOC)]);