<?php

use App\LeetCode\Ch1480;
use PHPUnit\Framework\TestCase;

class Ch1480Test extends TestCase
{
    public function test_solution1_is_correct()
    {
        $object = new Ch1480();
        $this->assertEquals([1, 3, 6, 10], $object->solution1([1, 2, 3, 4]));
        $this->assertEquals([1, 2, 3, 4, 5], $object->solution1([1, 1, 1, 1, 1]));
        $this->assertEquals([3, 4, 6, 16, 17], $object->solution1([3, 1, 2, 10, 1]));
    }

    public function test_solution2_is_correct()
    {
        $object = new Ch1480();
        $this->assertEquals([1, 3, 6, 10], $object->solution2([1, 2, 3, 4]));
        $this->assertEquals([1, 2, 3, 4, 5], $object->solution2([1, 1, 1, 1, 1]));
        $this->assertEquals([3, 4, 6, 16, 17], $object->solution2([3, 1, 2, 10, 1]));
    }
}
