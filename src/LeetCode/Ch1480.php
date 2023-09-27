<?php

namespace App\LeetCode;

class Ch1480
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function solution1($nums)
    {
        $runningSum = [];

        for ($i = 0; $i < sizeof($nums); $i++) {
            $runningSum[] = array_sum(array_slice($nums, 0, $i + 1));
        }

        return $runningSum;
    }

    function solution2($nums)
    {
        $runningSum[0] = $nums[0];

        for ($i = 1; $i < sizeof($nums); $i++) {
            $runningSum[$i] = $nums[$i] + $runningSum[$i - 1];
        }

        return $runningSum;
    }
}
