<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzzKata
{
    public function convert(int $number): string
    {
        if($this->isFizz($number) and $this->isBuzz($number)) {
            return 'FizzBuzz';
        }
        if($this->isBuzz($number)) {
            return 'Buzz';
        }
        if($this->isFizz($number)) {
            return 'Fizz';
        }
        return $number;
    }

    private function isFizz(int $number): bool
    {
        return $number % 3 === 0;
    }

    private function isBuzz(int $number): bool
    {
        return $number % 5 === 0;
    }


}