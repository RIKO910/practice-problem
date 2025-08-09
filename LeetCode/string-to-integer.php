<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        // Step 1: Remove leading/trailing spaces
        $s = ltrim($s);

        if ($s === "") {
            return 0;
        }

        // Step 2: Detect sign
        $sign = 1;
        $index = 0;
        if ($s[0] === '-') {
            $sign = -1;
            $index++;
        } elseif ($s[0] === '+') {
            $index++;
        }

        // Step 3: Parse digits
        $result = 0;
        $len = strlen($s);
        while ($index < $len && ctype_digit($s[$index])) {
            $result = $result * 10 + intval($s[$index]);
            $index++;
        }

        $result *= $sign;

        // Step 4: Clamp to 32-bit range
        $INT_MAX = 2147483647;
        $INT_MIN = -2147483648;

        if ($result < $INT_MIN) {
            return $INT_MIN;
        }
        if ($result > $INT_MAX) {
            return $INT_MAX;
        }

        return $result;
    }
}
