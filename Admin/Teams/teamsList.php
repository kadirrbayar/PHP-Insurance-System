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
                            <h1 class="m-0">Ekip Üyeleri</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="card card-solid">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="teamsAdd.php" class="btn btn-primary">Yeni Ekip Üyesi Ekle</a>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="row">
                            <?php $teams = $conn->query("SELECT * FROM teams")->fetchAll();
                            foreach ($teams as $item) {
                                ?>
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                            <?php echo $item['Name'] ?>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p class="text-muted text-sm"><b>Ünvanı: </b>
                                                        <?php echo $item['Status'] ?>
                                                    </p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i
                                                                        class="fas fa-phone"></i></span>
                                                            Telefon : <?php echo $item['Phone'] ?>
                                                        </li>
                                                        <li class="small"><span class="fa-li"></span>
                                                            Twitter : <?php echo $item['SocialMedia1'] ?>
                                                        </li>
                                                        <li class="small"><span class="fa-li"></span>
                                                            İnstagram : <?php echo $item['SocialMedia2'] ?>
                                                        </li>
                                                        <li class="small"><span class="fa-li"></span>
                                                            Facebook : <?php echo $item['SocialMedia3'] ?>
                                                        </li>
                                                        <li class="small"><span class="fa-li"></span>
                                                            Linkedin : <?php echo $item['SocialMedia4'] ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="<?php echo $item['ImageUrl'] ?>" style="height: 128px; width: 128px;" alt="user-avatar"
                                                         class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <a href="teamsEdit.php?Id=<?php echo $item['Id'] ?>" class="btn btn-sm bg-primary">
                                                    <i class="fas fa-pen"></i> Düzenle
                                                </a>
                                                <a href="teams_delete.php?Id=<?php echo $item['Id'] ?>" class="btn btn-sm btn-dark">
                                                    <i class="fas fa-trash"></i> Sil
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
