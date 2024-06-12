<?php

include_once './model/product_model.php';

class Homepage_controller_customer{
    static function index(){
            view('customer/homepage', [
                'product' => Product::select()
            ]);
    }
    static function toPromo(){
            view('customer/promo');
    }
}