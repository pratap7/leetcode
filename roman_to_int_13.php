<?php
$symbols = array(
    'I'=> 1,
    'V'=> 5,
    'X'=> 10,
    'L'=> 50,
    'C'=> 100,
    'D'=> 500,
    'M'=> 1000
);
$str = $_GET['str'] ?? 'III'; // Default value for testing
function romanToInt($str){
    global $symbols;
    $total = 0;
    for($i=0;$i<strlen($str);$i++){
        $total += $symbols[$str[$i]];
    }
    return $total;
}

echo romanToInt($str);