<?php
class Solution {

/**
* @param Integer[] $nums
* @return Integer
*/
function removeDuplicates(&$nums) {
$n = count($nums);
$uniqueNums = [];

for ($i = 0; $i < $n; $i++) {
if (!in_array($nums[$i], $uniqueNums)) {
$uniqueNums[] = $nums[$i];
}
}

$nums = $uniqueNums; // Assign the unique array back to the original array.
return count($nums); // Return the number of unique elements.
}
}