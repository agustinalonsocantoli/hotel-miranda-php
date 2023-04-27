<?php
include './config.php';
include './getData.php';

echo $blade->run("rooms-grid", ["rooms" => getData()]);