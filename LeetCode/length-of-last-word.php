<?php
class Solution {


    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {

        // Trim any trailing and leading spaces
        $s               = trim($s);
        $last_word_start = strrpos($s, " ");

        if ($last_word_start === false) {
            return strlen($s);
        }

        $last_word = substr($s, $last_word_start + 1);
        return strlen($last_word);
    }
}
