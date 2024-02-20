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
                        <h1 class="m-0">Gelen Teklifler</h1>
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
                                <h3 class="card-title">Gelen Teklif Listesi</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ad Soyad</th>
                                        <th>Teklif Türü</th>
                                        <th>Detaylar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $request = $conn->query("SELECT * FROM request")->fetchAll();
                                        foreach ($request as $item) {
                                            ?>
                                    <tr>
                                        <td><?php echo $item['Id'] ?></td>
                                        <td><?php echo $item['Name'] ?></td>
                                        <td><?php echo $item['RequestType'] ?></td>
                                        <td>
                                            <a class="btn bg-info btn-sm" href="request_details.php?Id=<?php echo $item['Id'] ?>">
                                                <i class="fas fa-pen"></i> Detayları Gör
                                            </a>
                                            <a class="btn bg-dark btn-sm" href="request_delete.php?Id=<?php echo $item['Id'] ?>">
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
<?php }
else {
    $msg = 'Lütfen bu sayfayı görüntülemek için önce oturum açın.';
    echo "<script>location.href = '../../login.php?error=$msg';</script>";
}
?>
</html>
