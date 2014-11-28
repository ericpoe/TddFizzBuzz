<?php

use TddFizzBuzz\FizzBuzzBang;

class FizzBuzzBangTest extends \PHPUnit_Framework_TestCase
{
    private $fbb;

    public function setUp()
    {
        $this->fbb = new FizzBuzzBang();
    }

    public function testSevenIsBang()
    {
        $this->assertEquals('bang', $this->fbb->run(7));
    }

    public function testSevenPlusSevenIsBang()
    {
        $this->assertEquals('bang', $this->fbb->run(14));
    }

    public function testSevenTimesMultiplesOfThreeIsFizzBang()
    {
        $this->assertEquals('fizzbang', $this->fbb->run(21));
        $this->assertEquals('fizzbang', $this->fbb->run(42));
    }

    public function testSevenTimesMultiplesOfThreeAndFiveIsFizzBangBuzz()
    {
        $this->assertEquals('fizzbuzzbang', $this->fbb->run(105));
        $this->assertEquals('fizzbuzzbang', $this->fbb->run(210));
    }

    public function testMultiplesOfSevenSquaredAreBangBang()
    {
        $this->assertEquals('bangbang', $this->fbb->run(49));
        $this->assertEquals('bangbang', $this->fbb->run(98));
    }

    public function testMultiplesOfThreeAnd49AreFizzBangBang()
    {
        $this->assertEquals('fizzbangbang', $this->fbb->run(147));
        $this->assertEquals('fizzbangbang', $this->fbb->run(441));
    }

    public function testSevenToSeventhPowerHasSevenBangs()
    {
        $this->assertEquals('bangbangbangbangbangbangbang', $this->fbb->run(pow(7,7)));
    }
}
