<?php


$new_todo = trim($_POST['new_todo']);
if ($new_todo) {
    $file = 'todo.json';
    $todo = (file_exists($file)) ? json_decode(file_get_contents($file), true) : [];
    $todo[$new_todo] = ['completed' => false];
    file_put_contents($file, json_encode($todo, JSON_PRETTY_PRINT));
/*    echo '<pre>';
    var_dump($todo);
    echo '<pre>';*/
}
header('Location: index.php');

?>
