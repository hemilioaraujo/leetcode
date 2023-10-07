<?php

namespace App\LeetCode;

class Ch1295
{
    function findNumbers1($nums)
    {
        $count = 0;

        foreach ($nums as $num) {
            $str = strval($num);
            if (strlen($str) % 2 == 0) {
                $count++;
            }
        }

        return $count;
    }

    function findNumbers2($nums)
    {
        $count = 0;

        foreach ($nums as $num) {
            if ($this->getNumberOfDigits($num) % 2 == 0) {
                $count++;
            }
        }

        return $count;
    }

    function getNumberOfDigits($num)
    {
        $numberOfDigits = 0;

        while ($num >= 1) {
            $numberOfDigits++;
            $num /= 10;
        }

        return $numberOfDigits;
    }
}
