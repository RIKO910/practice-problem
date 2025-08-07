<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $isNegative = $x < 0;
        $number_string = strval(abs($x));
        $reversed_string = strrev($number_string);
        $reversed = intval($reversed_string);

        if ($isNegative) {
            $reversed = -$reversed;
        }

        // Check 32-bit signed integer range
        if ($reversed < -2147483648 || $reversed > 2147483647) {
            return 0;
        }

        return $reversed;
    }
}
