<?php
/*
 * TODO:
 * 1.Create database
 *  1.1 Select notes/utf8_unicode_ci
 *  1.2 Create table notes (id, title, description, create_date)
 * 2. in php create PDO 'mysql:server=localhost;dbname=notes', root/pass
 * 3. setAttribute of pdo errmode to exception
 * 4. create class connection.php with pdo, initialize it in constructor
 * 5. create function getNotes this->pdo->prepare
 * 6. return statement->fetchAll as associative error
 * 7. get notes
 * 8. using foreach make a list of it
 * 9. create save.php :)
 * 10. add addNote to connection php
 * 11. require once connection in save.php
 * 12. use addNote
 * 13. make  title of note a link for same page with parameter id
 * 14. get id from get
 * 15. add function getbyid in connection
 * 16. modify forms to make able to edit
 * 17. handle update in create php
 * 18. do delete button: as usual
 * */
require_once ('Connection.php');
$connection = new Connection();

$notes = $connection->getNotes();

$oldNote = ['id'=>'', 'title'=>'', 'description'=>''];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $oldNote = $connection->getById($id);
}
echo '<pre>';
var_dump($oldNote);
echo '</pre>';



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
    <form class="new-note" action="save.php" method="post">
        <input type="hidden" name="id" value="<?php echo $oldNote['id']?>">
        <input type="text" name="title" placeholder="Note title" autocomplete="off" value="<?php echo $oldNote['title'];?>">
        <textarea name="description" cols="30" rows="4"
                  placeholder="Note Description"><?php echo $oldNote['description']?></textarea>
        <button>
        <?php echo ($oldNote['id']) ? 'Edit note' : 'Create note';?>
        </button>
    </form>
    <?php foreach ($notes as $note) : ?>
    <div class="notes">

        <div class="note">
            <div class="title">
                <a href="?id=<?php echo $note['id']?>"><?php echo $note['title']?></a>
            </div>
            <div class="description">
                <?php echo $note['description']?>
            </div>
            <small><?php echo $note['date_time']?></small>
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $note['id']?>">
            <button class="close">X</button>
            </form>>
        </div>
    </div>
    <?php endforeach;?>
</div>
</body>
</html>
