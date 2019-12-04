<?php
$dsn = 'mysql:host=sql.njit.edu;dbname=ln64';
$username = 'ln64';
$password = '6sBfQdRC';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
}
?>