<?php
if(isset($_GET)) {
    $template = $_GET['game'];
}
else {
    $template = 'home';
}


if(empty($layout))$layout = 'default';
require_once 'resources/private/layouts/' . $layout . '.php';