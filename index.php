<?php
error_reporting(0);
include_once 'config.php';


if(!empty($_GET['game'])) {
    $template = $_GET['game'];
}
else {
    $template = 'home';
}


if(empty($layout))$layout = 'default';
require_once 'resources/private/layouts/' . $layout . '.php';