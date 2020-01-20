<?php

// https://www.php.net/manual/en/ref.strings.php


// some basic strings.
// double quotes vs single quotes

$string = "    Hello World      ";

echo strlen($string).'<br>'.PHP_EOL;
echo trim($string).'<br>'.PHP_EOL;
echo ltrim($string).'<br>'.PHP_EOL;
echo rtrim($string).'<br>'.PHP_EOL;
echo str_word_count($string).'<br>'.PHP_EOL;
echo strrev($string).'<br>'.PHP_EOL;
echo strtoupper($string).'<br>'.PHP_EOL;
echo strtolower($string).'<br>'.PHP_EOL;
echo ucfirst($string).'<br>'.PHP_EOL;
echo lcfirst($string).'<br>'.PHP_EOL;
echo ucwords($string).'<br>'.PHP_EOL;
echo strpos($string, 'world').'<br>'.PHP_EOL;
echo stripos($string, 'world').'<br>'.PHP_EOL;
echo substr($string, 8).'<br>'.PHP_EOL;
echo str_replace('World', 'PHP', $string).'<br>'.PHP_EOL;
echo str_ireplace('world', 'PHP', $string).'<br>'.PHP_EOL;
echo str_pad(trim($string), 18, '*', STR_PAD_LEFT) . '<br>' . PHP_EOL;

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT).'<br>'.PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT).'<br>'.PHP_EOL;
echo str_repeat('Hello', 2).'<br>'.PHP_EOL;

$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";

$hello = "Something";
echo $longText.'<br>'.PHP_EOL;
echo nl2br($longText).'<br>'.PHP_EOL;

$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo htmlentities($longText).'<br>'.PHP_EOL;
echo htmlentities(nl2br($longText)).'<br>'.PHP_EOL;
echo nl2br(htmlentities($longText)).'<br>'.PHP_EOL;
echo html_entity_decode(htmlentities($longText)).'<br>'.PHP_EOL;
echo htmlspecialchars($longText).'<br>'.PHP_EOL;
