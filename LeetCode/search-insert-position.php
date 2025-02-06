<?php

class Solution {
    function searchInsert($nums, $target) {
        $n = count($nums);

        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] == $target) {
                return $i;
            } else if ($nums[$i] > $target) {
                return $i;
            }
        };
        return $n;
    }
}