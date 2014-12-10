<?php

namespace TddFizzBuzzTest\FizzBuzz;

use TddFizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    private $fb;
    private $bf;

    public function setUp()
    {
        $this->fb = new FizzBuzz();
        $this->bf = new FizzBuzz(5, 3);
    }

    /**
     * @dataProvider FizzIs3sBuzzIs5sProvider
     */
    public function test3sAreFizz5sAreBuzz($expected, $provided)
    {
        $this->assertEquals($expected, $this->fb->run($provided));
    }
    /**
     * @dataProvider FizzIs5sBuzzIs3sProvider
     */
    public function test5sAreFizz3sAreBuzz($expected, $provided)
    {
        $this->assertEquals($expected, $this->bf->run($provided));
    }

    public function fizzIs3sBuzzIs5sProvider()
    {
        return [
            'Basic Fizz' => ['Fizz', 3],
            'Huge Fizz' => ['Fizz', 3 * pow(2, 20)],
            'Basic Buzz' => ['Buzz', 5],
            'Huge Buzz' => ['Buzz', 5 * pow(2, 20)],
            'Basic FizzBuzz' => ['FizzBuzz', 3*5],
            'Huge FizzBuzz' => ['FizzBuzz', 3*5 * pow(2, 20)],
            'Zero should be zero' => ['0', 0],
            'One should be a number' => ['1', 1],
            'Seven should be a number' => ['7', 7],
            'A huge prime should be a number' => ['5927', 5927]
        ];
    }

    public function fizzIs5sBuzzIs3sProvider()
    {
        return [
            'Huge Fizz' => ['Fizz', 5 * pow(2, 20)],
            'Huge Buzz' => ['Buzz', 3 * pow(2, 20)],
            'Huge FizzBuzz' => ['FizzBuzz', 3*5 * pow(2, 20)]
        ];
    }
}
