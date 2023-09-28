<?php

use App\LeetCode\Ch485;
use PHPUnit\Framework\TestCase;

class Ch485Test extends TestCase
{
    public function test_solution_is_correct()
    {
        $object = new Ch485();

        $this->assertEquals(3, $object->findMaxConsecutiveOnes([1, 1, 0, 1, 1, 1]));
        $this->assertEquals(2, $object->findMaxConsecutiveOnes([1, 0, 1, 1, 0, 1]));
    }
}
