<?php

class Solution {



    /**
     * @param  Integer[] $nums
     * @param  Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] == $val) {
                array_splice($nums, $i, 1);
                $i--;
                $n--;
            }
        }
        return count($nums);
    }
}