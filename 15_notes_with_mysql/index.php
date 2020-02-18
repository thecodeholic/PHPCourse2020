<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<div>
    <form class="new-note" action="create.php" method="post">
        <input type="text" name="title" placeholder="Note title" autocomplete="off">
        <textarea name="description" cols="30" rows="4"
                  placeholder="Note Description"></textarea>
        <button>New note</button>
    </form>
    <div class="notes">
        <div class="note">
            <div class="title">
                <a href="">Sample note</a>
            </div>
            <div class="description">
                Sample note description
            </div>
            <small>15/02/20 19:00:00</small>
            <button class="close">X</button>
        </div>
    </div>
</div>
</body>
</html>
