<?php

namespace App\Controllers;

use App\Models\Home;

class HomeController extends BaseController
{

    public function homePage(){
        require_once './app/views/client/homepage.php';
    }
    public function detail(){
        require_once './app/views/client/detail.php';
    }
    public function cart(){
        require_once './app/views/client/cart.php';
    }
    public function pay(){
        require_once './app/views/client/pay.php';
    }
    public function paySuccess(){
        require_once './app/views/client/paysuccess.php';
    }
}
