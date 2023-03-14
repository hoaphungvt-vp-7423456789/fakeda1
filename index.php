<?php

use App\Controllers\BrandsController;

require_once './vendor/autoload.php';
// config
require_once './config/database.php';
require_once './config/baseurl.php';
// helper
require_once './public/helper/dd.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case 'brands-index':
        # code...
        $ctr = new BrandsController;
        $ctr->index();
        break;
    case 'brands-create':
        $ctr = new BrandsController;
        $ctr->create();
        break;
    case 'brands-store':
        $ctr = new BrandsController;
        $ctr->store();
        break;
    case 'brands-edit':
        $ctr = new BrandsController;
        $ctr->edit();
        break;
    case 'brands-update':
        $ctr = new BrandsController;
        $ctr->update();
        break;
    case 'brands-destroy':
        $ctr = new BrandsController;
        $ctr->destroy();
        break;
    case 404:
        require_once './public/errors/404.php';
        break;
    default:
        require_once './public/errors/404.php';
        break;
}