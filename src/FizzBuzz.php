<?php

namespace TddFizzBuzz;

class FizzBuzz
{
    protected $out;
    protected $num;

    /**
     * @param integer num
     * @return String
     */
    public function run($num)
    {
        $this->out = '';
        $this->num = $num;

        if ($this->isZero()) {
            return $this->num;
        }

        if ($this->isFizz()) {
            $this->out .= 'Fizz';
        }

        if ($this->isBuzz()) {
            $this->out .= 'Buzz';
        }

        if (!$this->isFizz() && !$this->isBuzz()) {
            $this->out = $this->num;
        }

        return $this->out;
    }

    /**
     * @return Boolean
     */
    protected function isZero()
    {
        return 0 === $this->num;
    }

    /**
     * @return Boolean
     */
    protected function isFizz()
    {
        return 0 === $this->num % 3;
    }

    /**
     * @return Boolean
     */
    protected function isBuzz()
    {
        return 0 === $this->num % 5;
    }
}
