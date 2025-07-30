<?php

class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        $rows = array_fill(0, 9, []);
        $cols = array_fill(0, 9, []);
        $boxes = array_fill(0, 9, []);

        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $val = $board[$i][$j];

                if ($val === '.') {
                    continue;
                }

                // Check row
                if (in_array($val, $rows[$i])) {
                    return false;
                }
                $rows[$i][] = $val;

                // Check column
                if (in_array($val, $cols[$j])) {
                    return false;
                }
                $cols[$j][] = $val;

                // Check 3x3 box
                $boxIndex = intdiv($i, 3) * 3 + intdiv($j, 3);
                if (in_array($val, $boxes[$boxIndex])) {
                    return false;
                }
                $boxes[$boxIndex][] = $val;
            }
        }

        return true;
    }
}
