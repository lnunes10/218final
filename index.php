<?php
$email_address=filter_input(INPUT_POST,$email_address);
$password=filter_input(INPUT_POST,'password');
$action=filter_input(INPUT_POST,'action');

    if(empty($email_address ))
    echo 'Enter a valid email address';
    else if(strpos($email_address,'@')<0)
        echo 'Enter a valid email address';
    else{
    echo $email_address;}


if(empty($password )||strlen($password<8)){
    echo 'Enter a valid email password';}

else
    echo $password;