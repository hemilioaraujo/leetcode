<?php

namespace App\LeetCode;

class Ch1342
{
    function numberOfSteps1($num)
    {
        $steps = 0;

        while ($num > 0) {
            if ($num % 2 == 0) {
                $num = $num / 2;
            } else {
                $num--;
            }

            $steps++;
        }

        return $steps;
    }
}
