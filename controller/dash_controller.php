<?php

include_once './model/product_model.php';

class DashboardController {
    static function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dash_page/home', [
                'url' => 'home',
                'product' => Product::rawQuery("SELECT name_product as nama, price as harga, stock, type_product as type, image_product as path_image FROM product")
            ]);
        }
    }

    static function addProduct() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dash_page/add_product', 
            ['url' => 'add_product', 'user' => $_SESSION['user']]);
        }
    }

    static function Product() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dash_page/layout', ['url' => 'contacts', 'contacts' => Product::rawQuery("SELECT c1.phone_number as phone_number, c1.owner as owner, c2.city as city, c1.deleted_at as deleted_at, c1.user_fk as user_fk, c1.id as id FROM contacts as c1, cities as c2 WHERE c1.city_fk = c2.id;"), 'user' => $_SESSION['user']]);
        }
    }
}