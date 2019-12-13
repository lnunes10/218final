<?php
require('model/database.php');
require('model/accounts_db.php');
require('model/questions_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_login';
    }
}

switch ($action) {
    case 'show_login': {
        include('views/login.php');
        break;
    }

    case 'validate_login': {
        $email = filter_input(INPUT_POST, 'email_address');
        $password = filter_input(INPUT_POST, 'password');

        if ($email == NULL || $password == NULL) {
            echo "Email and Password not included";
        } else {
            $userId = validate_login($email, $password);
            echo "User ID IS: $userId";
            if ($userId == false) {
                header("Location: .?action=display_registration");
            } else {
                header("Location: .?action=display_questions&userId=$userId");
            }
        }

        break;
    }

    case 'display_registration': {
        include('views/Registration_form.php');
        break;
    }

    case 'add_user':{
        $fname=filter_input(INPUT_POST,'first_name');
        $lname=filter_input(INPUT_POST,'last_name');
        $birthday=filter_input(INPUT_POST,'birthday');
        $email=filter_input(INPUT_POST,'email');
        $password=filter_input(INPUT_POST,'password1');
        if ($fname==NULL ||$lname==NULL || $birthday==NULL || $email==NULL || $password==NULL){
            echo "error";
        }
        else {
            $userId=add_user($fname,$lname,$birthday,$email,$password);
            header("Location: .?action=display_questions&userId=$userId");
        }

        break;
    }

    case 'display_questions': {
        $userId = filter_input(INPUT_GET, 'userId');
        if ($userId == NULL || $userId < 0) {
            header('Location: .?action=show_login');
        } else {
            $questions = get_users_questions($userId);
            include('views/display_questions.php');
        }
        break;
    }
    case 'add_question':{
        $userId=filter_input(INPUT_POST,'ownerId');
        $title=filter_input(INPUT_POST,'title');
        $body=filter_input(INPUT_POST,'body');
        $skills=filter_input(INPUT_POST,'skills');

        if ($userId == NULL) {
            header('Location: .?action=show_login');
        } else {
             add_question($userId,$title,$body,$skills);
            header("Location: .?action=display_questions&userId=$userId");
        }
        break;

    }
    case 'specific_question':{
        $id=filter_input(INPUT_POST,'id');
        if($id==NULL){
            echo "error with this";
        }
        else{
            specific_question($id);
            header("Location:.?action=display_questions&userId=$userId");
        }
    }
    case 'delete_question':{
        $id=filter_input(INPUT_POST,'id');
        if($id==NULL){
            echo "error";
}
        else{
    delete_question($id);
    header("Location:.?action=display_questions&userId=$userId");
    break;
}

    }

    case 'display_question_form': {
        $userId = filter_input(INPUT_GET, 'userId');
        include('views/question_form.php');
        break;
    }

    default: {
        echo "error";
    }
    break;
}
