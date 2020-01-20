<?php

// https://www.php.net/manual/en/ref.array.php


// Create simple array
$fruits = ["Banana", "Orange", "Apple"];

$isArray = is_array($fruits);

var_dump(array_diff($fruits, ['Banana']));

/*
range(min, max)
array_push, array_pop
array_unshift, array_shift
array_diff
explode, implode
array_merge
array_search
array_replace
sort
array_filter
array_map
array_reduce
array_reverse
*/
// arrow functions

// 1. Associative arrays
// ==============================
$names = [
    'j' => 'John',
    'b' => 'Brad',
    'n' => 'Nick'
];
echo $names['j'] . '<br/>';
$names['m'] = 'Mary';
echo $names['m'] . '<br/>';

var_dump(array_keys($names));
var_dump(array_values($names));
// ==============================

// 2. Associative array with normal elements also
// ==============================
// ==============================
$array1 = array("color" => "red", 2);
var_dump($array1);
// ==============================
// ==============================

// array_merge
// ==============================
$array1 = array("color" => "red", 2);
$array2 = array("color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
var_dump($result);

// array_combine
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

// Two dimensional arrays
$twoDimensionalArrays = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$todoItems = [
    ['title' => 'Todo1', 'completed' => true],
    ['title' => 'Todo 2', 'completed' => false],
];

var_dump($todoItems);
