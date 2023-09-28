<?php

namespace App\LeetCode;

class Ch485
{
    function findMaxConsecutiveOnes($nums)
    {
        $max = 0;
        $temp = 0;
        foreach ($nums as $num) {
            if ($num == 1) {
                $temp++;
                $max = $temp > $max ? $temp : $max;
            } else {
                $temp = 0;
            }
        }

        return $max;
    }
}
