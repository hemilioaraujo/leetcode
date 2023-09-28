<?php

use App\LeetCode\Ch383;
use PHPUnit\Framework\TestCase;

class Ch383Test extends TestCase
{
    public function test_solution1_is_correct()
    {
        $object = new Ch383();

        $this->assertFalse($object->canConstruct1("a", "b"));
        $this->assertFalse($object->canConstruct1("aa", "ab"));
        $this->assertTrue($object->canConstruct1("aa", "aab"));
    }

    public function test_solution2_is_correct()
    {
        $object = new Ch383();

        $this->assertFalse($object->canConstruct2("a", "b"));
        $this->assertFalse($object->canConstruct2("aa", "ab"));
        $this->assertTrue($object->canConstruct2("aa", "aab"));
    }
}
