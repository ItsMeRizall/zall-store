<?php

include_once './model/product_model.php';
include_once './model/order_model.php';

class order_controller_customer
{
    static function index()
    {
        view('customer/order', [
            'product' => Product::select()
        ]);
    }

    static function toOrderHistory()
    {
        view('customer/order_history', [
            'history' => Order::select()
        ]);
    }

    static function saveOrder()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            $post = array_map('htmlspecialchars', $_POST);
            $uid_user = $_SESSION['user']['uid_user'];

            $product = Order::insert([
                'product_id' => intval($post['id_product']),
                'uid_user' => intval($uid_user),
                'status' => "pending",
                'id_game' => $post['idGame'],
                'server' => $post['server'],
                'payment' => $post['payment'],
                'nickname' => $post['nickname'],
                'no_hp' => $post['no_hp'],
            ]);

            if ($product['result']) {
                header('Location: ' . BASEURL . 'payment/page?id='. $product['order_id']);
            } else {
                header('Location: ' . BASEURL . 'order?orderfailed=true');
            }
        }
    }

    static function rawQuery($sql)
    {
        global $conn;
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }
}