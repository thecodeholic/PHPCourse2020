<?php

// 1. Add enctype="multipart/form-data" to form
// 2. var_dump $_FILES
//echo '<pre>';
//var_dump($_FILES);
//echo '</pre>';

// 3. Check if file was uploaded and save it locally
if (isset($_FILES['file']) && $_FILES['file']['error'] === 0){
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <button>Submit</button>
</form>
</body>
</html>
