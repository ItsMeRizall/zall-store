<?php

include_once 'config/conn.php';

class User {

    static function login($data=[]) {
        global $conn;
        if (!isset($data['email'], $data['password'])) {
            die('Error: Data is missing.');
        };
        $email = $data['email'];
        $password = $data['password'];
    
        // Tambahkan nama tabel yang sesuai di sini
        $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    
        if (!$result) {
            // Gagal mengeksekusi query, mungkin ada kesalahan SQL
            die('Error: ' . $conn->error);
        }
    
        // Periksa apakah ada baris yang cocok dengan email yang diberikan
        if ($result->num_rows > 0) {
            // Ambil hasil query
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];
    
            // Verifikasi password
            $verify = password_verify($password, $hashedPassword);
    
            if ($verify) {
                // Jika password cocok, kembalikan baris dari database
                return $row;
            } else {
                // Jika password tidak cocok, kembalikan false
                return false;
            }
        } else {
            // Jika tidak ada baris yang cocok dengan email yang diberikan, kembalikan false
            return false;
        }
    }
    

    // static function register($data=[]) {
    //     extract($data);
    //     global $conn;


        
    //     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    //     $sql = "INSERT INTO users SET username = ?, email = ?, password = ? ";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param('sss', $name, $email, $hashedPassword);
    //     $stmt->execute();

    //     var_dump($hashedPassword);

    //     if (!$stmt) {
    //         die('Error: ' . $conn->error);
    //     }        

    //     var_dump($data);

    //     $result = $stmt->affected_rows > 0 ? true : false;
    //     return $result;
    // }

    static function register($data=[]) {
        global $conn;
    
        // Periksa apakah data yang diperlukan telah diberikan
        if (!isset($data['username'], $data['email'], $data['password'], $data['role'])) {
            die('Error: Data is missing.');
        }
    
        // Dapatkan data dari parameter
        $name = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $role = $data['role'];
    
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Buat dan persiapkan statement SQL
        $sql = "INSERT INTO users SET username = ?, email = ?, password = ?, role = ?";
        $stmt = $conn->prepare($sql);
    
        // Periksa apakah statement berhasil dipersiapkan
        if (!$stmt) {
            die('Error: ' . $conn->error);
        }
    
        // Bind parameters
        $stmt->bind_param('ssss', $name, $email, $hashedPassword, $role);
    
        // Eksekusi statement
        $stmt->execute();
    
        $result = $stmt->affected_rows > 0 ? true : false;
    
        return $result;
    }

    static function select($role = '')
    {
        global $conn;
        $sql = "SELECT uid_user as id, username, email FROM users";
        
        // Check if role is provided
        if ($role != '') {
            $sql .= " WHERE role = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $role); // "s" indicates the type is string
        } else {
            $stmt = $conn->prepare($sql);
        }
    
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = [];
        
        // Fetch all results
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        
        $stmt->close();
        $conn->close();
        return $rows;
    }
    

    static function getPassword($email) { 
        global $conn;
        $sql = "SELECT password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function update($data=[]) {}

    static function delete($id='') {}
}