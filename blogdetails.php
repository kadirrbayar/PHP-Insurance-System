<?php
include_once("head.php");
?>
<body>
<?php
include_once("topbar.php");
include_once("sidebar.php");
?>

<?php if (isset($_GET['Id'])) { ?>

    <main id="main">
        <div class="breadcrumbs">
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li>Detaylar</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <?php
                        $id = $_GET['Id'];
                        $selectedQuery = $conn->prepare("SELECT blog.*, category.Title AS CategoryTitle FROM blog INNER JOIN category ON blog.Category = category.Id Where blog.Id = ?");
                        $selectedQuery->execute([$id]);
                        $selectedRow = $selectedQuery->fetch(PDO::FETCH_ASSOC);
                        if ($selectedRow !== false) {
                            $phpDate = date("d-m-Y", strtotime($selectedRow['Date']));
                            ?>
                            <article class="blog-details">
                                <div class="post-img">
                                    <img src="<?php echo $selectedRow['ImageUrl']; ?>" alt="" class="img-fluid">
                                </div>
                                <h2 class="title"><?php echo $selectedRow['Title']; ?></h2>
                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                                <time datetime="2020-01-01"><?php echo $phpDate; ?></time>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <p>
                                        <?php echo htmlspecialchars_decode($selectedRow['Description']); ?>
                                    </p>
                                </div>
                                <div class="meta-bottom">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
                                        <li><?php echo $selectedRow['CategoryTitle']; ?></li>
                                    </ul>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                    <?php
                        include_once 'blog_rightmenu.php';
                    ?>
                </div>
            </div>
        </section>
    </main>
    <?php
    include_once("footer.php");
    ?>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <?php
    include_once 'script.php';
} else {
    header("Location: blog.php");
}
?>
</body>
</html>