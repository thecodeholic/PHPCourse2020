<?php

// https://www.php.net/manual/en/ref.math.php


// Do some basic math here


echo "abs(-15) ".abs(-15).'<br>';
echo "pow(2,  3) ".pow(2,  3).'<br>';
echo "sqrt(16) ".sqrt(16).'<br>';
echo "max(2, 3) ".max(2, 3).'<br>';
echo "min(2, 3) ".min(2, 3).'<br>';
echo "round(2.4) ".round(2.4).'<br>';
echo "round(2.6) ".round(2.6).'<br>';
echo "floor(2.6) ".floor(2.6).'<br>';
echo "ceil(2.4) ".ceil(2.4).'<br>';

$number = 123456789.12345;
echo number_format($number, 2, '.', ',').'<br>';
