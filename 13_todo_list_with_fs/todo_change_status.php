<?php
$file = 'todo.json';
$todo_name = $_POST['todo_name'];
//echo $todo_name.'<br>';
if (file_exists($file)) {
    $todo_json_array = json_decode(file_get_contents($file),true);
    $todo_json_array[$todo_name]['completed'] = !$todo_json_array[$todo_name]['completed'];
    file_put_contents($file, json_encode($todo_json_array, JSON_PRETTY_PRINT));
}
header('Location: index.php');