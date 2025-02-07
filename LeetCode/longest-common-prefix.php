<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
       $length = count($strs); 
        $commonPrefix = ""; 

        if ($length == 0) {
            echo $commonPrefix;
            return;
        }

        for ($k = 0; $k < strlen($strs[0]); $k++) { 
            $isCommon = true; 

            for ($i = 1; $i < $length; $i++) { 
                if ($k >= strlen($strs[$i]) || $strs[0][$k] != $strs[$i][$k]) {
                    $isCommon = false;
                    break;
                }
            }

            if ($isCommon) {
                $commonPrefix .= $strs[0][$k]; 
            } else {
                break; 
            }

        }

        return $commonPrefix; 
    }
}