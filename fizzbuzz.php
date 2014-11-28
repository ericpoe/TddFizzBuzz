<?php
include('vendor/autoload.php');

use TddFizzBuzz\FizzBuzz;

$fizzer = new FizzBuzz();

foreach(range(1,200) as $num) {
    echo "{$fizzer->run($num)} ";
}

echo PHP_EOL;
