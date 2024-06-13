<?php

include_once './model/order_model.php';

final class admin_controller
{
    static function index()
    {
        global $roleRoutes;
        $role = $_SESSION['user']['role'];
        if ($role === 'admin') {
            view('admin/dashboard_admin', [
                'url' => 'home',
                'order' => Order::rawQuery("SELECT orders.order_id ,orders.created_at, users.username,orders.id_admin, orders.no_hp, orders.id_game, orders.server, product.name_product, product.type_product, orders.status
                    FROM orders
                    INNER JOIN product ON product.id = orders.product_id
                    INNER JOIN users ON users.uid_user = orders.uid_user
                    WHERE id_admin IS NOT NULL;")
            ]);
        } else {
            redirectBasedOnRole($role, $roleRoutes);
        }
    }

    static function viewAmbil_orderan()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'admin') {
                view('admin/ambil_orderan', [
                    'url' => 'home',
                    'order' => Order::rawQuery("SELECT orders.order_id ,orders.created_at, users.username, orders.id_game,orders.no_hp, orders.server, product.name_product, product.type_product, orders.status, orders.id_admin
                                            FROM orders
                                            INNER JOIN product ON product.id = orders.product_id
                                            INNER JOIN users ON users.uid_user = orders.uid_user;
                                            ")
                ]);
            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }

    static function ambil_orderan()
    {

        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'admin') {
                $post = array_map('htmlspecialchars', $_POST);
                $product = Order::update([
                    'id_admin' => $_SESSION['user']['uid_user'],
                    'id' => $_GET['id']
                ]);
                if ($product) {
                    header('Location: ' . BASEURL . 'admin/');
                } else {
                    header('Location: ' . BASEURL . 'admin/trx?id=' . $_GET['id'] . '&editFailed=true');
                }
            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }

        }

    }

    static function selesaikan_orderan()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'admin') {
                $post = array_map('htmlspecialchars', $_POST);
                $product = Order::update_status([
                    'status' => "success",
                    'id' => $_GET['id']
                ]);
                if ($product) {
                    header('Location: ' . BASEURL . 'admin/');
                } else {
                    header('Location: ' . BASEURL . 'admin/trx?id=' . $_GET['id'] . '&failedAdmin=true');
                }
            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }

    static function history_admin()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'admin') {
                view('admin/riwayat_admin', [
                    'url' => 'home',
                    'order' => Order::rawQuery("SELECT orders.order_id ,orders.created_at, users.username, orders.id_game,orders.no_hp, orders.server, product.name_product, product.type_product, orders.status, orders.id_admin
                                                FROM orders
                                                INNER JOIN product ON product.id = orders.product_id
                                                INNER JOIN users ON users.uid_user = orders.uid_user;
                                                ")
                ]);
            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }
}
