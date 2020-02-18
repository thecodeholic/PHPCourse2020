<?php

$todos = json_decode(file_get_contents('./todos.json'), true);
$todoName = $_POST['todo_name'];

$todos[$todoName]['completed'] = isset($_POST['status']);
file_put_contents('./todos.json', json_encode($todos, JSON_PRETTY_PRINT));
header('Location: index.php');
