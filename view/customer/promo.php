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
              <a href="<?=BASEURL ?>homepage"
                class="block py-2 px-3 text-gray-900 md:hover:text-blue-700 bg-blue-700 rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="<?= urlpath('promo') ?>"
                class="block py-2 px-3 text-gray-900 md:text-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Promo</a>
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
    <div class="flex justify-center mt-5">
      <div class="container ">
        <h1 class="font-semibold text-2xl">Promo</h1>
        <div class="p-5 sm:p-8">
          <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 lg:columns-4 [&>img:not(:first-child)]:mt-8">
            <img src="https://source.unsplash.com/bYuI23mnmDQ" />
            <img src="https://source.unsplash.com/Nllx4R-2c3o" />
            <img src="https://source.unsplash.com/lp40q07DIe0" />
            <img src="https://source.unsplash.com/wfalq01jJuU" />
            <img src="https://source.unsplash.com/rMHNK_skwwU" />
            <img src="https://source.unsplash.com/WBMjuGpbrCQ" />
            <img src="https://source.unsplash.com/nCUZ5BYBL_o" />
            <img src="https://source.unsplash.com/3u4fzMQZhjc" />
            <img src="https://source.unsplash.com/haOIqIPSwps" />
            <img src="https://source.unsplash.com/3UrYD7NNVxk" />
            <img src="https://source.unsplash.com/fm1JKDItlVM" />
            <img src="https://source.unsplash.com/qPpq1EVs8vw" />
            <img src="https://source.unsplash.com/xRyL63AwZFE" />
            <img src="https://source.unsplash.com/XeNKWTiCPNw" />
            <img src="https://source.unsplash.com/DFt3T5r_4FE" />
            <img src="https://source.unsplash.com/Ebwp2-6BG8E" />
          </div>
        </div>
      </div>
    </div>
  </section>


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
<script src="<?= BASEURL ?>/assets/js/order.js"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</html>