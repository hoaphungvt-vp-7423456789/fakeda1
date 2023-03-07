<?php
// helper
require_once './public/helper/dd.php';
require_once './public/helper/baseurl.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case '':
        # code...
        break;
    case 404:
        # code...
        require_once './public/errors/404.php';
        break;
    default:
        # code...
        require_once './public/errors/404.php';
        break;
}
