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

    static function saveAdd() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $product = Product::insert([
                'phone_number' => $post['phone_number'], 
                'owner' => $post['owner'],
                'user_fk' => $_SESSION['user']['id']
            ]);
            
            if ($product) {
                header('Location: '.BASEURL.'dashboard/contacts');
            }
            else {
                header('Location: '.BASEURL.'product/add?addFailed=true');
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

    static function saveEdit() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Product::update([
                'id' => $_GET['id'],
                'phone_number' => $post['phone_number'],
                'owner' => $post['owner']
            ]);
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/product');
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
            $contact = Product::delete($_GET['id']);
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/product');
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