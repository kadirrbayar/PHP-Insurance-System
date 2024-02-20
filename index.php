<?php
include_once("head.php");
?>
<body>
<?php
include_once("topbar.php");
include_once("sidebar.php");
?>
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Güvenle Yola Çıkın, Hayatı ve Varlıkları Sigortalı Kılın</h2>
                <p>Siz değerli müşterilerimizin güvenliğini ve varlıklarını koruma misyonuyla yola çıkan sigorta şirketimiz, geniş hizmet yelpazesiyle deprem sigortalarından kasko sigortalarına, araç sigortalarından trafik sigortalarına kadar kapsamlı çözümler sunmaktadır.</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="index.php#contact" class="btn-get-started">Şimdi Teklif Alın</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
    </div>
    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-house-heart-fill"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Deprem Sigortası</a></h4>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-car-front-fill"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Kasko Sigortası</a></h4>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-stoplights-fill"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Trafik Sigortası</a></h4>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-heart-pulse-fill"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Sağlık Sigortası</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<main id="main">
    <?php
    include_once("about.php");
    include_once("testimonials.php");
    include_once("team.php");
    include_once("contact.php");
    ?>
</main>
<?php
include_once("footer.php");
?>
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
<?php
include_once("script.php");
?>
</body>
</html>