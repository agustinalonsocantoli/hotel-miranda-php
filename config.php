<?php
require "vendor/autoload.php";

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$compiles = __DIR__ . '/compiles';
$blade = new BladeOne($views,$compiles, BladeOne::MODE_DEBUG);