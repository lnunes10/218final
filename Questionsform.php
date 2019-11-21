<?php
require('database.php');

$the_name=filter_input(INPUT_POST,'the_name');
$body=filter_input(INPUT_POST,'body');
$skills=filter_input(INPUT_POST,'skills',FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_REQUIRE_ARRAY);
$ownerid = filter_input(INPUT_POST, 'ownerid');
$skills_string=explode($skills,',');
$valid_form=true;

if(!empty($the_name )) {


    if (strlen($the_name) < 3) {
        echo 'Name should be at least 3 characters';
        $valid_form = false;

    }


    echo "<br><br>";

    if (empty($body)) {

        echo 'Enter valid message';
        $valid_form = false;
    } else if (strlen($body) > 500) {
        echo 'Enter less than 500 characters';
        $valid_form = false;
    }


    echo "<br><br>";

    if (count($skills) < 2) {
        echo 'Add at least 2 skills';
        $valid_form = false;
    }

    if ($valid_form == true) {
        $query = 'INSERT INTO questions
(ownerid,title,body,skills)
VALUES 
(:ownerid,:the_name,:body,:skills)';


        $statement = $db->prepare($query);


        $statement->bindValue(':ownerid', $ownerid);
        $statement->bindValue(':name1', $the_name);
        $statement->bindValue(':body', $body);
        $statement->bindValue(':skills', $skills);


        $statement->execute();

        $statement->closeCursor();
        header("Location:display.php?ownerid=$ownerid");
    }
}
else{
    echo"invalid form";
}
