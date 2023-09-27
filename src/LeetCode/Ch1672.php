<?php

namespace App\LeetCode;

class Ch1672
{
    function maximumWealth($accounts)
    {
        $max = 0;

        foreach ($accounts as $account) {;
            $max = ($current_max = array_sum($account)) > $max ? $current_max : $max;
        }

        return $max;
    }
}
