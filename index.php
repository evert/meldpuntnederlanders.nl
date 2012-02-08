<?php

include 'config.php';

$page = isset($_GET['page'])?$_GET['page']:'home';

ob_start();

switch($page) {
    case 'home' :
    case 'melden' :
    case 'dank' : 
    case 'submit' :
    case 'about' : 
        include 'pages/'.$page.'.php';
        break;

}

$content = ob_get_clean();

include 'template.php';

?>
