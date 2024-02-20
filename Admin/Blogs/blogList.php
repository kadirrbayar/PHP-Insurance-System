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
                            <h1 class="m-0">Blog Yazıları</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="blogAdd.php" class="btn btn-primary btn-block mb-3">
                                <i class="fas fa-paper-plane"></i> Yeni Yazı Ekle</a>
                            <button type="button" class="btn btn-info btn-block mb-3" data-toggle="modal"
                                    data-target="#modal-default">
                                <i class="fas fa-book"></i> Yeni Kategori Ekle
                            </button>
                            <button type="button" class="btn btn-dark btn-block mb-3" data-toggle="modal"
                                    data-target="#modal-delete">
                                <i class="fas fa-trash"></i> Kategori Sil
                            </button>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Kategoriler</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav nav-pills flex-column">
                                        <?php $category = $conn->query("SELECT * FROM category")->fetchAll();
                                        foreach ($category as $item) {
                                            ?>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link category-button"
                                                   data-category-id="<?php echo $item['Id']; ?>">
                                                    <?php echo $item['Title'] ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <span class="card-title">Yazılar - Kategori Adı : <b>
                                        <?php
                                        if (isset($_GET['category'])) {
                                            $categoryId = $_GET['category'];
                                            $textQuery = $conn->prepare("SELECT * FROM category WHERE Id = ?");
                                            $textQuery->execute([$categoryId]);
                                            $category = $textQuery->fetch(PDO::FETCH_ASSOC);

                                            if ($category) {
                                                echo $category['Title'];
                                            } else {
                                                echo 'Belirtilen Kategori Bulunamadı';
                                            }
                                        } else {
                                            echo 'Tüm Yazılar';
                                        }
                                        ?>
                                        </b></span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive mailbox-messages">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Başlık</th>
                                                <th>Tarih</th>
                                                <th>İçerik</th>
                                                <th>İşlemler</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            if (isset($_GET['category'])) {
                                                $selectedCategoryId = $_GET['category'];
                                                $blog = $conn->prepare("SELECT * FROM blog WHERE Category = ?");
                                                $blog->execute([$selectedCategoryId]);
                                            } else {
                                                $blog = $conn->query("SELECT * FROM blog")->fetchAll();
                                            }
                                            foreach ($blog as $item) {
                                                $decodedDescription = htmlspecialchars_decode($item['Description']);
                                                ?>
                                                <tr>
                                                    <td><?php echo $item['Id'] ?></td>
                                                    <td><?php echo $item['Title'] ?></td>
                                                    <td><?php echo $item['Date'] ?></td>
                                                    <td><?php echo mb_substr($decodedDescription, 0, 40, 'UTF-8'); ?>
                                                        ...
                                                    </td>
                                                    <td>
                                                        <a class="btn bg-info btn-sm"
                                                           href="blogEdit.php?Id=<?php echo $item['Id'] ?>">
                                                            <i class="fas fa-pen"></i> Düzenle
                                                        </a>
                                                        <a class="btn bg-dark btn-sm"
                                                           href="blog_delete.php?Id=<?php echo $item['Id'] ?>">
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
                </div>
            </section>
        </div>
        <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Kategori Ekleme Paneli</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form method="post" action="category_post.php">
                        <div class="modal-body">
                            <label>Kategori Adı</label>
                            <input type="text" name="title" class="form-control" placeholder="Kategori Adı ...">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-delete" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Kategori Silme Paneli</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form method="post" action="category_delete.php">
                        <div class="modal-body">
                            <label>Kategori Seçin</label>
                            <select class="custom-select" name="Id">
                                <?php
                                $categoryQuery = $conn->query("SELECT * FROM category");
                                while ($category = $categoryQuery->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<option value="' . $category['Id'] . '">' . $category['Title'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-primary">Sil</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        </div>
                    </form>
                </div>
            </div>
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
