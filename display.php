<?php
$ownerid = filter_input(INPUT_GET,'ownerid');
require('model/database.php');
require('model/accounts_db.php');
require('model/questions_db.php');

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>IS218 Project</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="styles.css?v=1.0">

</head>
<body>
<div>
    <h1>Welcome User</h1>
    <?php foreach ($users as $user) :?>
    <?php echo $user['fname'];?>
        <?php echo $user['lname'];?>
    <?php endforeach;?>

</div>
<div>
    <h1>Your Questions</h1>
    <?php foreach ($questions as $question):?>

    <?php echo $question['title'];?>

        <?php echo $question['body'];?>
    <?php endforeach; ?>
</div>
<h2>Any more Questions?</h2>
<div class="button">
    <a href="https://web.njit.edu/~ln64/questionsform.html" class="button">Add a New Question</a>

</div>
</body>
</html>