<?php
//var_dump($_POST);

$todo = trim($_POST['todo_name']);
echo $todo.'<br>';
if ($todo) {
    $file = 'todo.json';
    if (file_exists($file)) {
        $json_arr = json_decode(file_get_contents($file),true);
        unset($json_arr[$todo]);
        file_put_contents($file, json_encode($json_arr, JSON_PRETTY_PRINT));
    }
}
header('Location: index.php');