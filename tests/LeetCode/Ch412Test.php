<?php

use App\LeetCode\Ch412;
use PHPUnit\Framework\TestCase;

class Ch412Test extends TestCase
{
    public function test_solution1_is_correct()
    {
        $object = new Ch412();
        $this->assertEquals(["1", "2", "Fizz"], $object->fizzBuzz1(3));
        $this->assertEquals(["1", "2", "Fizz", "4", "Buzz"], $object->fizzBuzz1(5));
        $this->assertEquals(["1", "2", "Fizz", "4", "Buzz", "Fizz", "7", "8", "Fizz", "Buzz", "11", "Fizz", "13", "14", "FizzBuzz"], $object->fizzBuzz1(15));
    }

    public function test_solution2_is_correct()
    {
        $object = new Ch412();
        $this->assertEquals(["1", "2", "Fizz"], $object->fizzBuzz2(3));
        $this->assertEquals(["1", "2", "Fizz", "4", "Buzz"], $object->fizzBuzz2(5));
        $this->assertEquals(["1", "2", "Fizz", "4", "Buzz", "Fizz", "7", "8", "Fizz", "Buzz", "11", "Fizz", "13", "14", "FizzBuzz"], $object->fizzBuzz2(15));
    }
}
