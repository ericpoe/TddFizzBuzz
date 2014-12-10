<?php
namespace TddFizzBuzz;

use TddFizzBuzz\FizzBuzz;

class FizzBuzzBang extends FizzBuzz
{
    protected $bangNum;
    protected $out;

    public function __construct($fizz = 3, $buzz = 5, $bang = 7)
    {
        parent::__construct($fizz, $buzz);
        $this->bangNum = $bang;
        $this->num = 0;
        $this->out = '';
    }

    public function run($num)
    {
        if (0 === $num) {
            return 0;
        }

        $this->setNum($num);

        $this->out = parent::run($num);

        if (!$this->isFizz() && !$this->isBuzz()) {
            $this->out = '';
        }

        $this->bangOut();

        if (!$this->out) {
            $this->out = $num;
        }

        return $this->out;
    }

    protected function bangOut()
    {
        $temp = $this->num;

        while ($this->isBang($temp)) {
            $this->out .= 'Bang';
            $temp /= $this->bangNum;
        }
    }

    protected function isBang($num)
    {
        return 0 === $num % $this->bangNum;
    }
}
