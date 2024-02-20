<?php
include_once 'head.php';
?>

<?php if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) { ?>
    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo BASE_URL . 'dist/img/AdminLTELogo.png'; ?>" alt="AdminLTELogo"
                 height="60" width="60">
        </div>
        <?php
        include_once 'sidebar.php';
        ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Ana Sayfa</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <?php
                    include_once 'cards.php';
                    ?>
                </div>
            </section>
        </div>
        <?php
        include_once 'footer.php';
        ?>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <?php
    include_once 'script.php';
    ?>
    </body>
<?php } else {
    $msg = 'Lütfen bu sayfayı görüntülemek için önce oturum açın.';
    echo "<script>location.href = '../login.php?error=$msg';</script>";
}
?>
</html>
