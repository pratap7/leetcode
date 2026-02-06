<?php
/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1]
 */

 # SOLUTION 1
 function twoSum($nums, $target) {
    $ncount = count($nums);
    for($i=0;$i<$ncount;$i++){
        $first = $nums[$i];$found = false;
        for($j=$i+1;$j<$ncount;$j++){
            $second = $nums[$j];
            $sum = $first+$second;
            if($sum == $target){
                $arr = array($i,$j);
                $found = true;
                break;
            }
        }
        if($found == true) break;
    }
    return $arr;
}

// SOLUTION 2, using hashmap
// This is better solution
function twoSum2($nums, $target) {
    $map = [];
    for ($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];
        if (isset($map[$complement])) {
            return [$map[$complement], $i];
        }
        $map[$nums[$i]] = $i;
    }
    return [];
}
