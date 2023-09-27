<?php

namespace App\LeetCode;

class Ch876
{
    function middleNode($head)
    {
        $slow = $head;
        $fast = $head;

        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        return $slow;
    }
}
