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
                            <h1 class="m-0">Referanslar</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Referans Listesi</h3>
                                    <div class="card-tools">
                                        <a href="testimonialAdd.php" class="btn btn-dark">Yeni Referans Ekle</a>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ad Soyad</th>
                                            <th>Ünvanı</th>
                                            <th>Yorum</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $referans = $conn->query("SELECT * FROM testimonials")->fetchAll();
                                        foreach ($referans as $item) {
                                            ?>
                                            <tr>
                                                <td><?php echo $item['Id'] ?></td>
                                                <td><?php echo $item['Name'] ?></td>
                                                <td><?php echo $item['Title'] ?></td>
                                                <td><?php echo $item['Description'] ?></td>
                                                <td>
                                                    <a class="btn bg-info btn-sm" href="testimonialEdit.php?Id=<?php echo $item['Id'] ?>">
                                                        <i class="fas fa-pen"></i> Düzenle
                                                    </a>
                                                    <a class="btn bg-dark btn-sm" href="testimonial_delete.php?Id=<?php echo $item['Id'] ?>">
                                                        <i class="fas fa-trash"></i> Sil
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
