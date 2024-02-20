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
        <?php
        $id = $_GET['Id'];
        $selectedQuery = $conn->prepare("SELECT blog.*, category.Title AS CategoryTitle FROM blog INNER JOIN category ON blog.Category = category.Id Where category.Id = ?");
        $selectedQuery->execute([$id]);
        $selectedRow = $selectedQuery->fetch(PDO::FETCH_ASSOC);
        if ($selectedRow !== false) {
        $phpDate = date("d-m-Y", strtotime($selectedRow['Date']));
        ?>
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Kategori Adı : <?php echo $selectedRow['CategoryTitle']; ?></h2>
                            <p>Sigorta dünyasındaki güncel gelişmelerden, koruma ipuçlarına, sektör trendlerinden
                                müşteri hikayelerine kadar her şeyi içeren blogumuzda, geleceğinizi güvence altına
                                almanız için ihtiyacınız olan bilgileri bulacaksınız. Sizler için hazırladığımız
                                yazılarla sigorta terimlerini anlamak, doğru poliçe seçimleri yapmak ve güvenli bir
                                gelecek için adımlar atmak konusunda size rehberlik ediyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li>Bilgi Bankası</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row g-5 posts-list">
                    <div class="col-lg-8">
                        <div class="row">
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <article>
                                        <div class="post-img">
                                            <img src="<?php echo $selectedRow['ImageUrl']; ?>" alt="" class="img-fluid">
                                        </div>
                                        <p class="post-category"><?php echo $selectedRow['CategoryTitle']; ?></p>

                                        <h2 class="title">
                                            <a href="blogdetails.php?Id=<?php echo $selectedRow['Id']; ?>"><?php echo $selectedRow['Title']; ?></a>
                                        </h2>
                                        <div class="d-flex align-items-center">
                                            <div class="post-meta">
                                                <p class="post-date">
                                                    <time datetime="2022-01-01"><?php echo $phpDate; ?></time>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                        </div>
                    </div>
                    <?php
                    include_once 'blog_rightmenu.php';
                    ?>
                </div>
            </div>
        </section>
        <?php } ?>
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