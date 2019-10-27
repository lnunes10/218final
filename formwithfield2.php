<?php
$the_name=filter_input(INPUT_POST,'the_name');
$body=filter_input(INPUT_POST,'body');
$skills=filter_input(INPUT_POST,'skills[]',FILTER_REQUIRE_ARRAY);
$skills_string=implode($skills,',');



if(empty($the_name ))
    echo 'Enter a valid name';
else if(strlen($the_name)>=3)
    echo $email_address;


if(empty($password )||strlen($password>500)){
    echo 'Enter valid message';}

else
    echo $body;
