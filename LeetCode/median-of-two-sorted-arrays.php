<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        // Ensure nums1 is the smaller array
        if (count($nums1) > count($nums2)) {
            return $this->findMedianSortedArrays($nums2, $nums1);
        }

        $x = count($nums1);
        $y = count($nums2);
        $low = 0;
        $high = $x;

        while ($low <= $high) {
            $partitionX = (int)(($low + $high) / 2);
            $partitionY = (int)(($x + $y + 1) / 2) - $partitionX;

            $maxLeftX = ($partitionX == 0) ? -INF : $nums1[$partitionX - 1];
            $minRightX = ($partitionX == $x) ? INF : $nums1[$partitionX];

            $maxLeftY = ($partitionY == 0) ? -INF : $nums2[$partitionY - 1];
            $minRightY = ($partitionY == $y) ? INF : $nums2[$partitionY];

            if ($maxLeftX <= $minRightY && $maxLeftY <= $minRightX) {
                if (($x + $y) % 2 == 0) {
                    return (max($maxLeftX, $maxLeftY) + min($minRightX, $minRightY)) / 2;
                } else {
                    return max($maxLeftX, $maxLeftY);
                }
            } elseif ($maxLeftX > $minRightY) {
                $high = $partitionX - 1;
            } else {
                $low = $partitionX + 1;
            }
        }

        throw new Exception("Input arrays are not sorted properly.");
    }
}
