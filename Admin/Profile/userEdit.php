<?php
include_once '../head.php';
?>
<?php if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) { ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <?php
    include_once '../sidebar.php';
    ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Profil Düzenleme Paneli</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <form method="post" action="user_post.php">
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="Id" value="<?php echo $_SESSION['Id'] ?>">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Ad Soyad</label>
                                        <input type="text" class="form-control" name="name" placeholder="Adı Soyadı ..." value="<?php echo $_SESSION['Name'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="mail" placeholder="Mail ..." value="<?php echo $_SESSION['Mail'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Eski Şifre</label>
                                        <input type="password" name="oldpassword" class="form-control" placeholder="Şifrenizi değiştirmek istemiyorsanız boş bırakın.">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Yeni Şifre</label>
                                        <input type="password" name="password" class="form-control" placeholder="Yeni Şifre">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Yeni Şifre Tekrar</label>
                                        <input type="password" name="newpassword" class="form-control" placeholder="Yeni Şifre Tekrar">
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_GET['error'])) { ?>
                                <span class="text-danger"><?php echo $_GET['error']; ?></span>
                            <?php } ?>
                            <?php if (isset($_GET['success'])) { ?>
                                <span class="text-primary"><?php echo $_GET['success']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php
    include_once '../footer.php';
    ?>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<?php
include_once '../script.php';
?>
</body>
<?php }
else {
    $msg = 'Lütfen bu sayfayı görüntülemek için önce oturum açın.';
    echo "<script>location.href = '../../login.php?error=$msg';</script>";
}
?>
</html>
