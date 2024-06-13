<?php

include_once 'model/user_model.php';

class AuthController {
    static function login() {
        view('auth_page/layout', ['url' => 'login']);
    }

    static function register() {
        view('auth_page/layout', ['url' => 'register']);
    }

    static function saveLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
        if ($user) {
            unset($user['password']);
                $_SESSION['user'] = $user;
                $role = $_SESSION['user']['role'];
                if ($role === 'admin'){
                    header('Location: '.BASEURL.'admin');
                } elseif ($role === 'owner' ) {
                    header('Location: '.BASEURL.'dashboard');
                } elseif ($role === 'user') {
                    header('Location: '.BASEURL.'homepage');
                }
            }
            else {
            header('Location: '.BASEURL.'login?failed=true');
        }
    }

    static function saveRegister() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::register([
            'username' => $post['username'], 
            'email' => $post['email'], 
            'password' => $post['password'],
            'role' => 'user'
        ]);

        var_dump($post);
        var_dump($user);

        if ($user) {
            header('Location: '.BASEURL.'login');
        }
        else {
            header('Location: '.BASEURL.'register?failed=true');
        }
    }
    static function saveAdminAccount() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::register([
            'username' => $post['username'], 
            'email' => $post['email'], 
            'password' => $post['password'],
            'role' => 'admin'
        ]);

        var_dump($post);
        var_dump($user);

        if ($user) {
            header('Location: '.BASEURL.'add-admin');
        }
        else {
            header('Location: '.BASEURL.'add-admin?failed=true');
        }
    }

    static function logout() {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header('Location: '.BASEURL);
    }

    static function forgotPassword() {}
}