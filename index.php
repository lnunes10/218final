<?php
$email_address=filter_input(INPUT_POST,$email_address);
$password=filter_input(INPUT_POST,'password');
$action=filter_input(INPUT_POST,'action');
if (empty($email_address)){
    $message='You must enter an email.';
}
else{
    $message='It works.';
}
if (strpos($email_address,'@')>=0){
    $message='It works';
}
else{
    $message='invalid ';
}

if (empty($password)){
    $message='You must enter an email.';
}
else{
    $message='It works.';
}
