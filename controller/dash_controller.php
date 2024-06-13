<?php

include_once './model/product_model.php';
include_once './model/order_model.php';
include_once './model/user_model.php';

class DashboardController
{
    static function index()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'owner') {
                view('dash_page/home', [
                    'url' => 'home',
                    'product' => Product::rawQuery("SELECT id as id_product, name_product as nama, price as harga, stock, type_product as type FROM product WHERE deleted_at IS NULL")
                ]);
            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }

    static function dashboard_owner()
    {
        global $conn;
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'owner') {
                view('dash_page/dashboard_owner', [
                    'url' => 'home',
                    'total_order' => Order::rawQuery("SELECT COUNT(*) as total FROM orders"),
                    'order_pending' => Order::rawQuery("SELECT COUNT(*) as total FROM orders WHERE status = 'pending'"),
                    'order_succces' => Order::rawQuery("SELECT COUNT(*) as total FROM orders WHERE status = 'success'"),
                    'order_history' => Order::rawQuery("SELECT orders.order_id ,orders.created_at, users.username, orders.id_game, orders.server, product.name_product, product.type_product, orders.status, admin.username as admin
    FROM orders
    INNER JOIN product ON product.id = orders.product_id
    INNER JOIN users ON users.uid_user = orders.uid_user
    INNER JOIN users as admin on orders.id_admin = admin.uid_user")
                ]);
    
                $conn->close();
            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }


    static function viewAddAdmin()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'owner') {
                view(
                    'dash_page/add_acc_admin',
                    ['url' => 'add_product', 'user' => $_SESSION['user']]
                );
            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }

    static function viewEditProduct()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'owner') {
                view('dash_page/edit_product', [
                    'url' => 'add_product',
                    'user' => $_SESSION['user'],
                    'product' => Product::rawQuery("SELECT id as id_product, name_product as nama, price as harga, stock, type_product as type FROM product where id = " . $_GET["id"])
                ]);
            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }

    static function viewAddProduct()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'owner') {
                view(
                    'dash_page/add_product',
                    ['url' => 'add_product', 'user' => $_SESSION['user']]
                );

            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }
    static function viewDataAdmin()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'owner') {
                view(
                    'dash_page/admin',
                    [
                        'url' => 'add_product',
                        'user' => $_SESSION['user'],
                        'admin_account' => User::select("admin")
                    ]
                );

            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }
    }

    static function Product()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            view('dash_page/layout', ['url' => 'contacts', 'contacts' => Product::rawQuery("SELECT c1.phone_number as phone_number, c1.owner as owner, c2.city as city, c1.deleted_at as deleted_at, c1.user_fk as user_fk, c1.id as id FROM contacts as c1, cities as c2 WHERE c1.city_fk = c2.id;"), 'user' => $_SESSION['user']]);
        }
    }
}