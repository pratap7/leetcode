<?php
/**
 * Given two strings s and t, return true if t is an anagram of s, and false otherwise.

 

Example 1:

Input: s = "anagram", t = "nagaram"

Output: true

Example 2:

Input: s = "rat", t = "car"

Output: false
 */

# SOLUTION 1
function isAnagram($s, $t) {
    $chars1 = str_split($s);
    $chars2 = str_split($t);
    if(count($chars1) != count($chars2)) return false;
    sort($chars1);
    sort($chars2);
    return ($chars1 === $chars2);
}

#SOLUTION 2
// Using indexing
function isAnagram2($s, $t) {
    $scount = strlen($s);
    $tcount = strlen($t);
    if($scount != $tcount) return false;
    $count = array_fill(0,26,0);
    // Fill the count array with 0 to 25
    for($i=0;$i<$scount;$i++){
        $count[ord($s[$i]) - ord('a')]++;
        $count[ord($t[$i]) - ord('a')]--;
        
    }
    foreach ($count as $val) {
        if ($val !== 0) { 
            return false;
        }
    }

return true;
}