<?php
class Order
{
    static function select($id = '')
    {
        global $conn;
        $sql = "SELECT orders.order_id, orders.nickname, orders.id_game, orders.server, product.name_product, product.type_product, orders.status, orders.created_at, product.price as harga FROM orders INNER JOIN product ON orders.product_id = product.id";
        if ($id != '') {
            $sql .= " WHERE order_id = $id";
        }
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

    static function insert($data = [])
    {
        extract($data);
        global $conn;
        $sql = "INSERT INTO orders SET product_id = ?, uid_user = ?, status = ?, id_game = ? , server = ? , payment = ?, nickname = ?, no_hp = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iissssss', $product_id, $uid_user, $status, $id_game, $server, $payment, $nickname, $no_hp);        
        $stmt->execute();
    
        if ($stmt->affected_rows > 0) {
            // Mendapatkan ID dari entri baru
            $order_id = $stmt->insert_id;
            return ['result' => true, 'order_id' => $order_id];
        } else {
            return ['result' => false];
        }
    }
    

    static function update($data = [])
    {
        extract($data);
        global $conn;
        $sql = "UPDATE orders SET id_admin = ? WHERE order_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ii',$id_admin, $id);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        $conn->close();
        return $result;
    }
    static function update_Invoice($data = [])
    {
        extract($data);
        global $conn;
        $sql = "UPDATE orders SET invoice = ? WHERE order_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si',$invoice, $order_id);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        $conn->close();
        return $result;
    }

    static function update_status($data = [])
    {
        extract($data);
        global $conn;
        $sql = "UPDATE orders SET status = ? WHERE order_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si',$status, $id);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        $conn->close();
        return $result;
    }

    static function delete($id = '')
    {
        global $conn;
        $result = '';
        $deleted_at = date('Y-m-d H:i:s', strtotime('now'));
        $sql = "UPDATE product SET deleted_at = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si', $deleted_at, $id);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
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
        return $rows;
    }

}