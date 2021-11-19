<?php

// while
$counter = 10;
while ($counter>0) {
    echo "Counter: $counter".'<br>';
    $counter--;
}
// Loop with $counter

// do - while
$counter2= 10;
do {
    echo "Counter: $counter2".'<br>';
    $counter2--;
} while ($counter2>0);
// for
for($i=0; $i<10; $i++) {
    echo "i= $i".'<br>';
}
// foreach
$array1 = ['string1','string2', 'string3'];
foreach($array1 as $i => $s) {
    echo "$i ="."$s"."<br>";
}
foreach($array1 as $s) {
    echo "$s"."<br>";
}

// Iterate Over associative array.
$person = [
    'name'=>'John',
    'age'=>22,
    'sex'=>'male',
    'hobbies'=>['drinking beer', 'eating knedliks', 'cycling']
];
foreach ($person as $key=>$value) {
    echo $key." = ";
    print_r($value);
    echo '<br>';
}
