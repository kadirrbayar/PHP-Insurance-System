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
                        <h1 class="m-0">Ekip Üyesi</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Ekip Üyesi Ekleme</h3>
                    </div>
                    <form method="post" action="teams_post.php">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Ad Soyad</label>
                                        <input type="text" name="name" class="form-control" placeholder="Adı Soyadı">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Şirket Ünvanı</label>
                                        <input type="text" name="status" class="form-control" placeholder="Ünvanı">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Görsel Url</label>
                                        <input type="text" name="ImageUrl" class="form-control" placeholder="Görsel Yolu">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Telefon No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" name="phone" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sosyal Medya 1</label>
                                        <input type="text" name="socialmedia1" class="form-control" placeholder="Sosyal Medya">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sosyal Medya 2</label>
                                        <input type="text" name="socialmedia2" class="form-control" placeholder="Sosyal Medya">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sosyal Medya 3</label>
                                        <input type="text" name="socialmedia3" class="form-control" placeholder="Sosyal Medya">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sosyal Medya 4</label>
                                        <input type="text" name="socialmedia4" class="form-control" placeholder="Sosyal Medya">
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_GET['error'])) { ?>
                                <span class="text-danger"><?php echo $_GET['error']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Ekle</button>
                            <a href="teamsList.php" class="btn btn-danger">İptal</a>
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
