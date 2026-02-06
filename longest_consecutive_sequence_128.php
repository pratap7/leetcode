<?php
/**

You must write an algorithm that runs in O(n) time.

 

Example 1:

Input: nums = [100,4,200,1,3,2]
Output: 4
Explanation: The longest consecutive elements sequence is [1, 2, 3, 4]. Therefore its length is 4.
Example 2:

Input: nums = [0,3,7,2,5,8,4,6,0,1]
Output: 9
Example 3:

Input: nums = [1,0,1,2]
Output: 3
 */

 #Solution 1
 function longestConsecutive($nums) {
    sort($nums);
    $lsc = $csc = 1;
    $count = count($nums);
    if($count <= 1) return $count;
    $array_count = $count - 1;
    for($i=0; $i < $array_count;$i++){
        $current = $nums[$i];
        $next = $nums[$i + 1];
        if($current == $next) continue;
        if($current + 1 == $next){
            $csc += 1;
            if($csc > $lsc) $lsc = $csc; ;
        } else {
            $csc = 1;
        }
    }
    return $lsc;
}

# SOLUTION 2
function longestConsecutive2($nums) {
    if (count($nums) === 0) {
       return 0;
   }

   $numSet = array_flip($nums);
   $longestSub = 1;

foreach ($numSet as $num => $_) {
   if (!isset($numSet[$num - 1])) {
       $currentNum = $num;
       $currentSub = 1;

       while (isset($numSet[$currentNum + 1])) {
           $currentNum++;
           $currentSub++;
       }

       $longestSub = max($longestSub, $currentSub);
   }
}

return $longestSub;
}

