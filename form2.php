<?php
$email=filter_input(INPUT_POST,$email);
$password1=filter_input(INPUT_POST,'password1');
$first_name=filter_input(INPUT_POST,'first_name');
$last_name=filter_input(INPUT_POST,'last_name');
$birthday=filter_input(INPUT_POST,'birthday');

if(empty($first_name ))
    echo 'Enter a valid name';
else
    echo $first_name;
if(empty($last_name ))
    echo 'Enter a valid name';
else
    echo $last_name;
if(empty($birthday))
    echo 'Enter a valid name';
else
    echo $birthday;

if(empty($email_address )||(strpos($email_address,'@')<0)){
    echo 'Enter a valid email address';}
else{
    echo $email_address;}
if(empty($password )||strlen($password<8)){
    echo 'Enter a valid email password';}

else
    echo $password;




