<!-- <?php
$user_city = [];
$user_count = [];
$user = $_SESSION['user'];
?>
<h2>Jumlah Pengguna</h2>
<div class="cards">
    <?php
    foreach ($product as $s) {
      $user_city[] = $s['user_city'];
      $user_count[] = $s['user_count'];
      ?>
    <div class="card">
        <h2><?= $s['user_city']; ?></h2>
    </div>
    <?php
    }
    ?>
</div>
<a href="<?= urlpath('report'); ?>" class="btn btn-success">Print</a>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  function printPage() {
    window.print(); // Prompt the user to print the page
  }
  const ctx = document.getElementById('myChart');
  const labels = <?= json_encode($user_city); ?>;
  const data = <?= json_encode($user_count); ?>;
  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        label: '# of Votes',
        data: data,
        borderWidth: 1
      }]
    },
  });
</script> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?= BASEURL ?>style/css/style.css" />
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
            <a href="<?= BASEURL ?>dashboard/"><img src="<?= BASEURL ?>img/ico3.png" /><span>Product</span></a>
          </li>
          <li>
            <a href="<?= BASEURL ?>dashboard/add-product"><img src="<?= BASEURL ?>img/ico7.png" /><span>Add
                Product</span>
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
      <h2>Halo <?= $user['username']; ?> 👋🏼</h2>
      <div class="box">
        <h3>Daftar Product</h3>
        <table>
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Stock</th>
              <th>Type</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <?php
          if (isset($product)) {
            $i = 1;
            foreach ($product as $p) {
              ?>
              <tbody>
                <td><?= $i ?></td>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['harga']; ?></td>
                <td><?= $p['stock']; ?></td>
                <td><?= $p['type']; ?></td>
                <td>
                  <div class="aksi-btn">
                    <a class="edit-btn btn-color" href="#">Edit</a>
                    <a class="remove-btn" href="#">Hapus</a>
                  </div>
                </td>
              </tbody>
              <?php
              $i++;
            }
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>