<?php

if($_SERVER['REQUEST_METHOD']!=='POST') {
    die('Must be a POST request');
}

$captureFields = array(
    'name',
    'email',
    'city',
    
    'intolerance',
    'respect',
    'generalizing',

    'otherissues',
    'clarification',

);

$query = "INSERT INTO yourmom (created, " . implode(',', $captureFields) . ') VALUES (NOW(), :' . implode(', :', $captureFields) . ')';

$pdo = new PDO('mysql:' . MYSQL_HOST . ';dname=' . MYSQL_NAME, MYSQL_USER, MYSQL_PASS);
$pdo->prepare($query);

$fields = array();

foreach($captureFields as $fieldName) {
    $fields[$fieldName] = isset($_POST[$fieldName])?$_POST[$fieldName]:null;
}


$pdo->execute($fields);

header('Location: ?page=dank');
die();

?>
