<?php
$email=filter_input(INPUT_POST,$email);
$password1=filter_input(INPUT_POST,'password1');
$first_name=filter_input(INPUT_POST,'first_name');
$last_name=filter_input(INPUT_POST,'last_name');
$birthday=filter_input(INPUT_POST,'birthday');
$action=filter_input(INPUT_POST,'action');
if (empty($first_name)){
    $message='You must enter a last name';
}
else{
    $message='It works.';
    if (empty($last_name)){
        $message='You must enter a last name';
    }
    else{
        $message='It works.';
        if (empty($birthday)){
            $message='You must enter a date of birth';
        }
        else{
            $message='It works.';

if (empty($email)){
    $message='You must enter an email.';
}
else{
    $message='It works.';
}
if (strpos($email,'@')>=0){
    $message='It works';
}
else{
    $message='invalid ';
}

if (empty($password1)){
    $message='You must enter an email.';
}
else{
    $message='It works.';
}
if(strlen($password1>=8)) {
    $message = 'valid password';
}
else {
    $message = 'Use another password combination';
}
        }