<?php

class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        sort($g); // Sort children's greed factor
        sort($s); // Sort cookie sizes

        $i = 0; // Pointer for children
        $j = 0; // Pointer for cookies
        $count = 0; // Count of satisfied children

        while ($i < count($g) && $j < count($s)) {
            if ($s[$j] >= $g[$i]) { // If cookie can satisfy child
                $count++;
                $i++; // Move to next child
            }
            $j++; // Move to next cookie
        }

        return $count;
    }
}
