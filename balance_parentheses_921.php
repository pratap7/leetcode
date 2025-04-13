<?php
/**
 * Problem: Minimum Add to Make Parentheses Valid
 * A parentheses string is valid if and only if:

    *It is the empty string,
    *It can be written as AB (A concatenated with B), where A and B are valid strings, or
    *It can be written as (A), where A is a valid string.
    *You are given a parentheses string s. In one move, you can insert a parenthesis at any position of the string.

    *For example, if s = "()))", you can insert an opening parenthesis to be "(()))" or a closing parenthesis to be "())))".
    *Return the minimum number of moves required to make s valid.
    Example 1:

    *Input: s = "())"
    *Output: 1
    *Example 2:

    *Input: s = "((("
    *Output: 3
 */

function minAddToMakeValid($s) {
    $open_needed = $close_needed = 0;
    $str_count = strlen($s); //Avoid Calling it multiple times in loop
    for($i=0; $i < $str_count; $i++){
        if($s[$i] == "("){
            $close_needed++;
        } else {
            if($close_needed > 0){
                $close_needed--;
            } else {
                $open_needed++;
            }
        }
    }
    return $open_needed + $close_needed;
}