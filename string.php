<?php



$strings = ["Hello", "World", "PHP", "Programming"];

//  For Hello

$st= $strings[0];
$reverse0=strrev($st);
$new= str_split($st);


function fn1($char){
    return in_array(strtolower($char),['a','e','i','o','u']);
}

$count0 = array_filter($new, 'fn1');

echo "Original String: " .$st.", Vowel Count: " .count($count0).",Reversed String: " .$reverse0;
echo PHP_EOL;


//  For World

$st= $strings[1];
$reverse0=strrev($st);
$new= str_split($st);



function fn2($char){
    return in_array(strtolower($char),['a','e','i','o','u']);
}

$count0 = array_filter($new, 'fn2');

echo "Original String: " .$st.", Vowel Count: " .count($count0).",Reversed String: " .$reverse0;
echo PHP_EOL;

//  For PHP

$st= $strings[2];
$reverse0=strrev($st);
$new= str_split($st);


function fn3($char){
    return in_array(strtolower($char),['a','e','i','o','u']);
}

$count0 = array_filter($new, 'fn3');

echo "Original String: " .$st.", Vowel Count: " .count($count0).",Reversed String: " .$reverse0;
echo PHP_EOL;


//  For Programming


$st= $strings[3];
$reverse0=strrev($st);
$new= str_split($st);


function fn4($char){
    return in_array(strtolower($char),['a','e','i','o','u']);
}

$count0 = array_filter($new, 'fn4');

echo "Original String: " .$st.", Vowel Count: " .count($count0).",Reversed String: " .$reverse0;


?>