<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $count = count($nums);
        sort($nums);
        $result = [];

        for ($i = 0; $i < $count - 2; $i++) {
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) continue;

            for ($j = $i + 1; $j < $count - 1; $j++) {
                if ($j > $i + 1 && $nums[$j] == $nums[$j - 1]) continue;

                for ($k = $j + 1; $k < $count; $k++) {
                    if ($k > $j + 1 && $nums[$k] == $nums[$k - 1]) continue;

                    if ($nums[$i] + $nums[$j] + $nums[$k] == 0) {
                        $result[] = [$nums[$i], $nums[$j], $nums[$k]];
                    }
                }
            }
        }

        return $result;
    }
}