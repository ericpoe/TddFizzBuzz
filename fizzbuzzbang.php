<?php
include('vendor/autoload.php');

use TddFizzBuzz\FizzBuzzBang;

$fizzer = new FizzBuzzBang();

foreach(range(1,5000) as $num) {
    $message = $fizzer->run($num);
    echo "$message ";
    if ('BangBangBangBang' === $message) {
        echo '!' . PHP_EOL;
        exit;
    }
}
