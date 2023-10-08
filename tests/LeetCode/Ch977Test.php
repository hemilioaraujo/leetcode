<?php

use App\LeetCode\Ch977;
use PHPUnit\Framework\TestCase;

class Ch977Test extends TestCase
{
    private Ch977 $object;

    protected function setUp(): void
    {
        parent::setUp();
        $this->object = new Ch977();
    }

    public function test_solution1_is_correct()
    {
        $this->assertEquals([0, 1, 9, 16, 100], $this->object->sortedSquares1([-4, -1, 0, 3, 10]));
        $this->assertEquals([4, 9, 9, 49, 121], $this->object->sortedSquares1([-7, -3, 2, 3, 11]));
    }

    public function test_solution2_is_correct()
    {
        $this->assertEquals([0, 1, 9, 16, 100], $this->object->sortedSquares2([-4, -1, 0, 3, 10]));
        $this->assertEquals([4, 9, 9, 49, 121], $this->object->sortedSquares2([-7, -3, 2, 3, 11]));
    }
    function test_return_square_value()
    {
        $this->assertEquals(4, $this->object->square(2));
        $this->assertEquals(9, $this->object->square(-3));
    }
}
