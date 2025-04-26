<?php
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {

        $i = strlen($a) - 1;

        $j = strlen($b) - 1;

        $carry  = 0;
        $result = "";

        while ($i >= 0 || $j >= 0 || $carry > 0) {
            $bitA = $i >= 0 ? $a[$i] - '0' : 0;
            $bitB = $j >= 0 ? $b[$j] - '0' : 0;

            $sum = $bitA + $bitB + $carry;
            $carry = $sum > 1 ? 1 : 0;
            $result = ($sum % 2) . $result;

            $i--;
            $j--;
        }

        return $result;
    }

}