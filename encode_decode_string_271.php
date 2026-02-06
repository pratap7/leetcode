<?php
function encode(array $strs): string {
    if (count($strs) === 0) {
        return chr(258);  // Special char for empty list
    }

    $separator = chr(257);  // Unused ASCII character as separator
    return implode($separator, $strs);
}

function decode(string $s): array {
    if ($s === chr(258)) {
        return [];  // Return empty array if special char
    }

    $separator = chr(257);
    return explode($separator, $s);
}

$strs = ["hello", "world"];
$estr = encode($astr);
echo $estr;