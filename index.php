<?php

$page = isset($_GET['page'])?$_GET['page']:'home';

ob_start();

switch($page) {
    case 'home' :
        include 'pages/home.php';
        break;
    case 'melden' :
        include 'pages/melden.php';
        break;
}

$content = ob_get_clean();

include 'template.php';

?>
