<?php

require('database.php');

$first_name=filter_input(INPUT_POST,'first_name');
$last_name=filter_input(INPUT_POST,'last_name');
$birthday=filter_input(INPUT_POST,'birthday');
$email=filter_input(INPUT_POST,'email');
$password1=filter_input(INPUT_POST,'password1');

$formValid = true;

if(!empty($first_name)) {


    echo "<br><br>";

    if (empty($last_name)) {
        echo 'Enter a valid last name';
        $formValid = false;
    }

    echo "<br><br>";


    if (empty($birthday)) {
        echo 'Enter a valid birthday';
        $formValid=false;
    }
    echo "<br><br>";


    if (empty($email) || strpos($email, '@') < 0) {
        echo 'Enter a valid email address';
        $formValid=false;
    }

    echo "<br><br>";

    if (empty($password1) || strlen($password1) < 8){

        echo 'Enter a valid email password';
        $formValid=false;
    }



    if ($formValid == true) {
        $query = 'INSERT INTO accounts
(fname,lname,birthday,email,password)
    VALUES
    ( :fname, :lname, :birthday, :email, :password)';

        $statement = $db->prepare($query);

        $statement->bindValue(':fname', $first_name);
        $statement->bindValue(':lname', $last_name);
        $statement->bindValue(':birthday', $birthday);
        $statement->bindValue(':password', $password1);
        $statement->bindValue(':email', $email);

        $statement->execute();

        $statement->closeCursor();
        header("Location:display.php?ownerid=$ownerid");
    }
}

else{
    echo "invalid form";
}





