<?php
require('database.php');
filter_input(INPUT_GET,'ownerid');

$user_s='SELECT * FROM accounts
WHERE id=:ownerid ';

$statement=$db->prepare($query);
$statement->bindValue(':ownerid',$ownerid);
$statement->execute();
$users=$statement->fetchAll();
$statement->closeCursor();

$question_s='SELECT * FROM questions
WHERE ownerid=:ownerid';
$statement=$db->prepare($query);
$statement->bindValue(':ownerid',$ownerid);
$statement->execute();
$questions = $statement->fetchAll();
$statement->closeCursor();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Form</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div>
    <?php foreach ($users as $user)?>
    <?php echo $user['fname,lname'];?>

</div>
<div>
    <?php foreach ($questions as $question)?>
    <?php echo $question['title,body'];?>
</div>
<div class="button">
    <a href="https://web.njit.edu/~ln64/questionsform.html" class="button">Add New Question</a>

</div>
</body>
</html>