<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All - Shop HomePage</title>
    <link rel="stylesheet" href="<?= BASEURL ?>style/css/output.css" />
    <link rel="stylesheet" href="<?= BASEURL ?>style/css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    * {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body class="bg-[#EEEEEE]">

    <!-- MavBar -->
    <section name="Navbar">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class=" container flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="<?= BASEURL ?>img/logo-movil.png" alt="logo" />
                    <h2 class="font-semibold text-2xl">All-Shop</h2>
                </a>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <?php if (!isset($_SESSION['user'])) { ?>
                        <a href="<?= urlpath("login") ?>"
                            class="w-full text-center hover:cursor-pointer bg-[#5932EA] rounded-xl py-2 px-5 text-white">Login</a>
                    <?php } else { ?>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="<?= BASEURL ?>img/profile.jpg" alt="user photo">
                        </button>
                    <?php } ?>
                    <!-- Dropdown menu -->
                    <div class="z-50 my-4 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                            </li>
                            <li>
                                <a href="<?= urlpath('logout'); ?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="<?= BASEURL ?>homepage"
                                class="block py-2 px-3 text-gray-900 bg-blue-700 rounded md:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="<?= urlpath('promo') ?>"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Promo</a>
                        </li>
                        <li>
                            <a href="<?= urlpath('order-history') ?>"
                                class="block py-2 px-3 text-gray-900 md:text-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Order</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </section>

    <div class="main-content flex justify-center bg-[#EEEEEE]">
        <!-- <h2>Halo <?= $user['username']; ?> 👋🏼</h2> -->
        <div class="container bg-white p-10 rounded-2xl">
            <h3 class="font-semibold text-2xl">Order History</h3>
            <table>
                <thead>
                    <tr>
                        <th>Tanggal Order</th>
                        <th>ID Game</th>
                        <th>Product</th>
                        <th>Type Product</th>
                        <th>Detail</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <?php
                if (isset($history)) {
                    foreach ($history as $p) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $p['created_at']; ?></td>
                                <td><?= $p['id_game'] . " (" . $p['server'] . ")" ?></td>
                                <td><?= $p['name_product']; ?></td>
                                <td><?= $p['type_product']; ?></td>
                                <td><a class="italic underline" href="#">Detail</a></td>
                                <td>
                                    <div class="aksi-btn">
                                        <?php
                                        $status = $p['status'];
                                        $bgColor = '';
                                        $textColor = '';

                                        if ($status === 'success') {
                                            $bgColor = 'bg-[#16C098]/30'; // Kelas untuk background hijau
                                            $textColor = 'text-[#008767]'; // Kelas untuk teks hijau
                                        } elseif ($status === 'pending') {
                                            $bgColor = 'bg-[#FFC5C5]'; // Kelas untuk background merah
                                            $textColor = 'text-[#DF0404]'; // Kelas untuk teks merah
                                        }
                                        ?>
                                        <p
                                            class="<?= $bgColor; ?> w-max px-4 py-2 outline outline-1 <?= $textColor; ?> rounded-md">
                                            <?= $p['status']; ?>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }
                ?>

            </table>
        </div>
    </div>

</html>