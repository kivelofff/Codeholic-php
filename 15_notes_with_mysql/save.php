<?php

/*echo '<pre>';
var_dump($_POST);
echo '</pre>';*/
require_once ('Connection.php');
$connection = new Connection();
$id = $_POST['id'];
$title = $_POST['title'];
$description = trim($_POST['description']);
if (isset($id)) {
    $connection->update($id, $title, $description);
} else {
    $connection->createNote($title,$description);
}

header('Location: index.php');

