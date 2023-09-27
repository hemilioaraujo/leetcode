<?php

use App\LeetCode\Ch1342;
use PHPUnit\Framework\TestCase;

class Ch1342Test extends TestCase
{
    public function test_solution1_is_correct()
    {
        $object = new Ch1342();
        $this->assertEquals(6, $object->numberOfSteps1(14));
        $this->assertEquals(4, $object->numberOfSteps1(8));
        $this->assertEquals(12, $object->numberOfSteps1(123));
    }
}
