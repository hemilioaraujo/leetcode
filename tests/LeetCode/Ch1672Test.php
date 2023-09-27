<?php

use App\LeetCode\Ch1672;
use PHPUnit\Framework\TestCase;

class Ch1672Test extends TestCase
{
    public function test_solution1_is_correct()
    {
        $object = new Ch1672();
        $this->assertEquals(6,$object->maximumWealth([[1,2,3],[3,2,1]]));
        $this->assertEquals(10,$object->maximumWealth([[1,5],[7,3],[3,5]]));
        $this->assertEquals(17,$object->maximumWealth([[2,8,7],[7,1,3],[1,9,5]]));
    }
}
