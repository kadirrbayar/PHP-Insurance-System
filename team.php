<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Ekibimiz</h2>
            <p>Deneyimli ve uzman ekibimiz, sigorta süreçlerinizde sizinle birlikte en iyi çözümleri bulmak için
                burada.</p>
        </div>

        <div class="row gy-4">

            <?php $team = $conn->query("SELECT * FROM teams")->fetchAll();
            foreach ($team as $item) { ?>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="<?php echo $item['ImageUrl'] ?>" class="img-fluid" alt="">
                        <h4><?php echo $item['Name'] ?></h4>
                        <span><?php echo $item['Status'] ?></span>
                        <div class="social">
                            <a href="<?php echo $item['SocialMedia1'] ?>"><i class="bi bi-twitter"></i></a>
                            <a href="<?php echo $item['SocialMedia2'] ?>"><i class="bi bi-facebook"></i></a>
                            <a href="<?php echo $item['SocialMedia3'] ?>"><i class="bi bi-instagram"></i></a>
                            <a href="<?php echo $item['SocialMedia4'] ?>"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</section>