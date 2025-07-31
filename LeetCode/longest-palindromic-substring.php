<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $n = strlen($s);
        if ($n <= 1) return $s;

        $start = 0;
        $end = 0;

        for ($i = 0; $i < $n; $i++) {
            $len1 = $this->expandAroundCenter($s, $i, $i);     // Odd length
            $len2 = $this->expandAroundCenter($s, $i, $i + 1); // Even length
            $len = max($len1, $len2);

            if ($len > ($end - $start)) {
                $start = $i - intval(($len - 1) / 2);
                $end = $i + intval($len / 2);
            }
        }

        return substr($s, $start, $end - $start + 1);
    }

    private function expandAroundCenter($s, $left, $right) {
        $L = $left;
        $R = $right;
        $n = strlen($s);

        while ($L >= 0 && $R < $n && $s[$L] == $s[$R]) {
            $L--;
            $R++;
        }

        return $R - $L - 1;
    }
}
