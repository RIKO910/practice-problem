<?php

class Solution {


    /**
     * @param Integer[] $digits
     * @return Integer[]
     */

    function plusOne($digits) {
        $n = count($digits);
        $result = 0;
        for($i =0 ; $i<$n ;$i++){
            if($i != $n-1){
                if($i == 0){
                    $result = $digits[$i]*10;
                }else{
                    $result = ($result+$digits[$i])*10 ;
                }

            }else{
                $result = $result+$digits[$n-1];
            }

        }
        $explode = $result+1;
        $arr  = array_map('intval', str_split($explode));
        return $arr;
    }
}