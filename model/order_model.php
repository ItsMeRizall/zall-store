<?php
class Order
{
    static function select($id = '')
    {
        global $conn;
        $sql = "SELECT orders.order_id, orders.id_game, orders.server, product.name_product, product.type_product, orders.status, orders.created_at FROM orders INNER JOIN product ON orders.product_id = product.id";
        if ($id != '') {
            $sql .= " WHERE id = $id";
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

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function update($data = [])
    {
        extract($data);
        global $conn;
        date_default_timezone_set('Asia/Jakarta');
        $updated_at = date('Y-m-d H:i:s', strtotime('now'));
        $sql = "UPDATE product SET name_product = ?, price = ?, stock = ? , type_product = ?, updated_at = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('siissi', $name, $price, $stock, $type_product,$updated_at, $id);
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