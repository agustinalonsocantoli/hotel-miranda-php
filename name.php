<?php
require "vendor/autoload.php";

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$compiles = __DIR__ . '/compiles';
$blade = new BladeOne($views,$compiles, BladeOne::MODE_DEBUG);

echo $blade->run("name", array("variable1"=>"Hello PHP BladeOne"));

?>