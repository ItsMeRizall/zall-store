<?php

include_once './model/product_model.php';

class Homepage_controller_customer
{
    static function index()
    {
        view('customer/homepage', [
            'product' => Product::select()
        ]);
    }
    static function toPromo()
    {
        view('customer/promo');
    }

    static function payment()
    {
        view('customer/payment', [
            'order' => Order::select($_GET['id'])
        ]);
    }

    static function payPayment()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            global $roleRoutes;
            $role = $_SESSION['user']['role'];
            if ($role === 'user') {
                $id = $_GET['id'];
                $targetDir = "img/invoice/";

                $fileName = $_FILES['invoice']['name'];
                $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

                $newFileName = $id . '.' . $fileExt;

                $targetFilePath = $targetDir . $newFileName;

                var_dump($targetFilePath);

                if (move_uploaded_file($_FILES["invoice"]["tmp_name"], $targetFilePath)) {
                    $product = Order::update_Invoice([
                        'invoice' => $newFileName,
                        'order_id' => $id
                    ]);
                    if ($product) {
                        header('Location: ' . BASEURL . 'payment/page?id=' . $id . '&success=true');
                    } else {
                        header('Location: ' . BASEURL . 'payment/page?id=' . $_GET['id'] . '&editFailed=true');
                    }
                }

            } else {
                redirectBasedOnRole($role, $roleRoutes);
            }
        }


    }
}