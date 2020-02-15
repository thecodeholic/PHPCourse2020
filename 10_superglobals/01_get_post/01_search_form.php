<?php
/**
 * User: TheCodeholic
 * Date: 2/8/2020
 * Time: 9:49 AM
 */

// 1. Print the whole $_GET using var_dump
echo '<pre>';
var_dump($_GET);
echo '</pre>';

// 2. Get the keyword from $_GET and print
$keyword = $_GET['keyword'];
echo $keyword.'<br>';

// 3. Check if the keyword isset in $_GET
$keyword = '';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}

// 4. Set the keyword back in search input

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
  <input type="text" name="keyword"
         placeholder="Type and hit enter" value="<?php echo $keyword ?>">
  <button>Search</button>
</form>
</body>
</html>
