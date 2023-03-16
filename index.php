<?php

use App\Controllers\BrandsController;
use App\Controllers\ColorController;
use App\Controllers\HomeController;
use App\Controllers\SizeController;
use App\Controllers\ProductController;
use App\Controllers\VariationController;


require_once './vendor/autoload.php';
// config
require_once './config/database.php';
require_once './config/baseurl.php';
// helper
require_once './public/helper/dd.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case '':
        $ctr = new HomeController;
        $ctr->homePage();
        break;
    case 'detail':
        $ctr = new HomeController;
        $ctr->detail();
        break;
    case 'cart':
        $ctr = new HomeController;
        $ctr->cart();
        break;
    case 'pay':
        $ctr = new HomeController;
        $ctr->pay();
        break;
    case 'paysuccess':
        $ctr = new HomeController;
        $ctr->paySuccess();
        break;
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
    case 'color-index':
        # code...
        $ctr = new ColorController;
        $ctr->index();
        break;
    case 'color-create':
        $ctr = new ColorController;
        $ctr->create();
        break;
    case 'color-store':
        $ctr = new ColorController;
        $ctr->store();
        break;
    case 'color-edit':
        $ctr = new ColorController;
        $ctr->edit();
        break;
    case 'color-update':
        $ctr = new ColorController;
        $ctr->update();
        break;
    case 'color-destroy':
        $ctr = new ColorController;
        $ctr->destroy();
        break;
    case 'size-index':
        # code...
        $ctr = new SizeController;
        $ctr->index();
        break;
    case 'size-create':
        $ctr = new SizeController;
        $ctr->create();
        break;
    case 'size-store':
        $ctr = new SizeController;
        $ctr->store();
        break;
    case 'size-edit':
        $ctr = new SizeController;
        $ctr->edit();
        break;
    case 'size-update':
        $ctr = new SizeController;
        $ctr->update();
        break;
    case 'size-destroy':
        $ctr = new SizeController;
        $ctr->destroy();
        break;
    case 'products-index':
        # code...
        $ctr = new ProductController();
        $ctr->index();
        break;
    case 'products-create':
        $ctr = new ProductController();
        $ctr->create();
        break;
    case 'products-store':
        $ctr = new ProductController();
        $ctr->store();
        break;
    case 'products-edit':
        $ctr = new ProductController();
        $ctr->edit();
        break;
    case 'products-update':
        $ctr = new ProductController();
        $ctr->update();
        break;
    case 'products-destroy':
        $ctr = new ProductController();
        $ctr->destroy();
        break;
    case 'variation-index':
        # code...
        $ctr = new VariationController();
        $ctr->index();
        break;
    case 'variation-create':
        $ctr = new VariationController();
        $ctr->create();
        break;
    case 'variation-store':
        $ctr = new VariationController();
        $ctr->store();
        break;
    case 'variation-edit':
        $ctr = new VariationController();
        $ctr->edit();
        break;
    case 'variation-update':
        $ctr = new VariationController();
        $ctr->update();
        break;
    case 'variation-destroy':
        $ctr = new VariationController();
        $ctr->destroy();
        break;
    case 404:
        require_once './public/errors/404.php';
        break;
    default:
        require_once './public/errors/404.php';
        break;
}
