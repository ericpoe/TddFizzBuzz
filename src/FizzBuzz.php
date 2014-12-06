<?php

namespace TddFizzBuzz;

class FizzBuzz
{
    protected $fizzNum, $buzzNum;

    protected $num;

    public function __construct($fizz = 3, $buzz = 5)
    {
        $this->fizzNum = $fizz;
        $this->buzzNum = $buzz;
        $this->num = 0;
    }

    /**
     * @param integer num
     * @return String
     */
    public function run($num)
    {
        if (0 === $num) {
            return 0;
        }

        $this->setNum($num);
        $out = '';

        if ($this->isFizz()) {
            $out .= 'Fizz';
        }

        if ($this->isBuzz()) {
            $out .= 'Buzz';
        }

        if (!$out) {
            $out = $this->getNum();
        }

        return $out;
    }

    public function setNum($num)
    {
        $this->num = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    /**
     * @return Boolean
     */
    protected function isFizz()
    {
        return 0 === $this->num % $this->fizzNum;
    }

    /**
     * @return Boolean
     */
    protected function isBuzz()
    {
        return 0 === $this->num % $this->buzzNum;
    }
}
