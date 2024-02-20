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
                    <div class="card card-indigo">
                        <div class="card-header">
                            <h3 class="card-title">Referans Düzenleme</h3>
                        </div>
                        <?php
                        $id = $_GET['Id'];
                        $selectedQuery = $conn->prepare("SELECT * from testimonials Where Id = ?");
                        $selectedQuery->execute([$id]);
                        $selectedRow = $selectedQuery->fetch(PDO::FETCH_ASSOC);
                        if ($selectedRow !== false) {
                            ?>
                            <form method="post" action="testimonial_post.php">
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="Id" value="<?php echo $selectedRow['Id'] ?>">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Ad Soyad</label>
                                                <input type="text" class="form-control" name="name" placeholder="Adı Soyadı ..."
                                                       value="<?php echo $selectedRow['Name'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Şirket Ünvanı</label>
                                                <input type="text" class="form-control" name="title" placeholder="Ünvanı ..."
                                                       value="<?php echo $selectedRow['Title'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Yorum</label>
                                                <textarea class="form-control" name="description" rows="3" placeholder="Açıklama ..."><?php echo $selectedRow['Description'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($_GET['error'])) { ?>
                                        <span class="text-danger"><?php echo $_GET['error']; ?></span>
                                    <?php } ?>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Güncelle</button>
                                    <a href="testimonialList.php" class="btn btn-dark">İptal</a>
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
<?php } else {
    $msg = 'Lütfen bu sayfayı görüntülemek için önce oturum açın.';
    echo "<script>location.href = '../../login.php?error=$msg';</script>";
}
?>
</html>
