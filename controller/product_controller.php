<?php

include_once 'model/product_model.php';

class ProductController {
    static function add() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dash_page/layout', ['url' => 'view/contact_crud_page/add']);
        }
    }


    static function saveProduct() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $fileName = $_FILES['product_image']['name'];
            $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

            $newFileName = 'product_' . date('YmdHis') . '.' . $fileExt;

            $product = Product::insert([
                'name' => $post['name_product'], 
                'price' => $post['price'],
                'stock' => $post['stock'],
                'type_product' => $post['type_product'],
            ]);
            
            if ($product) {
                header('Location: '.BASEURL.'dashboard/');
            }
            else {
                header('Location: '.BASEURL.'dashboard/add_product?addFailed=true');
            }
        }
    }


    static function edit() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dash_page/layout', [
                'url' => 'view/contact_crud_page/edit',
                'product' => Product::select($_GET['id'])
            ]);
        }
    }

    static function saveEditProduct() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $product = Product::update([
                'id' => $_GET['id'],
                'name' => $post['name_product'], 
                'price' => $post['price'],
                'stock' => $post['stock'],
                'type_product' => $post['type_product']
            ]);
            if ($product) {
                header('Location: '.BASEURL.'dashboard/');
            }
            else {
                header('Location: '.BASEURL.'product/edit?id='.$_GET['id'].'&editFailed=true');
            }
        }
    }

    static function remove() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $product = Product::delete($_GET['id']);
            var_dump($product);
            if ($product) {
                header('Location: '.BASEURL.'dashboard');
            }
            else {
                header('Location: '.BASEURL.'dashboard/product?removeFailed=true');
            }
        }
    }

    static function report() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $contacts = Product::rawQuery("SELECT COUNT(c1.id) as user_count, c2.city as user_city FROM contacts as c1, cities as c2 WHERE c1.city_fk = c2.id GROUP BY user_city;");
            if ($contacts) {
                view('component/report', ['contacts' => $contacts]);
            }
            else {
                header('Location: '.BASEURL.'dashboard/contacts?removeFailed=true');
            }
        }
    }
}