<?php
require('model/database.php');
function get_users_questions($userId)
{
    global $db;
    $query = 'SELECT * FROM questions
WHERE ownerId=:ownerId';
    $statement = $db->prepare($query);
    $statement->bindValue(':ownerId', $userId);
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
    $statement->closeCursor();

}

function add_question($userId, $title, $body, $skills)
{
    global $db;
    $query = 'INSERT INTO questions(ownerId,title,body,skills)
VALUES(:ownerId,:title,:body,:skills)';
    $statement = $db->prepare($query);;
    $statement->bindValue(':ownerId', $userId);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':body', $body);
    $statement->bindValue(':skills', $skills);
    $statement->execute();
    $statement->closeCursor();

}
function specific_question($id)
{
    global $db;
    $query = "SELECT title, body, skills FROM questions WHERE id=:id";
    $statement = $db->prepare($query);
    $statement->bindValue(':questionId', $id);
    $statement->execute();
    $question = $statement->fetch();
    $statement->closeCursor();
    return $question[0]['id'];
}