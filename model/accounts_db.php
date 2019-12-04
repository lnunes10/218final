<?php

require('model/database.php');

$query='SELECT * FROM accounts
WHERE id=:ownerid ';

$statement=$db->prepare($query);
$statement->bindValue(':ownerid',$ownerid);
$statement->execute();
$users=$statement->fetchAll();
$statement->closeCursor();