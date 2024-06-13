<?php

include_once 'model/user_model.php';

class user_controller
{
    static function remove() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $users = User::delete($_GET['id']);
            var_dump($users);
            if ($users) {
                header('Location: '.BASEURL.'dashboard');
            }
            else {
                header('Location: '.BASEURL.'dashboard/view-admin?removeFailed=true');
            }
        }
    }
}
