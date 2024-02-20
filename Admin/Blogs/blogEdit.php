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
                        <h1 class="m-0">Blog Yazıları</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-cyan">
                    <div class="card-header">
                        <h3 class="card-title">Blog Yazısı Düzenleme</h3>
                    </div>
                    <?php
                    $id = $_GET['Id'];
                    $selectedQuery = $conn->prepare("SELECT * from blog Where Id = ?");
                    $selectedQuery->execute([$id]);
                    $selectedRow = $selectedQuery->fetch(PDO::FETCH_ASSOC);
                    if ($selectedRow !== false) {
                    ?>
                    <form method="post" action="blog_post.php">
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="Id" value="<?php echo $selectedRow['Id'] ?>">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Başlık</label>
                                        <input type="text" name="Title" class="form-control" placeholder="Başlık ..." value="<?php echo $selectedRow['Title'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Görsel Url</label>
                                        <input type="text" name="ImageUrl" class="form-control" placeholder="Görsel Yolu ..." value="<?php echo $selectedRow['ImageUrl'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select class="custom-select" name="Category">
                                            <?php
                                            $categoryQuery = $conn->query("SELECT * FROM category");
                                            while ($category = $categoryQuery->fetch(PDO::FETCH_ASSOC)) {
                                                $selected = ($category['Id'] == $selectedRow['Category']) ? 'selected' : '';
                                                echo '<option value="' . $category['Id'] . '" ' . $selected . '>' . $category['Title'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Yazı</label>
                                        <textarea class="form-control" name="Description" rows="10" placeholder="İçerik ..."><?php echo $selectedRow['Description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                            <a href="blogList.php" class="btn btn-dark">İptal</a>
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
