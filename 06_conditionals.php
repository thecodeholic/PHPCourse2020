<?php

$age = 70;
$salary = 300000;

// if condition
if ($age < 22) {       // if ($age < 22) echo 'You are young man!!<br>';
    echo 'You are young man!!<br>';
}

// if condition - else
if ($age < 22) {
    echo 'You are young man!!<br>';
} else {
    echo 'You are not young man!!<br>';
}

// if condition1 AND condition2
if ($age < 22 && $salary > 500000) {
    echo 'You are young AND rich<br>';
}

// if condition1 OR condition2
if ($age < 22 || $salary > 500000) {
    echo 'You are young OR rich<br>';
}

// if condition1 - elseif condition2 - else
if ($age < 22) {
    echo 'You are young man!!<br>';
} elseif ($age > 60) {
    echo 'You are old<br>';
} else {
    echo "You are not young, but not old also<br>";
}
// if condition1 and condition2 - elseif condition1 and condition2 - else
if ($age < 22 && $salary >= 500000) {
    echo 'You are young man AND rich!!<br>';
} elseif ($age < 22 && $salary < 500000) {
    echo "You are young, and not so rich<br>";
} elseif ($age > 60 && $salary >= 500000) {
    echo 'You are old, but rich<br>';
} elseif ($age > 60 && $salary < 500000) {
    echo 'You are old and NOT rich also<br>';
}


// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}
