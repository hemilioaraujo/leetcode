<?php

use App\LeetCode\AuxClasses\ListNode876;
use App\LeetCode\Ch876;
use PHPUnit\Framework\TestCase;

class Ch876Test extends TestCase
{
    public function test_solution_is_correct()
    {
        $object = new Ch876();

        $e = new ListNode876(5);
        $d = new ListNode876(4, $e);
        $c = new ListNode876(3, $d);
        $b = new ListNode876(2, $c);
        $a = new ListNode876(1, $b);

        $this->assertEquals($c, $object->middleNode($a));
    }

    public function test_solution_is_correct_with_two_middle_nodes()
    {
        $object = new Ch876();

        $f = new ListNode876(6);
        $e = new ListNode876(5, $f);
        $d = new ListNode876(4, $e);
        $c = new ListNode876(3, $d);
        $b = new ListNode876(2, $c);
        $a = new ListNode876(1, $b);

        $this->assertEquals($d, $object->middleNode($a));
    }
}
