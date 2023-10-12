<?php

namespace App\LeetCode;

class Ch1089
{
    public function duplicateZeros1(&$arr)
    {
        for ($i = 0; $i < sizeof($arr); $i++) {

            if ($arr[$i] == 0) {
                for ($j = sizeof($arr) - 1; $j > $i; $j--) {
                    $arr[$j] = $arr[$j - 1];
                }
                $i++;
            }
        }
    }

    public function duplicateZeros2(&$arr)
    {
        $zeros = 0;

        foreach ($arr as $value) {
            if ($value === 0) {
                $zeros++;
            }
        }

        for ($i = count($arr) - 1; $i >= 0; $i--) {
            if ($i + $zeros < count($arr)) {
                $arr[$i + $zeros] = $arr[$i];
            }

            if ($arr[$i] == 0) {
                $zeros--;
                if ($i + $zeros < count($arr)) {
                    $arr[$i + $zeros] = 0;
                }
            }
        }
    }
}
