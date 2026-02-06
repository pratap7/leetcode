<?php
/**
 * 
 * Given an integer array nums and an integer k, return the k most frequent elements. You may return the answer in any order.

 

Example 1:

Input: nums = [1,1,1,2,2,3], k = 2
Output: [1,2]
Example 2:

Input: nums = [1], k = 1
Output: [1]
 */

 function topKFrequent($nums, $k) {
    $len = count($nums);
    $counting = array();
    if($len == $k){
        return $nums;
    }
    for($i=0;$i<$len; $i++){
        $index = $nums[$i];
        if(isset($counting[$index])){
            $counting[$index] = $counting[$index] + 1;
        } else {
            $counting[$index] = 1;
        }
    }
    
    arsort($counting);
    $counting = array_slice($counting, 0, $k, true);
    return array_keys($counting);
}