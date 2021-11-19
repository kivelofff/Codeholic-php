<?php

// Function which prints "Hello I am TheCodeholic"
function hello() {
    echo "I am alcoholic.".'<br>';
}
hello();
// Create sum of two functions
function sum($a, $b) {
    return $a+ $b;

}
echo sum(5,7);
echo '<br>';
// Create function to sum all numbers using ...$nums
function sum1(...$params) {
    //arrow functions added in PHP 7.4
    return array_reduce($params, fn($sum, $n) => $sum + $n);
}

echo sum1(1,2,3,4,5);
echo '<br>';
// Arrow functions


