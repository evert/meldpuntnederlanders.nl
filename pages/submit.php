<?php

if($_SERVER['REQUEST_METHOD']!=='POST') {
    die('Must be a POST request');
}

$captureFields = array(
    'name',
    'email',
    'city',
);


print_r($_POST);

?>
