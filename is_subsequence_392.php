<?php
/**
 * Given two strings s and t, return true if s is a subsequence of t, or false otherwise.

A subsequence of a string is a new string that is formed from the original string by deleting some (can be none) of the characters without disturbing the relative positions of the remaining characters. (i.e., "ace" is a subsequence of "abcde" while "aec" is not).

 

Example 1:

Input: s = "abc", t = "ahbgdc"
Output: true
Example 2:

Input: s = "axc", t = "ahbgdc"
Output: false
 */

 function isSubsequence($s, $t) {
    $check = array();
    $counter = 0;
    if($t == $s) return true;
    for($i=0;$i<strlen($t);$i++){
        if($t[$i] == $s[$counter]) {
            $check[$counter] = $t[$i];
            $counter++;
        }
        if(count($check) == strlen($s)) return true;
    }
    return false;
}

#SOLUTION 2
function isSubsequence2($s, $t) {
    $i = $j = 0;
    while ($i < strlen($s) && $j < strlen($t)) {
        if ($s[$i] === $t[$j]) {
            $i++;
        }
        $j++;
    }
    return $i === strlen($s);
}