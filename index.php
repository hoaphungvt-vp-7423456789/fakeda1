<?php
require_once './vendor/autoload.php';
require_once './config/database.php';
// helper
require_once './public/helper/dd.php';
require_once './public/helper/baseurl.php';

use App\Controllers\BrandsController;



$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case 'brands-index':
        # code...
        $ctr = new BrandsController;
        $ctr->index();
    case 'brands-create':
        $ctr = new BrandsController;
        $ctr->create();
    case 'brands-store':
        $ctr = new BrandsController;
        $ctr->store();
    case 'brands-edit':
        $ctr = new BrandsController;
        $ctr->edit();
    case 'brands-update':
        $ctr = new BrandsController;
        $ctr->update();
    case 'brands-destroy':
        $ctr = new BrandsController;
        $ctr->destroy();
    case 404:
        require_once './public/errors/404.php';
        break;
    default:
        require_once './public/errors/404.php';
        break;
}
