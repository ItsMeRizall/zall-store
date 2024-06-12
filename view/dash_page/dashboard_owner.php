<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASEURL ?>style/css/style.css" />
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
                        <a href="<?= BASEURL ?>dashboard"><img src="<?= BASEURL ?>img/ico1.png" /><span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= BASEURL ?>product/"><img
                                src="<?= BASEURL ?>img/ico3.png" /><span>Product</span></a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>view-admin"><img
                                src="<?= BASEURL; ?>/img/ico3.png" /><span>Admin</span></a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>dashboard/add-product"><img
                                src="<?= BASEURL; ?>/img/ico7.png" /><span>Add
                                Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/add-admin"><img src="<?= BASEURL; ?>/img/ico7.png" /><span>Add
                                Admin</span>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="<?= urlpath('dashboard/logout'); ?>">
                <div class="account">
                    <div class="profile">
                        <img src="<?= BASEURL ?>img/profile.jpg" alt="image">
                        <h4>Logout</h4>
                    </div>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg></span>
                </div>
            </a>
        </div>
        <div class="main-content">
            <h2>Halo Zall 👋🏼</h2>
            <div class="flex bg-white justify-between px-10 py-8 rounded-3xl mt-5">
                <div class="flex gap-5">
                    <div class="w-24 bg-gradient-to-t from-[#EFFFF6] to-[#D3FFE7] p-6 rounded-full">
                        <svg viewBox="0 0 1024 1024" fill="#00AC4F" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M300 462.4h424.8v48H300v-48zM300 673.6H560v48H300v-48z" fill=""></path>
                                <path
                                    d="M818.4 981.6H205.6c-12.8 0-24.8-2.4-36.8-7.2-11.2-4.8-21.6-11.2-29.6-20-8.8-8.8-15.2-18.4-20-29.6-4.8-12-7.2-24-7.2-36.8V250.4c0-12.8 2.4-24.8 7.2-36.8 4.8-11.2 11.2-21.6 20-29.6 8.8-8.8 18.4-15.2 29.6-20 12-4.8 24-7.2 36.8-7.2h92.8v47.2H205.6c-25.6 0-47.2 20.8-47.2 47.2v637.6c0 25.6 20.8 47.2 47.2 47.2h612c25.6 0 47.2-20.8 47.2-47.2V250.4c0-25.6-20.8-47.2-47.2-47.2H725.6v-47.2h92.8c12.8 0 24.8 2.4 36.8 7.2 11.2 4.8 21.6 11.2 29.6 20 8.8 8.8 15.2 18.4 20 29.6 4.8 12 7.2 24 7.2 36.8v637.6c0 12.8-2.4 24.8-7.2 36.8-4.8 11.2-11.2 21.6-20 29.6-8.8 8.8-18.4 15.2-29.6 20-12 5.6-24 8-36.8 8z"
                                    fill=""></path>
                                <path
                                    d="M747.2 297.6H276.8V144c0-32.8 26.4-59.2 59.2-59.2h60.8c21.6-43.2 66.4-71.2 116-71.2 49.6 0 94.4 28 116 71.2h60.8c32.8 0 59.2 26.4 59.2 59.2l-1.6 153.6z m-423.2-47.2h376.8V144c0-6.4-5.6-12-12-12H595.2l-5.6-16c-11.2-32.8-42.4-55.2-77.6-55.2-35.2 0-66.4 22.4-77.6 55.2l-5.6 16H335.2c-6.4 0-12 5.6-12 12v106.4z"
                                    fill=""></path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[#ACACAC]">Total Order</p>
                        <p class="text-3xl font-semibold"><?= $total_order[0]["total"] ?></p>
                    </div>
                </div>
                <div class="flex gap-5">
                    <div class="w-24 bg-gradient-to-t from-[#EFFFF6] to-[#D3FFE7] p-6 rounded-full">
                        <svg viewBox="0 0 1024 1024" fill="#00AC4F" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M300 462.4h424.8v48H300v-48zM300 673.6H560v48H300v-48z" fill=""></path>
                                <path
                                    d="M818.4 981.6H205.6c-12.8 0-24.8-2.4-36.8-7.2-11.2-4.8-21.6-11.2-29.6-20-8.8-8.8-15.2-18.4-20-29.6-4.8-12-7.2-24-7.2-36.8V250.4c0-12.8 2.4-24.8 7.2-36.8 4.8-11.2 11.2-21.6 20-29.6 8.8-8.8 18.4-15.2 29.6-20 12-4.8 24-7.2 36.8-7.2h92.8v47.2H205.6c-25.6 0-47.2 20.8-47.2 47.2v637.6c0 25.6 20.8 47.2 47.2 47.2h612c25.6 0 47.2-20.8 47.2-47.2V250.4c0-25.6-20.8-47.2-47.2-47.2H725.6v-47.2h92.8c12.8 0 24.8 2.4 36.8 7.2 11.2 4.8 21.6 11.2 29.6 20 8.8 8.8 15.2 18.4 20 29.6 4.8 12 7.2 24 7.2 36.8v637.6c0 12.8-2.4 24.8-7.2 36.8-4.8 11.2-11.2 21.6-20 29.6-8.8 8.8-18.4 15.2-29.6 20-12 5.6-24 8-36.8 8z"
                                    fill=""></path>
                                <path
                                    d="M747.2 297.6H276.8V144c0-32.8 26.4-59.2 59.2-59.2h60.8c21.6-43.2 66.4-71.2 116-71.2 49.6 0 94.4 28 116 71.2h60.8c32.8 0 59.2 26.4 59.2 59.2l-1.6 153.6z m-423.2-47.2h376.8V144c0-6.4-5.6-12-12-12H595.2l-5.6-16c-11.2-32.8-42.4-55.2-77.6-55.2-35.2 0-66.4 22.4-77.6 55.2l-5.6 16H335.2c-6.4 0-12 5.6-12 12v106.4z"
                                    fill=""></path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[#ACACAC]">Order Success</p>
                        <p class="text-3xl font-semibold"><?= $order_succces[0]["total"] ?></p>
                    </div>
                </div>
                <div class="flex gap-5">
                    <div class="w-24 bg-gradient-to-t from-[#EFFFF6] to-[#D3FFE7] p-6 rounded-full">
                        <svg viewBox="0 0 1024 1024" fill="#00AC4F" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M300 462.4h424.8v48H300v-48zM300 673.6H560v48H300v-48z" fill=""></path>
                                <path
                                    d="M818.4 981.6H205.6c-12.8 0-24.8-2.4-36.8-7.2-11.2-4.8-21.6-11.2-29.6-20-8.8-8.8-15.2-18.4-20-29.6-4.8-12-7.2-24-7.2-36.8V250.4c0-12.8 2.4-24.8 7.2-36.8 4.8-11.2 11.2-21.6 20-29.6 8.8-8.8 18.4-15.2 29.6-20 12-4.8 24-7.2 36.8-7.2h92.8v47.2H205.6c-25.6 0-47.2 20.8-47.2 47.2v637.6c0 25.6 20.8 47.2 47.2 47.2h612c25.6 0 47.2-20.8 47.2-47.2V250.4c0-25.6-20.8-47.2-47.2-47.2H725.6v-47.2h92.8c12.8 0 24.8 2.4 36.8 7.2 11.2 4.8 21.6 11.2 29.6 20 8.8 8.8 15.2 18.4 20 29.6 4.8 12 7.2 24 7.2 36.8v637.6c0 12.8-2.4 24.8-7.2 36.8-4.8 11.2-11.2 21.6-20 29.6-8.8 8.8-18.4 15.2-29.6 20-12 5.6-24 8-36.8 8z"
                                    fill=""></path>
                                <path
                                    d="M747.2 297.6H276.8V144c0-32.8 26.4-59.2 59.2-59.2h60.8c21.6-43.2 66.4-71.2 116-71.2 49.6 0 94.4 28 116 71.2h60.8c32.8 0 59.2 26.4 59.2 59.2l-1.6 153.6z m-423.2-47.2h376.8V144c0-6.4-5.6-12-12-12H595.2l-5.6-16c-11.2-32.8-42.4-55.2-77.6-55.2-35.2 0-66.4 22.4-77.6 55.2l-5.6 16H335.2c-6.4 0-12 5.6-12 12v106.4z"
                                    fill=""></path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[#ACACAC]">Order Pending</p>
                        <p class="text-3xl font-semibold"><?= $order_pending[0]["total"] ?></p>
                    </div>
                </div>
            </div>
            <div class="box">
                <h3>Daftar Orderan</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal Order</th>
                            <th>Username</th>
                            <th>ID Game</th>
                            <th>Product</th>
                            <th>Type Product</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <?php if (isset($order_history)): ?>
                        <tbody>
                            <?php foreach ($order_history as $p): ?>
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
                                <tr>
                                    <td><?= $p['created_at']; ?></td>
                                    <td><?= $p['username']; ?></td>
                                    <td><?= $p['id_game'] . " (" . $p['server'] . ")" ?></td>
                                    <td><?= $p['name_product']; ?></td>
                                    <td><?= $p['type_product']; ?></td>
                                    <td class="">
                                        <p
                                            class="<?= $bgColor; ?> w-max px-4 py-2 outline outline-1 <?= $textColor; ?> rounded-md">
                                            <?= $p['status']; ?>
                                        </p>
                                    </td>
                                    <!-- <td>
                        <div class="aksi-btn">
                            <a class="edit-btn btn-color" href="<?= urlpath("dashboard/edit-product?id=" . $p["id_product"]) ?>">Edit</a>
                            <button class="remove-btn" onclick='openModal(<?= $p["id_product"] ?>, "<?= $p["nama"] ?>")'>Hapus</button>
                        </div>
                    </td> -->
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php endif; ?>
                </table>

            </div>
        </div>
    </div>

</html>