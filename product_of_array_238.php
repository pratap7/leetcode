<?php
/**
 * Given an integer array nums, return an array answer such that answer[i] is equal to the product of all the elements of nums except nums[i].

The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.

You must write an algorithm that runs in O(n) time and without using the division operation.

 

Example 1:

Input: nums = [1,2,3,4]
Output: [24,12,8,6]
Example 2:

Input: nums = [-1,1,0,-3,3]
Output: [0,0,9,0,0]

 */
// This is optimal solution with O(n) time complexity and O(1) space complexity
 function productExceptSelf($nums) {
    $count = count($nums);
    $result = array_fill(0, $count, 1);
    $pre = $post = 1;
    for($i=0;$i<$count;$i++){
        $result[$i] = $pre;
        $pre *= $nums[$i];
    }
    
    for($i=$count-1;$i>=0;$i--){
        $result[$i] *= $post;
        $post *= $nums[$i];
    }
    return $result;
}