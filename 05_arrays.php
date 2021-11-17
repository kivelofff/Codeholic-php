<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];
// Print the whole array

// Get element by index
echo '<pre>';
var_dump($fruits);
echo '</pre>';
//? shortcut for double pre
// Set element by index

echo $fruits[0].PHP_EOL;

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';
// Append element
$fruits[] = "Peach";
echo '<pre>';
var_dump($fruits);
echo '</pre>';

$fruits1 = array("Some ftuit"); //old way
// Print the length of the array
echo count($fruits).PHP_EOL;
// Add element at the end of the array
array_push($fruits, 'Grape');
// Remove element from the end of the array
array_pop($fruits);
// Add element at the beginning of the array
array_unshift($fruits, 'Cucunber');
// Remove element from the beginning of the array
array_shift($fruits);
// Split the string into an array
$string = "Apple,Orange,AK47";
echo '<pre>';
var_dump(explode(',', $string ));
echo '</pre>';
// Combine array elements into string
print_r($fruits);
// Check if element exist in the array
echo in_array("Peach", $fruits).PHP_EOL;
// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)

// Filter, map, reduce of array


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays
