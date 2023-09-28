<?php

namespace App\LeetCode;

class Ch383
{

    function canConstruct1($ransomNote, $magazine)
    {
        if (strlen($magazine) < strlen($ransomNote)) {
            return false;
        }

        while (strlen($ransomNote) > 0) {
            if (substr_count($magazine, $ransomNote[0]) < substr_count($ransomNote, $ransomNote[0])) {
                return false;
            }
            $magazine = trim($magazine, $ransomNote[0]);
            $ransomNote = trim($ransomNote, $ransomNote[0]);
        }

        return true;
    }

    function canConstruct2($ransomNote, $magazine)
    {
        $len = strlen($ransomNote);

        for ($i = 0; $i < $len; $i++) {
            $pos = strpos($magazine, $ransomNote[$i]);

            if (false === $pos) {
                return false;
            }

            $magazine[$pos] = '_';
        }

        return true;
    }
}
