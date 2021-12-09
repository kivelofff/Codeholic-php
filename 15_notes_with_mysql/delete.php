<?php
require_once('Connection.php');
$connection = new Connection();
$id = $_POST['id'];
$connection->deleteById($id);
header('Location: index.php');
