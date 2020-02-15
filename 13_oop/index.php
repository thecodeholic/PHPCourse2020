<?php

// 1. What is class and instance

// 2. Create Person class in Person.php
require_once './Person.php';
require_once './Singer.php';

// 4. Create instance of Person
$p = new Person("Zura", 28, 100); // 8. Add arguments to constructor
$p->name = 'Zura';
//$p->age = 28; // Can not access protected and private properties
//$p->salary = 100; // Can not access protected and private properties

// 6. Using setter and getter
$p->setAge(28);
echo $p->getAge() . '<br>';


$s = new Singer("Rihanna", 29, 200);
echo $s->getAge();
