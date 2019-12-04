<?php
require('model/database.php');
$query='SELECT * FROM questions
WHERE ownerid=:ownerid';
$statement=$db->prepare($query);
$statement->bindValue(':ownerid',$ownerid);
$statement->execute();
$questions = $statement->fetchAll();
$statement->closeCursor();

