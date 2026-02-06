<?php
/**
 * Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

Example 1:

Input: nums = [1,2,3,1]

Output: true

Explanation:

The element 1 occurs at the indices 0 and 3.

Example 2:

Input: nums = [1,2,3,4]

Output: false

Explanation:

All elements are distinct.

Example 3:

Input: nums = [1,1,1,3,3,4,3,2,4,2]

Output: true
 */

 # SOLUTION 1
 class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $result = false;
        $len = count($nums);
        for($i=0;$i<$len; $i++){
            $break = false;
            for($j=$i + 1;$j < $len; $j++){
                if($nums[$i] == $nums[$j]) {
                    $break = true;
                    $result = true;
                    break;
                }
                if($break == true) break;
            }
        }
        return $result;
    }

    // Alternative solution using in_array and array_slice
    // This solution is less efficient than the first one, but it's more readable.
    // It checks if the current element exists in the rest of the array using in_array and array_slice.
    // This solution has a time complexity of O(n^2) in the worst case, as it checks each element against the rest of the array.
    // This solution is not recommended for large arrays, as it can be slow and inefficient.
    // This solution is not recommended for large arrays, as it can be slow and inefficient.
    # SOLUTION 2
    function containsDuplicate2($nums) {
        $result = false;
        $len = count($nums);
        $arr = array();
        for($i=0;$i<$len; $i++){
            if(!in_array($nums[$i], $arr)){
                $arr[] = $nums[$i];
            } else {
                $result = true;
                break;
            }
        }
        return $result;
    }

    #SOLUTION 3
    #using sort
    function containsDuplicate3($nums) {
        $result = false;
        $len = count($nums);
        sort($nums);
        for($i=0;$i<$len - 1; $i++){
            if($nums[$i] == $nums[$i + 1]) {
                $result = true;
                break;
            }
        }
        return $result;
    }

    #SOLUTION 4
    #using has set

    /**
     * Python Solution with HashSet
     * 
        class Solution(object):
            def containsDuplicate(self, nums):
                seen = set()
                for num in nums:
                    if num in seen:
                        return True
                    seen.add(num)
                return False;
     */

}