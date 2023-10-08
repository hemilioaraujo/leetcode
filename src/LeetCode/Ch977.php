<?php

namespace App\LeetCode;

class Ch977
{
    public function sortedSquares1($nums)
    {
        for ($i = 0; $i < sizeof($nums); $i++) {
            $nums[$i] = $this->square($nums[$i]);
        }

        sort($nums);

        return $nums;
    }

    public function square(int  $num): int
    {
        return $num * $num;
    }

    public function sortedSquares2($nums): array
    {
        foreach ($nums as $key => $num) {
            $nums[$key] = $num * $num;
        }

        sort($nums);

        return $nums;
    }
}
