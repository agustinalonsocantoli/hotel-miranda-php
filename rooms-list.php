<?php
include './config.php';
include './getData.php';

echo $blade->run("rooms-list", ["roomsList" => getData()]);