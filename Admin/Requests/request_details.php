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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mesaj Detayları</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice p-3 mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <?php
                                    $id = $_GET['Id'];
                                    $selectedQuery = $conn->prepare("SELECT * from request Where Id = ?");
                                    $selectedQuery->execute([$id]);
                                    $selectedRow = $selectedQuery->fetch(PDO::FETCH_ASSOC);
                                    if ($selectedRow !== false) {
                                    ?>
                                    <p class="lead">Teklif Türü : <?php echo $selectedRow['RequestType'] ?></p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr style="<?php echo ($selectedRow['Name'] === null || $selectedRow['Name'] === '') ? 'display: none;' : ''; ?>">
                                                <th style="width:50%">Adı Soyadı:</th>
                                                <td><?php echo $selectedRow['Name'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Phone'] === null || $selectedRow['Phone'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Telefon No:</th>
                                                <td><?php echo $selectedRow['Phone'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['TCNo'] === null || $selectedRow['TCNo'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Tc Kimlik No:</th>
                                                <td><?php echo $selectedRow['TCNo'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Type'] === null || $selectedRow['Type'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Teklif Tipi:</th>
                                                <td><?php echo $selectedRow['Type'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Job'] === null || $selectedRow['Job'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Meslek:</th>
                                                <td><?php echo $selectedRow['Job'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['DocumentNo'] === null || $selectedRow['DocumentNo'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Belge No:</th>
                                                <td><?php echo $selectedRow['DocumentNo'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Plate'] === null || $selectedRow['Plate'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Plaka:</th>
                                                <td><?php echo $selectedRow['Plate'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Meters'] === null || $selectedRow['Meters'] === '') ? 'display: none;' : ''; ?>">
                                                <th>MetreKare (m2):</th>
                                                <td><?php echo $selectedRow['Meters'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['BuildingYear'] === null || $selectedRow['BuildingYear'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Bina İnşa Yılı:</th>
                                                <td><?php echo $selectedRow['BuildingYear'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Adress'] === null || $selectedRow['Adress'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Adres:</th>
                                                <td><?php echo $selectedRow['Adress'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Mail'] === null || $selectedRow['Mail'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Mail:</th>
                                                <td><?php echo $selectedRow['Mail'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Subject'] === null || $selectedRow['Subject'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Konu:</th>
                                                <td><?php echo $selectedRow['Subject'] ?></td>
                                            </tr>
                                            <tr style="<?php echo ($selectedRow['Message'] === null || $selectedRow['Message'] === '') ? 'display: none;' : ''; ?>">
                                                <th>Gelen Mesaj:</th>
                                                <td><?php echo $selectedRow['Message'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row no-print">
                                <div class="col-12">
                                    <a type="button" href="requestList.php" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-home"></i> Çıkış
                                    </a>
                                </div>
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
