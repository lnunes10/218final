<?php
require('model/database.php');
$email_address=filter_input(INPUT_POST, 'email_address');
$password=filter_input(INPUT_POST,'password');
$valid=true;

    if(!empty($email_address )||strpos($email_address,'@')<0) {


        echo "<br><br>";


        /*if (empty($password) || strlen($password) < 8) {
            echo 'Enter a valid email password';
            $valid = false;
        }*/

        if ($valid == true) {
            $query ='SELECT * FROM accounts
WHERE email=:email_address AND password=:password';

            $statement=$db->prepare($query);

            $statement->bindValue(':email_address',$email_address);
            $statement->bindValue('password',$password);

            $statement->execute();


            $accounts=$statement->fetchAll();

            $statement->closeCursor();
            $ownerid = $accounts[0]['id'];

            header("Location:display.php?ownerid=$ownerid");
        }
    }
    else{
        echo"invalid form";
    }