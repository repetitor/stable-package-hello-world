<?php

require '../vendor/autoload.php';

use HelloWorld\Hello;

try {
    echo Hello::world() . PHP_EOL;
} catch (Exception $e){
    return $e;
}
