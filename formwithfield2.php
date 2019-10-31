<?php
$the_name=filter_input(INPUT_POST,'the_name');
$body=filter_input(INPUT_POST,'body');
$skills=filter_input(INPUT_POST,'skills',FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_REQUIRE_ARRAY);
$skills_string=explode($skills,',');

if(empty($the_name )) {
    echo 'Enter a valid name';
}
else if(strlen($the_name)<3) {
    echo 'Name should be at least 3 characters';
}
else {
    echo $the_name;
}

echo "<br><br>";

if(empty($body ))
{
    echo 'Enter valid message';
}
else if (strlen($body)>500){
    echo 'Enter less than 500 characters';
}
else {
    echo $body;
}
echo "<br><br>";

if (count($skills)<2) {
    echo 'Add at least 2 skills';
} else {
    print_r($skills);
    echo $skills_string;
}

