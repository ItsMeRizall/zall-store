<?php
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADD DATA</title>
    <link rel="stylesheet" href="<?= BASEURL ?>style/css/style.css" />
    <!-- <link rel="stylesheet" href="<?= BASEURL; ?>/css/input.css" />
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/output.css" /> -->

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="wrapper-all">
        <div class="sidebar">
            <div class="top">
                <div class="title">
                    <img src="<?= BASEURL ?>img/logo-movil.png" alt="logo" />
                    <h2>Zall Store</h2>
                </div>
                <ul>
                    <li class="active">
                        <a href="<?= BASEURL; ?>dashboard"><img
                                src="<?= BASEURL; ?>/img/ico1.png" /><span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= BASEURL; ?>product"><img
                                src="<?= BASEURL; ?>/img/ico3.png" /><span>Product</span></a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>view-admin"><img
                                src="<?= BASEURL; ?>/img/ico3.png" /><span>Admin</span></a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>dashboard/add-product"><img src="<?= BASEURL; ?>/img/ico7.png" /><span>Add Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="<?= BASEURL; ?>/img/ico7.png" /><span>Add Admin</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="account">
                <div class="profile">
                    <img src="<?= BASEURL; ?>/img/profile.jpg" alt="image">
                    <div class="name">
                        <h4>Rizal</h4>
                        <p>Admin</p>
                    </div>
                </div>
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg></span>
            </div>
        </div>

        <div class="main-content ">
            <div class="p-10 bg-white">
                <h2 class="font-bold text-3xl">Halo <?= $user['username']; ?> 👋🏼</h2>
                <h3 class="font-bold mt-4 mb-4 text-lg">ADD ACCOUNT ADMIN</h3>
                <form method="post" action="<?= urlpath('dashboard/add-admin'); ?>" enctype="multipart/form-data">
                    <div class="mb-6">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="username" name="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-10/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Username" required />
                    </div>
                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-10/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="emailexample@gmail.com" required />
                    </div>
                    <div class="mb-6">
                        <label for="Password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="Password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-10/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Password" required />
                    </div>
                    <div class="mb-6">
                        <label for="confirmation_password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmation
                            Password</label>
                        <input type="password" id="Type" name="confirmation_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-10/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Retype Password" required />
                    </div>


                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-10/12 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>

        </div>
    </div>
</body>

<script>

</script>

</html>