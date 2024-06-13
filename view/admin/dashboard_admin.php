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
                <h3>Order Diambil</h3>
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
                                if ($p['id_admin'] === $_SESSION['user']['uid_user'] and $p["status"] === 'pending') {
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
                                        <!-- <p
                                            class="<?= $bgColor; ?> w-max px-4 py-2 outline outline-1 <?= $textColor; ?> rounded-md">
                                            <?= $p['status']; ?>
                                        </p> -->
                                        <button class="px-5 rounded-lg py-2 <?= $bgColor; ?> <?=$textColor; ?> <?=$outline ?> " onclick='openModal(<?= $p["order_id"] ?>, "<?= $p["name_product"] ?>")'>SELESAIKAN ORDERAN</button>
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

    <!-- MODAL -->
  <div id="modal_hapus"
    class="fixed hidden inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center">
    <!-- overlay -->
    <div aria-hidden="true" class="fixed inset-0 w-full h-full bg-black/50 cursor-pointer">
    </div>

    <!-- Modal -->
    <div class="relative w-full cursor-pointer pointer-events-none transition my-auto p-4">
      <div
        class="w-full py-2 bg-white cursor-default pointer-events-auto dark:bg-gray-800 relative rounded-xl mx-auto max-w-sm">

        <button onclick="document.getElementById('modal_hapus').classList.add('hidden')" tabindex="-1" type="button"
          class="absolute top-2 right-2 rtl:right-auto rtl:left-2">
          <svg title="Close" tabindex="-1" class="h-4 w-4 cursor-pointer text-gray-400"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">
            Close
          </span>
        </button>



        <div class="space-y-2 p-2">
          <div class="p-4 space-y-2 text-center dark:text-white">
            <h2 class="text-xl font-bold tracking-tight" id="name-product">hA</h2>

            <p class="text-gray-500">
              Apakah Anda Yakin Ingin Mengambil Orderan Ini?
            </p>
          </div>
        </div>

        <div class="space-y-2">
          <div aria-hidden="true" class="border-t dark:border-gray-700 px-2"></div>

          <div class="px-6 py-2">
            <div class="grid gap-2 grid-cols-[repeat(auto-fit,minmax(0,1fr))]">
              <button onclick="document.getElementById('modal_hapus').classList.add('hidden')" type="button"
                class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4 text-sm text-gray-800 bg-white border-gray-300 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600 dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-gray-600 dark:hover:border-gray-500 dark:text-gray-200 dark:focus:text-primary-400 dark:focus:border-primary-400 dark:focus:bg-gray-800">
                <span class="flex items-center gap-1">
                  <span class="">
                    Cancel
                  </span>
                </span>
              </button>

              <button id="confirm-delete" type="submit"
                class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-[#4925E9] hover:bg-[#4925E9]/90">

                <span class="flex items-center gap-1">
                  <span class="">
                    Confirm
                  </span>
                </span>

              </button>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</body>

<script>
  const hapusContainer = document.getElementById("modal_hapus")
  const name_product = document.getElementById("name-product")


  function openModal(a, b) {
    hapusContainer.classList.remove("hidden");
    console.log("haha", a);
    name_product.textContent = b;

    // Remove previous event listeners to prevent multiple event bindings
    const confirmDeleteButton = document.getElementById("confirm-delete");
    const newButton = confirmDeleteButton.cloneNode(true);
    confirmDeleteButton.parentNode.replaceChild(newButton, confirmDeleteButton);

    newButton.addEventListener('click', function () {
      const urlPath = `<?=BASEURL ?>selesaikan-orderan/trx?id=${a}`;  // Assuming `a` is the product ID
      window.location.href = urlPath;
    });
  }

  // document.getElementById("confirm-delete").addEventListener('click', function (){})
</script>

</html>