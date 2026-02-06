<?php 
/*20. Valid Parentheses

Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.
 

Example 1:

Input: s = "()"

Output: true

Example 2:

Input: s = "()[]{}"

Output: true

Example 3:

Input: s = "(]"

Output: false

Example 4:

Input: s = "([])"

Output: true
*/

function isValid($s) {
    $stack = [];
    $map = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];
    for($i=0; $i<strlen($s); $i++){
        $char = $s[$i];
        if(in_array($char,['(', '{', '['])){
            array_push($stack, $char);
        } else {
            if (empty($stack) || array_pop($stack) !== $map[$char]) {
                return false;
            }
        }
    }
    return empty($stack);
}