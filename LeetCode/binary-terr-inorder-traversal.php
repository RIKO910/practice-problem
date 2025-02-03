<?php
class Solution {
    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $result = [];
        $this->traverse($root, $result);
        return $result;
    }

    private function traverse($node, &$result) {
        if ($node === null) {
            return;
        }

        $this->traverse($node->left, $result);
        $result[] = $node->val;
        $this->traverse($node->right, $result);


    }
}
