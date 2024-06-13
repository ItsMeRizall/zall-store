<?php
$data_product = [];

if (isset($order)){
  $data_product = $order[0];
}

  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All - Shop HomePage</title>
  <link rel="stylesheet" href="<?= BASEURL ?>style/css/output.css" />
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
          <button type="button"
            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="<?= BASEURL ?>img/profile.jpg" alt="user photo">
          </button>
          <!-- Dropdown menu -->
          <div
            class="z-50 my-4 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
            id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
              <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
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
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
          <ul
            class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="<?=BASEURL ?>homepage"
                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="<?= urlpath('promo') ?>"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Promo</a>
            </li>
            <li>
              <a href="<?= urlpath('order-history') ?>"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Order</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </section>

  <!-- Carousel -->
  <section>
    <!-- component -->
    <!-- This is an example component -->
    <div class="container mx-auto mt-5">

      <div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <span
              class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
              Slide</span>
            <img src="<?=BASEURL ?>img/banner/banner-1.png"
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?=BASEURL ?>img/banner/banner-2.png"
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?=BASEURL ?>img/banner/banner-3.png"
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="hidden">Previous</span>
          </span>
        </button>
        <button type="button"
          class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="hidden">Next</span>
          </span>
        </button>
      </div>
    </div>
  </section>

  <!-- Main Content Order -->
  <section>
    <!-- BANNER -->
    <div class="container flex mx-auto mt-5 gap-5">
      <div class=" w-4/12 p-5 bg-white rounded-2xl h-max">
        <img src="<?= BASEURL ?>/img/logo/banner.jpg" alt="Banner" class="rounded-2xl">
        <div class="flex items-center mt-5">
          <img src="<?= BASEURL ?>/img/logo/mlbb.png" alt="logo" class="w-12 h-12 rounded-lg z-10">
          <div class="w-4/6  h-10 border bg-[#5932EA] rounded-r-3xl -ml-5 flex items-center">
            <p class="text-white font-semibold pl-8">Mobile Legends: Bang Bang</p>
          </div>
        </div>
        <div class="w-4/5 text-sm mt-5 text-black">
          <p>
            Mobile Legends：Bang Bang
            Top up MLBB Diamonds in seconds! Just enter your MLBB user ID, select the value of Diamonds you wish to
            purchase, complete the payment, and the Diamonds will be added immediately to your MLBB account.
            Download & play Mobile Legends: Bang Bang today
          </p>
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="flex flex-col  w-8/12">
        <div class="flex flex-col bg-white p-5 rounded-2xl">
          <div class="flex bg-[#fff2e0] p-5 gap-5 rounded-3xl items-center">
            <div class="p-3 text-white bg-[#f57b02] rounded-full">
              <svg width="24" stroke-width="1.5" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19 20H5C3.89543 20 3 19.1046 3 18V9C3 7.89543 3.89543 7 5 7H19C20.1046 7 21 7.89543 21 9V18C21 19.1046 20.1046 20 19 20Z"
                  stroke="currentColor" />
                <path
                  d="M16.5 14C16.2239 14 16 13.7761 16 13.5C16 13.2239 16.2239 13 16.5 13C16.7761 13 17 13.2239 17 13.5C17 13.7761 16.7761 14 16.5 14Z"
                  fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M18 7V5.60322C18 4.28916 16.7544 3.33217 15.4847 3.67075L4.48467 6.60409C3.60917 6.83756 3 7.63046 3 8.53656V9"
                  stroke="currentColor" />
              </svg>

            </div>

            <div>
              <p class="font-semibold">Bayar Transaksi Kamu, Yuk! </p>
              <p>Ga Bayar Rugi Loh :v</p>
            </div>
          </div>

          <div class="flex gap-3 mt-5">
            <img src="<?= BASEURL ?>/img/logo/mlbb.png" alt="logo" class="w-14 rounded-lg z-10">
            <div>
              <p class="font-semibold text-2xl"><?= $data_product["name_product"] ?> </p>
              <p><?= $data_product["type_product"] ?></p>
            </div>
          </div>

          <div class="flex justify-between items-center mt-5">
            <p class="font-semibold text-2xl">Total Pembayaran</p>
            <p class="font-semibold text-2xl"><?="RP. ".  $data_product["name_product"] ?></p>
          </div>

          <div class="flex  text-xl mt-10 justify-between">
            <p>Bayar Dengan</p>
            <div class="flex  text-xl gap-3 items-center justify-center">
              <img class="w-20" src="<?= BASEURL ?>/img/logo/qris.webp" alt="">
              <p>QRIS</p>
            </div>
          </div>

          <div class="mt-10">
            <p>Scan kode QR / download QR / screenshoot QR dibawah ini dengan aplikasi digital wallet untuk membayar</p>
            <img class="w-96 m-auto mt-5" src="<?= BASEURL ?>/img/qris.jpg" alt="">
          </div>
        </div>

        <div class="flex flex-col bg-white p-5 rounded-2xl mt-5">
          <h2 class="font-semibold text-2xl">Detail Transaksi</h2>
          <table>
            <tr>
              <td>ID Trx</td>
              <td><?= $data_product["order_id"] ?></td>
            </tr>
            <tr>
              <td>Produk</td>
              <td><?= $data_product["name_product"] ?></td>
            </tr>
            <tr>
              <td>Nominal</td>
              <td><?= $data_product["harga"] ?></td>
            </tr>
            <tr>
              <td>Nickname</td>
              <td><?= $data_product["nickname"] ?></td>
            </tr>
            <tr>
              <td>User ID</td>
              <td><?= $data_product["id_game"] ?> <?= $data_product["server"] ?></td>
            </tr>
          </table>
        </div>

        <div class="flex flex-col bg-white p-5 rounded-2xl mt-5">
        <h2 class="font-semibold text-2xl">Upload Bukti Pembayaranmu</h2>
        <form class="mt-5" action="" method="POST" enctype="multipart/form-data">
          <div class="">
            <label for="invoice"  class="mb-1 block text-sm font-medium text-gray-700">Upload file</label>
            <input id="invoice" name="invoice" type="file"
              class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-teal-500 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
            <button class="w-full mt-5 text-white bg-[#5932EA] p-3 rounded-2xl">SUDAH BAYAR</button>
          </div>
        </form>
        </div>
        

      </div>

    </div>
    </div>
    </div>
  </section>

  <!-- MODAL -->
<footer>
  <div class="mt-10 bg-[#5932EA] flex justify-center">
    <div class="container p-5 mt-10">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="<?= BASEURL ?>img/logo-movil.png" alt="logo" />
        <h2 class="font-semibold text-2xl text-white">All - Shop</h2>
      </a>
      <p class="text-white mt-3 md:w-1/2 mb-10">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        s
      </p>
    </div>
  </div>
</footer>
</body>




</body>
<script>
  const orderUrl = '<?= urlpath("order/new-order") ?>';
</script>
<script src="<?= BASEURL ?>/assets/js/order.js"></script>
<script>

</script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</html>