<?php
include('vendor/autoload.php');

use TddFizzBuzz\FizzBuzzBang;

$fizzer = new FizzBuzzBang();

foreach(range(1,5000) as $num) {
    $message = $fizzer->run($num);
    if ('BangBangBang' === $message) {
        echo "{$message}!" . PHP_EOL;
        exit;
    }
    echo "$message ";
}
