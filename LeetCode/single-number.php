<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {

        $n = count($nums);
        for($i = 0; $i < $n; $i++){
            $isSingle = true;
            for($j = 0; $j < $n; $j++){
                if($i != $j && $nums[$i] == $nums[$j]){
                    $isSingle = false;
                    break;
                }
            }
            if($isSingle) {
                return $nums[$i];
            }
        }

        return -1;
    }
}