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
              <a href="<?= BASEURL ?>homepage"
                class="block py-2 px-3  bg-blue-700 rounded md:bg-transparent text-gray-900 md:hover:text-blue-700  md:p-0 md:dark:text-blue-500"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="<?= urlpath('promo') ?>"
                class="block py-2 px-3 text-gray-900   rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Promo</a>
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
            <img src="<?= BASEURL ?>img/banner/banner-1.png"
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= BASEURL ?>img/banner/banner-2.png"
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= BASEURL ?>img/banner/banner-3.png"
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
      <div class="flex flex-col bg-white w-8/12 p-5">
        <div class="flex gap-3 h-8">
          <p class="w-8 bg-[#5932EA] rounded-full text-white flex items-center justify-center font-semibold">1</p>
          <p class="font-semibold flex items-center">Masukkan Id Player</p>
        </div>
        <div class="mt-5 pl-10 flex gap-4 md:w-3/5">
          <div class="w-4/5">
            <input placeholder="Masukkan Id Player" type="text" id="id_game" name="id_game"
              class="w-full py-2 px-5 bg-[#D9D9D9] rounded-xl focus:outline-none active:outline-none">
          </div>
          <div>
            <input placeholder="Server" type="text" id="server_game" name="server_game"
              class="w-full py-2 px-5 bg-[#D9D9D9] rounded-xl focus:outline-none active:outline-none before:content-['('] after:content-[')']">
          </div>
        </div>

        <div class="mt-3 pl-10 pr-5">
          <div id="container-nickname" class="flex md:w-3/5 gap-5 bg-[#9375ff] py-2 rounded-xl">
            <div class="w-4/5 pl-5">
              <p>Nickname</p>
            </div>
            <div class="">
              <p id="nickname"></p>
            </div>
          </div>
        </div>

        <!-- PILIH PRODUCT -->
        <div class="flex gap-3 h-8 mt-5">
          <p class="w-8 bg-[#5932EA] rounded-full text-white flex items-center justify-center font-semibold">2</p>
          <p class="font-semibold flex items-center">Pilih Product</p>
        </div>
        <div class="grid grid-cols-5 gap-5 px-10 mt-5 product">
          <?php
          if (isset($product)) {
            foreach ($product as $p) {
              ?>
              <div class="border border-[#5932EA] p-10 hover:cursor-pointer rounded-xl">
                <p class="hidden"><?= $p["id"] ?></p>
                <p><?= $p["nama"] ?></p>
                <p>Rp. <?= $p["harga"] ?></p>
              </div>
              <?php
            }
          }
          ?>
        </div>

        <!-- PEMBAYARAN -->
        <div class="flex gap-3 h-8 mt-5">
          <p class="w-8 bg-[#5932EA] rounded-full text-white flex items-center justify-center font-semibold">3</p>
          <p class="font-semibold flex items-center">Pilih Pembayaran</p>
        </div>
        <div class="px-10 payment">
          <div class="border border-[#5932EA] p-5 rounded-xl flex justify-between items-center w-full">
            <div class="flex items-center gap-5">
              <img src="<?= BASEURL ?>/img/logo/qris.webp" alt="">
              <p>QRIS</p>
            </div>
            <p id="total-in-payment">RP. 1500</p>
          </div>
        </div>

        <!-- NO HANDPHONE -->
        <div class="flex gap-3 h-8 mt-5">
          <p class="w-8 bg-[#5932EA] rounded-full text-white flex items-center justify-center font-semibold">3</p>
          <p class="font-semibold flex items-center">Masukkan No. Handphone</p>
        </div>
        <div class="px-10 ">
          <div class="w-3/5 mt-5">
            <input id="no_hp_input" placeholder="Masukkan No Handphone " type="text"
              class="w-full py-2 px-5 bg-[#D9D9D9] rounded-xl focus:outline-none active:outline-none">
          </div>
        </div>

        <hr class="border border-[#5932EA] mt-20">
        <div class="flex justify-between items-center mt-10">
          <div>
            <p id="product-in-bottom">-</p>
            <p id="total-in-bottom">-</p>
          </div>
          <div>
            <button id="order" class="bg-[#8b72e6] btn text-white px-12 py-4 rounded-xl" disabled>Lanjut</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- MODAL -->

  <div id="modal-order"
    class="fixed hidden inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center">
    <!-- overlay -->
    <div aria-hidden="true" class="fixed inset-0 w-full h-full bg-black/50 cursor-pointer">
    </div>

    <!-- Modal -->
    <div class="relative w-full cursor-pointer pointer-events-none transition my-auto ">
      <div
        class="w-full bg-white cursor-default pointer-events-auto darki:bg-gray-800 relative rounded-xl overflow-hidden mx-auto max-w-lg">
        <div class="flex p-3 justify-center items-center bg-[#5932EA]">
          <h2 class="text-white text-lg text-center">Konfirmasi Pesanan</h2>
        </div>

        <form action="<?= urlpath('order/new-order') ?>" method="post">
          <div class="px-14 py-3">
            <div class="p-3 mt-3 flex justify-between bg-transparent border-b border-b-[#5932EA]">
              <p class="font-semibold">Nickname</p>
              <!-- <p id="nick-name-container"></p> -->
              <input id="nick-name-container" name="nickname"
                class="border-none bg-transparent outline-none active:outline-0  cursor-default text-end" type="text"
                readonly>
            </div>
            <div class="p-3 mt-3 flex justify-between bg-transparent border-b border-b-[#5932EA]">
              <p class="font-semibold">ID Game</p>
              <!-- <p id="id-game-container"></p> -->
              <input id="id-game-container" name="idGame"
                class="border-none bg-transparent outline-none active:outline-0  cursor-default text-end" type="text"
                readonly>
            </div>
            <div class="p-3 mt-3 flex justify-between border-b border-b-[#5932EA]">
              <p class="font-semibold">Server</p>
              <!-- <p id="server-game-container"></p> -->
              <input id="server-game-container" name="server"
                class="border-none bg-transparent outline-none active:outline-0  cursor-default text-end" type="text"
                readonly>
            </div>
            <div class="p-3 mt-3 flex justify-between border-b border-b-[#5932EA]">
              <p class="font-semibold">No.Handphone</p>
              <!-- <p id="no-hp"></p> -->
              <input id="no-hp" name="no_hp"
                class="border-none bg-transparent outline-none active:outline-0  cursor-default text-end" type="text"
                readonly>
            </div>
            <div class="p-3 mt-3 flex justify-between border-b border-b-[#5932EA]">
              <p class="font-semibold">Product</p>
              <!-- <p id="product-name"></p> -->
              <input id="product-name"
                class="border-none bg-transparent outline-none active:outline-0  cursor-default text-end" type="text"
                readonly>
              <input id="id-product" name="id_product"
                class="hidden border-none bg-transparent outline-none active:outline-0  cursor-default text-end"
                type="text" readonly>
            </div>
            <div class="p-3 mt-3 flex justify-between border-b border-b-[#5932EA]">
              <p class="font-semibold">Payment</p>
              <!-- <p id="payment"></p> -->
              <input id="payment" name="payment"
                class="border-none bg-transparent outline-none active:outline-0  cursor-default text-end" type="text"
                readonly>
            </div>
            <div class="p-3 mt-3 flex justify-between border-b border-b-[#5932EA]">
              <p class="font-semibold">Total</p>
              <!-- <p id="total"></p> -->
              <input id="total"
                class="border-none bg-transparent outline-none active:outline-0  cursor-default text-end" type="text"
                readonly>
            </div>

            <div class="flex px-14 gap-5 mb-5 mt-20">
              <div id="batal-order" onclick="document.getElementById('modal-order').classList.add('hidden')"
                class="w-full bg-[#DF0404] rounded-xl py-2 text-white text-center">Batal</div>
              <?php if (!isset($_SESSION['user'])) { ?>
                <a href="<?= urlpath("login") ?>"
                  class="w-full text-center hover:cursor-pointer bg-[#5932EA] rounded-xl py-2 text-white">Login</a>
              <?php } else { ?>
                <button type="submit" id="buttonBayar"
                  class="w-full bg-[#5932EA] hover:cursor-pointer rounded-xl py-2 text-white">Bayar</button>
              <?php } ?>

            </div>
        </form>

      </div>
    </div>
  </div>
  </div>


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
<script>
  const orderUrl = '<?= urlpath("order/new-order") ?>';
</script>
<script src="<?= BASEURL ?>/assets/js/order.js"></script>
<script>

</script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</html>