<?php
/**
 * User: TheCodeholic
 * Date: 2/18/2020
 * Time: 10:13 AM
 */
$file = 'todo.json';
$todo = (file_exists($file)) ? json_decode(file_get_contents($file), true) : [];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo List</title>
</head>
<body>
<form action="new_todo.php" method="post">
    <p><label for="new_todo">Enter what to do:<input name="new_todo"></p>
    <p><button>Add</button></p>
</form>
<?php
foreach ($todo as $todo_name => $status) :
?>
    <div style="margin-bottom: 10px;">
        <form action="todo_change_status.php" method="post">
            <input type="hidden" name="todo_name" value="<?php echo $todo_name?>">
            <input type="checkbox" <?php echo ($status['completed'])? 'checked' : '';?>>
        </form>
        <?php echo $todo_name?>
        <form style="display: inline-block" action="delete_todo.php" method="post">
            <input type="hidden" name="todo_name" value="<?php echo $todo_name?>">
        <button>Delete</button>
        </form>
    </div>
<?php endforeach;?>

<script>
    const checkboxes = document.querySelectorAll('input[type=checkbox]');
    checkboxes.forEach(ch => {
        ch.onclick = function () {
            this.parentNode.submit();
        };
    })
</script>
</body>
</html>
