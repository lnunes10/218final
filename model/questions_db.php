<?php
require('model/database.php');
function get_users_questions($userId)
{
    global $db;
    $query = 'SELECT * FROM questions
WHERE ownerid=:ownerid';
    $statement = $db->prepare($query);
    $statement->bindValue(':ownerid', $userId);
    $statement->execute();
    $questions = $statement->fetchAll();
    $statement->closeCursor();
    return $questions;
}
function delete_question($id)
{
    global $db;
    $query = 'DELETE FROM questions
WHERE id=:id';
    $statement=$db->prepare($query);
    $statement->bindValue(':id',$id);
    $statement->execute();
    $questions=$statement->fetch();
    $statement->closeCursor();
    return $questions;
}

function add_question($userId)
{
    global $db;
    $query = 'INSERT INTO questions
VALUES(:ownerid,:title,:body,:skills)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ownerid', $userId);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':body', $body);
    $statement->bindValue(':skills', $skills);
    $statement->execute();
    $questions = $statement->fetch();
    $statement->closeCursor();
    return $questions;
}
