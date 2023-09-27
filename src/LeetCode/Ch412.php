<?php

namespace App\LeetCode;

class Ch412
{
    function fizzBuzz1($n)
    {
        for ($i = 1; $i < $n + 1; $i++) {
            $tmp = '';

            if ($i % 3 == 0) {
                $tmp .= "Fizz";
            }

            if ($i % 5 == 0) {
                $tmp .= "Buzz";
            }

            $result[] = strlen($tmp) > 0 ? $tmp : (string) $i;
        }

        return $result;
    }

    function fizzBuzz2($n)
    {
        $result = [];

        for ($i = 1; $i < $n + 1; $i++) {
            $tmp = '';

            if ($i % 3 == 0 && $i % 5 == 0) {
                $result[] = 'FizzBuzz';
                continue;
            }

            if ($i % 3 == 0) {
                $result[] = "Fizz";
                continue;
            }

            if ($i % 5 == 0) {
                $result[] = "Buzz";
                continue;
            }

            $result[] = (string)$i;
        }

        return $result;
    }
}
