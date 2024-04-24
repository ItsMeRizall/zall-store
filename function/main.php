<?php
function view($page, $data=[]) {
    extract($data);
    include 'view/'.$page.'.php';
}

$urls = [];
function route($url, $method, $callback) {
    global $urls;
    if ($url == '/') {
        $url = '';
    }
    $urls[strtoupper($method)][$url] = $callback;
    $urls['routes'][] = $url;
    $urls['routes'] = array_unique($urls['routes']);
}

function freshdb() {
    require_once 'model/user_model.php';
    require_once 'model/contact_model.php';
    global $conn;
    $conn->query('DELETE FROM users');
    $conn->query('ALTER TABLE users AUTO_INCREMENT = 1');
    $conn->query('DELETE FROM contacts');
    $conn->query('ALTER TABLE contacts AUTO_INCREMENT = 1');

    User::register([
        'name' => $_ENV['NAME'],
        'email' => $_ENV['EMAIL'],
        'password' => $_ENV['PASSWORD']
    ]);

    $contacts = array(
        ['080123456789', 'Alice', '2023-04-15 08:30:00'],
        ['080234567890', 'Bob', '2023-04-16 10:45:00'],
        ['080345678901', 'Charlie', '2023-04-17 12:15:00'],
        ['080456789012', 'David', '2023-04-18 14:30:00'],
        ['080567890123', 'Emily', '2023-04-19 16:45:00'],
        ['080678901234', 'Frank', '2023-04-20 18:15:00'],
        ['080789012345', 'Grace', '2023-04-21 20:30:00'],
        ['080890123456', 'Henry', '2023-04-22 22:45:00'],
        ['080901234567', 'Isabel', '2023-04-23 00:15:00'],
        ['080012345678', 'Jack', '2023-04-24 02:30:00']
    );

    foreach ($contacts as $c) {
        Contact::insert([
                'phone_number' => $c[0],
                'owner' => $c[1],
                'inserted_at'=> $c[2],
                'user_fk' => 1
                ]);
    }
    view('freshdb');
}
