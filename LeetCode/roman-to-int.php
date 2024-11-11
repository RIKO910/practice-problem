<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $roman = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        ];

        $total = 0;
        $length = strlen($s);
        
        for ($i = 0; $i < $length; $i++) {
            $current = $roman[$s[$i]];
            $next = ($i + 1 < $length) ? $roman[$s[$i + 1]] : 0;
            
            // If the current value is less than the next value, subtract it
            if ($current < $next) {
                $total -= $current;
            } else {
                $total += $current;
            }
        }
        
        return $total;
    }
}