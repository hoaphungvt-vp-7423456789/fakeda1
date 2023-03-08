<?php
require_once './app/controllers/CategoryController.php';
require_once './app/models/BaseModel.php';
require_once './app/models/Category.php';
// helper

require_once './public/helper/dd.php';
require_once './public/helper/baseurl.php';

use App\Controllers\CategoryController;



$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case '':
        # code...
        $ctr = new CategoryController;
        $ctr->index();
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
