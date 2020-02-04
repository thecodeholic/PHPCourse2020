<?php

// 1. Function which prints "Hello I am TheCodeholic"
function hello()
{
    echo 'Hello I am TheCodeholic<br>';
}

hello(); // 2
hello(); // 3
hello(); // 4

// 5. Create sum of two functions
function sum($a, $b)
{
    echo ($a + $b) . '<br>'; // 8. return sum
}

sum(4,5); // 6, 9 [echo]
sum(9,10); // 7, 10 [echo]

//// 11. Create function to sum all numbers using ...$nums
//function sum(...$nums)
//{
//    $sum = 0;
//    foreach ($nums as $num) $sum += $num;
//    return $sum;
//}
//
//// 13 Arrow functions
//function sum(...$nums)
//{
//    return array_reduce($nums, fn($coll, $n) => $coll + $n);
//}
//
//echo sum(1, 2, 3, 4, 6); // 12
