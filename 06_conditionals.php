<?php

$age = 21;
$salary = 300000;

// if condition
if ($age == 30) {
    echo "You are 20".PHP_EOL;
}
//== check values
//=== check also data type
// if condition - else
if ($age == 20) {
    echo "You are 20".PHP_EOL;
} else {
    echo "You are not 20".PHP_EOL;
}
// if condition1 AND condition2
if ($age < 22 && $salary > 100000) {
    echo "You are awesome";
}
echo '<br>';
// if condition1 OR condition2

// if condition1 - elseif condition2 - else

// if condition1 and condition2 - elseif condition1 and condition2 - else

// Ternary if
echo $age < 22 ? 'Young' : 'Not young';
echo '<br>';
// Null coalescing operator
$myAge = 18;
//before 7.1
//echo $myAge ? $myAge : 1;
// after 7.1
echo  $myAge ?: 1;
echo '<br>';
//$myAddress = isset($address) ? $address : 'Current location';
$myAddress = $address ?? 'Current location';
echo $myAddress;
echo '<br>';
// Null coalescing assignment operator. Since PHP 7.4
if (!isset($something)) {
//    $something = 'something';
}
$something ??= 'something';
echo $something.PHP_EOL;
// switch
// like in Java
