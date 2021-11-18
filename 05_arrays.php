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
var_dump(explode(',', $string )).PHP_EOL;
echo '</pre>';
// Combine array elements into string
print_r(implode("&", $fruits).PHP_EOL.'<br>');
// Check if element exist in the array
echo in_array("Peach", $fruits).PHP_EOL;
// Search element index in the array
print_r('is apple in array: '.array_search('Apple', $fruits).PHP_EOL);
// Merge two arrays
$vegetables = ['Tomato', 'Pumpkin', 'Cabbage'];
echo '<pre>';
echo 'Merge arrays'.PHP_EOL;
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';
// Sorting of array (Reverse order also)
//sort();
//rsort(); //reverse sort
//usort(); //user sort vs comparator
// Filter, map, reduce of array
$numbers = [1,2,3,4,5,6,];
echo '<pre>';
echo 'Filter numbers: '.PHP_EOL;
var_dump(array_filter($numbers, function ($n) {
    return $n % 2 == 0;
}));
$snother_way_to_filter = array_filter($numbers, fn($n) => $n % 2 === 0);
echo '</pre>';

//map arrays
array_map(fn($n) => $n * $n, $numbers);
//reduce
array_reduce($numbers, fn($carry, $item) => $carry + $item);




// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 30,
    'hobbies' => ['Tennis','Computer gaming','Beer drinking']
];

echo 'Associative arrays'.PHP_EOL;

echo $person['name'];

// Get element by key

// Set element by key
$person['height']=1.8;
// Check if array has specific key
isset($person['age']);
// Print the keys of the array
array_keys($person);
// Print the values of the array
array_values($person);
// Sorting associative arrays by values, by keys
ksort($person);//by keys
asort($person);//by values
krsort($person);//reverse order keys
arsort($person);//reverse order values

// Two dimensional arrays

$todoItems =[
    ['title' => 'item1', 'completed' => true],
    ['title' => 'item2', 'completed' => false],
    ['title' => 'item3', 'completed' => true]
];

echo '<pre>';
var_dump($todoItems);
echo '</pre>';
