<?php

use App\LeetCode\Ch1295;
use PHPUnit\Framework\TestCase;

class Ch1295Test extends TestCase
{
    public function test_solution1_is_correct()
    {
        $object = new Ch1295();
        $this->assertEquals(2, $object->findNumbers1([12, 345, 2, 6, 7896]));
        $this->assertEquals(1, $object->findNumbers1([555, 901, 482, 1771]));
    }

    public function test_solution2_is_correct()
    {
        $object = new Ch1295();
        $this->assertEquals(2, $object->findNumbers2([12, 345, 2, 6, 7896]));
        $this->assertEquals(1, $object->findNumbers2([555, 901, 482, 1771]));
    }
}
