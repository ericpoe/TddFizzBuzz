<?php

use TddFizzBuzz\FizzBuzzBang;

class FizzBuzzBangTest extends \PHPUnit_Framework_TestCase
{
    private $fbb;

    public function setUp()
    {
        $this->fbb = new FizzBuzzBang();
    }

    /**
     * @dataProvider FizzIs3sBuzzIs5sBangIs7sProvider
     */
    public function test7sAreBangWhen3sAreFizzAnd5sAreBuzz($expected, $provided)
    {
        $this->assertEquals($expected, $this->fbb->run($provided));
    }

    public function FizzIs3sBuzzIs5sBangIs7sProvider()
    {
        return [
            'Basic Bang' => ['Bang', 7],
            'Huge Bang' => ['Bang', 7 * pow(2,20)],
            'Basic FizzBang' => ['FizzBang', 7*3],
            'Huge FizzBang' => ['FizzBang', 7*3 * pow(2,20)],
            'Basic BuzzBang' => ['BuzzBang', 7*5],
            'Huge BuzzBang' => ['BuzzBang', 7*5 * pow(2,20)],
            'Basic FizzBuzzBang' => ['FizzBuzzBang', 7*5*3],
            'Huge FizzBuzzBang' => ['FizzBuzzBang', 7*5*3 * pow(2,20)],
            'Basic BangBang' => ['BangBang', 7*7],
            'Huge BangBang' => ['BangBang', 7*7 * pow(2,20)],
            'Basic FizzBangBang' => ['FizzBangBang', 7*7*3],
            'Huge FizzBangBang' => ['FizzBangBang', 7*7*3 * pow(2,20)],
            'Basic BangBangBangBangBangBangBang' => ['BangBangBangBangBangBangBang', pow(7,7)]
        ];
    }
}
