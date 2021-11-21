<?php
/*
 * TODO
 * 1. start session
 * 2. print session id
 * you have to start session before any html code
 * 3. check how many time page have been visited
 */

session_start();

echo '<pre>';
var_dump(session_id());
echo'</pre>';

$_SESSION['counter']??=0;
$_SESSION['counter']++;

echo 'counter=';
echo $_SESSION['counter'].'<br>';

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
</body>
</html>
