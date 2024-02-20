<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Paneli | Giriş Yap</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="Admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>Admin</b>Paneli
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Giriş paneline yeniden hoş geldin</p>
            <form action="login_post.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="mail" placeholder="Mail">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Şifre">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                    </div>
                </div>
                <?php if (isset($_GET['error'])) { ?>
                    <span class="text-danger"><?php echo $_GET['error']; ?></span>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <span class="text-primary"><?php echo $_GET['success']; ?></span>
                <?php } ?>
            </form>
            <p class="mb-0">
                <a href="register.php" class="text-center">Henüz bir hesabın yok ise kayıt ol.</a>
            </p>
        </div>
    </div>
</div>
<script src="Admin/plugins/jquery/jquery.min.js"></script>
<script src="Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Admin/dist/js/adminlte.min.js"></script>
</body>
</html>