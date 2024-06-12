<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

# GET
Router::url('/', 'get', 'AuthController::login');
Router::url('login', 'get', 'AuthController::login');
Router::url('register', 'get', 'AuthController::register');
Router::url('product', 'get', 'DashboardController::index');
Router::url('homepage', 'get', 'Homepage_controller_customer::index');
Router::url('promo', 'get', 'Homepage_controller_customer::toPromo');
Router::url('order', 'get', 'order_controller_customer::index');
Router::url('dashboard/edit-product', 'get', 'DashboardController::viewEditProduct');
Router::url('product/remove', 'get', 'Productcontroller::remove');
Router::url('order-history', 'get', 'order_controller_customer::toOrderHistory');
Router::url('dashboard', 'get', 'DashboardController::dashboard_owner');
Router::url('add-admin', 'get', 'DashboardController::viewAddAdmin');
Router::url('view-admin', 'get', 'DashboardController::viewDataAdmin');





Router::url('dashboard/add-product', 'get', 'DashboardController::viewAddProduct');
Router::url('dashboard/contacts', 'get', 'DashboardController::contacts');
Router::url('dashboard/logout', 'get', 'AuthController::logout');
Router::url('contacts/add', 'get', 'ContactController::add');
Router::url('contacts/edit', 'get', 'ContactController::edit');
Router::url('contacts/remove', 'get', 'ContactController::remove');
Router::url('freshdb', 'get', 'freshdb');
Router::url('report', 'get', 'ContactController::report');

# POST
Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('register', 'post', 'AuthController::saveRegister');
Router::url('dashboard/add-product', 'post', 'Productcontroller::saveProduct');
Router::url('dashboard/add-admin', 'post', 'AuthController::saveAdminAccount');
Router::url('dashboard/edit-product', 'post', 'Productcontroller::saveEditProduct');
Router::url('contacts/edit', 'post', 'ContactController::saveEdit');
Router::url('order/new-order', 'post', 'order_controller_customer::saveOrder');

new Router();