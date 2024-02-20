<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Referanslarımız</h2>
            <p>Memnuniyetle sigortaladığımız müşterilerimizin güveni ve deneyimleri, başarı hikayelerimizin temelini
                oluşturuyor.</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <?php $testimonials = $conn->query("SELECT * FROM testimonials")->fetchAll();
                foreach ($testimonials as $item) { ?>
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h3><?php echo $item['Name'] ?></h3>
                                        <h4><?php echo $item['Title'] ?></h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <?php echo $item['Description'] ?>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>