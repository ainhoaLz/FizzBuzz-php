<?php

namespace Deg540\CleanCodeKata9\Test;
use Deg540\CleanCodeKata9\FizzBuzzKata;
use PHPUnit\Framework\TestCase;
class FizzBuzzKataTest extends TestCase
{
    private FizzBuzzKata $fizzBuzz;
    protected function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzzKata();
    }
    /**
     * @test
     */
    public function multipleOfThreeReturnsFizz(): void
    {

        $result = $this->fizzBuzz->convert(3);

        $this->assertEquals('Fizz', $result);
        
    }
    /**
     * @test
     */
    public function multipleOfFiveReturnsBuzz(): void
    {

        $result = $this->fizzBuzz->convert(5);

        $this->assertEquals('Buzz', $result);

    }

    public function notMultipleOfThreeOrFiveReturnsNumber(): void
    {

        $result = $this->fizzBuzz->convert(1);

        $this->assertEquals(1, $result);
    }

    public function multipleOfThreeAndFiveReturnsFizzBuzz(): void
    {

        $result = $this->fizzBuzz->convert(30);

        $this->assertEquals('FizzBuzz', $result);

    }


}