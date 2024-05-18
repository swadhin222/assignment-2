<?php
function countVowels($str) {
    $str = strtolower($str);
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $vowelCount++;
        }
    }
    return $vowelCount;
}

function reverseString($str) {
    return strrev($str);
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
