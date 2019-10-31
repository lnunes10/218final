<?php
$first_name=filter_input(INPUT_POST,'first_name');
$last_name=filter_input(INPUT_POST,'last_name');
$birthday=filter_input(INPUT_POST,'birthday');
$email=filter_input(INPUT_POST,'email');
$password1=filter_input(INPUT_POST,'password1');


if(empty($first_name)) {
    echo 'Enter a valid name';
}
else {
    echo $first_name;
}
echo "<br><br>";

if(empty($last_name )) {
    echo 'Enter a valid last name';
}
else {
    echo $last_name;
}
    echo "<br><br>";


if(empty($birthday)) {
    echo 'Enter a valid birthday';
}
else {
    echo $birthday;
}
echo "<br><br>";


if(empty($email )) {
    echo 'Enter a valid email address';
}

else if(strpos($email,'@')<0){
    echo 'Enter a valid email address. Needs @';}

else{
    echo $email;
}

echo "<br><br>";

if(empty($password1 )||strlen($password1) <8){
    echo 'Enter a valid email password';
} else {
    echo $password1;
}




