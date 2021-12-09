<?php

class Connection
{
 public PDO $pdo;

 public function __construct() {
     $this->pdo = new PDO('mysql:server=localhost;dbname=notes','root','');
     $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

public function getNotes() {
     $statement = $this->pdo->prepare("SELECT * FROM notes ORDER BY date_time DESC");
     $statement->execute();

     return $statement->fetchAll(PDO::FETCH_ASSOC);
}

public function createNote($title, $description) {
     $statement = $this->pdo->prepare("INSERT INTO notes (title,description,date_time) VALUES (:title, :description, :date_time)");
     $statement->bindValue("title", $title);
     $statement->bindValue("description", $description);
     $statement->bindValue("date_time", date('Y-m-d H:i:s'));
     return $statement->execute();
}

public function getById($id) {
     $statement = $this->pdo->prepare("SELECT * FROM notes WHERE id=:id");
     $statement->bindValue("id", $id);
     $statement->execute();
     return $statement->fetch(PDO::FETCH_ASSOC);
}

public function update($id, $title, $description) {
     $statement = $this->pdo->prepare("UPDATE notes SET title=:title, description=:description, date_time=:date_time WHERE id=:id");
     $statement->bindValue('id', $id);
     $statement->bindValue('title', $title);
     $statement->bindValue('description', $description);
     $statement->bindValue('date_time', date('Y-m-d H:i:s'));
     return $statement->execute();
}

    public function deleteById($id) {
        $statement = $this->pdo->prepare("DELETE FROM notes WHERE id=:id");
        $statement->bindValue("id", $id);
        return  $statement->execute();
    }
}