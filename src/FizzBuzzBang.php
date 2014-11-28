<?php
namespace TddFizzBuzz;

use TddFizzBuzz\FizzBuzz;

class FizzBuzzBang extends FizzBuzz
{
    public function run($num)
    {
        $this->out = parent::run($num);

        if (!$this->isFizz() && !$this->isBuzz()) {
            $this->out = '';
        }

        $this->bangOut();

        if (!$this->isFizz() && !$this->isBuzz() && !$this->isBang()) {
            $this->out = $num;
        }

        return $this->out;
    }

    protected function isBang($num = null)
    {
        // If $num is not explicitly provided, grab the implicit $num
        if (is_null($num)) {
            $num = $this->num;
        }

        return 0 === $num % 7;
    }

    protected function bangOut()
    {
        $temp = $this->num;
        while($this->isBang($temp)) {
            $this->out .= 'Bang';
            $temp /= 7;
        }
    }
}
