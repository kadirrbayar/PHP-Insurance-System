<?php
include_once '../head.php';
?>
<?php if (isset($_SESSION['Id']) && isset($_SESSION['Mail']) && isset($_GET['Id'])) { ?>

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
                        <h1 class="m-0">Referanslar</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Ekip Üyesi Düzenle</h3>
                    </div>
                    <?php
                    $id = $_GET['Id'];
                    $selectedQuery = $conn->prepare("SELECT * from teams Where Id = ?");
                    $selectedQuery->execute([$id]);
                    $selectedRow = $selectedQuery->fetch(PDO::FETCH_ASSOC);
                    if ($selectedRow !== false) {
                    ?>
                    <form method="post" action="teams_post.php">
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="Id" value="<?php echo $selectedRow['Id'] ?>">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Ad Soyad</label>
                                        <input type="text" name="name" class="form-control" placeholder="Adı Soyadı" value="<?php echo $selectedRow['Name'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Şirket Ünvanı</label>
                                        <input type="text" name="status" class="form-control" placeholder="Ünvanı" value="<?php echo $selectedRow['Status'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Görsel Url</label>
                                        <input type="text" name="ImageUrl" class="form-control" placeholder="Görsel Yolu" value="<?php echo $selectedRow['ImageUrl'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Telefon No</label>
                                        <input type="text" name="phone" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask value="<?php echo $selectedRow['Phone'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sosyal Medya 1</label>
                                        <input type="text" name="socialmedia1" class="form-control" placeholder="Sosyal Medya" value="<?php echo $selectedRow['SocialMedia1'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sosyal Medya 2</label>
                                        <input type="text" name="socialmedia2" class="form-control" placeholder="Sosyal Medya" value="<?php echo $selectedRow['SocialMedia2'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sosyal Medya 3</label>
                                        <input type="text" name="socialmedia3" class="form-control" placeholder="Sosyal Medya" value="<?php echo $selectedRow['SocialMedia3'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sosyal Medya 4</label>
                                        <input type="text" name="socialmedia4" class="form-control" placeholder="Sosyal Medya" value="<?php echo $selectedRow['SocialMedia4'] ?>">
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_GET['error'])) { ?>
                                <span class="text-danger"><?php echo $_GET['error']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Düzenle</button>
                            <a href="teamsList.php" class="btn btn-dark">İptal</a>
                        </div>
                    </form>
                    <?php } ?>
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
