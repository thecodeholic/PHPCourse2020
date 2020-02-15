<?php
// https://www.w3schools.com/php/php_sessions.asp
// Using sessions count how many times the user opens the page in a single session
// https://www.guru99.com/cookies-and-sessions.html

// Using cookies and session together, count how many times user accesses the page totally

session_start();
echo session_id();

$_SESSION['page_count'] = $_SESSION['page_count'] ?? 0;
$_SESSION['page_count']++;

if ($_SESSION['page_count'] > 10){
    echo "Thank you for visiting our website 10 times";
    session_unset();
    session_destroy();
}

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
<h1>My Awesome page visited: <?php echo $_SESSION['page_count'] ?? 0 ?></h1>
</body>
</html>
