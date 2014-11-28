<?php

use TddFizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    private $fb;

    public function setUp()
    {
        $this->fb = new FizzBuzz();
    }

    public function test0is0()
    {
        $this->assertEquals('0', $this->fb->run(0));
    }

    public function testMultiplesOf3AreFizz()
    {
        $this->assertEquals('fizz', $this->fb->run(3));
        $this->assertEquals('fizz', $this->fb->run(27));
    }

    public function testMultiplesOf5AreBuzz()
    {
        $this->assertEquals('buzz', $this->fb->run(5));
        $this->assertEquals('buzz', $this->fb->run(25));
    }

    public function testMultiplesOf3And5AreFizzBuzz()
    {
        $this->assertEquals('fizzbuzz', $this->fb->run(15));
        $this->assertEquals('fizzbuzz', $this->fb->run(45));
    }

    public function testNeitherFizzNorBuzzIsNum()
    {
        $this->assertEquals(4, $this->fb->run(4));
        $this->assertEquals(398, $this->fb->run(398));
    }
}
