
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
            <a href="<?= BASEURL ?>admin"><img src="<?= BASEURL ?>img/ico1.png" /><span>Dashboard</span>
            </a>
          </li>

          <li>
            <a href="<?= BASEURL ?>ambil-orderan"><img src="<?= BASEURL ?>img/ico3.png" /><span>Ambil Orderan</span></a>
          </li>
          <li>
            <a href="<?= BASEURL; ?>riwayat-admin"><img src="<?= BASEURL; ?>/img/ico3.png" /><span>Riwayat</span></a>
          </li>
        </ul>
      </div>
      <a href="<?= urlpath('logout'); ?>">
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
            <h2>Halo <?=$_SESSION['user']['username'] ?> 👋🏼</h2>
            <div class="box">
                <h3>Riwayat Admin</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal Order</th>
                            <th>Username</th>
                            <th>ID Game</th>
                            <th>No Hp</th>
                            <th>Product</th>
                            <th>Type Product</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <?php if (isset($order)): ?>
                        <tbody>
                            <?php foreach ($order as $p): ?>
                                <?php
                                if ($p['id_admin'] === $_SESSION['user']['uid_user'] and $p["status"] === 'success') {
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
                                    <td><?= $p['no_hp']; ?></td>
                                    <td><?= $p['name_product']; ?></td>
                                    <td><?= $p['type_product']; ?></td>
                                    <td class="">
                                        <p
                                            class="<?= $bgColor; ?> w-max px-4 py-2 outline outline-1 <?= $textColor; ?> rounded-md">
                                            <?= $p['status']; ?>
                                        </p>
                                        
                                    </td>
                                </tr>
                                <?php } ?>
                            <?php endforeach; ?>
                        </tbody>
                    <?php endif; ?>
                </table>

            </div>
        </div>
    </div>

</body>

</html>