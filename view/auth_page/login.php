<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Login to Contact App</h5>
                    <form action="<?= urlpath('login'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <div class="d-flex justify-content-between">
                        <a href="<?=BASEURL?>">Home</a>
                        <a href="<?=urlpath('register');?>">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= BASEURL?>style/css/login.css">
</head>
<body>
    <div class="wrap">
        <div class="box-login">
            <h1>Login</h1>
            <h4>ZallStore</h4>
            <form action="<?= urlpath('login'); ?>"id="form-login" class="form" method="post">
                <div class="input">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email" />
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password" />
                </div>
                <div class="reset-password">
                    <p>Belum Puynya Akun? <a href="<?= urlpath('register'); ?>"><span>Register</span></a></p>
                </div>
                <input
                    type="submit"
                    value="Login" />
            </form>
        </div>
    </div>
</body>
</html>