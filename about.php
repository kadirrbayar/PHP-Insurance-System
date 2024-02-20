<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Hakkımızda</h2>
            <p>Güveninizi teminat altına almak için buradayız, sizin için en iyi sigorta çözümlerini sunarak hayatınızı
                koruma altına alıyoruz.</p>
        </div>
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="content ps-0 ps-lg-5">
                    <p class="text-center text-start">
                        <?php
                        $AboutId = 0;
                        $event = $conn->query("SELECT * FROM about WHERE Id = $AboutId")->fetch();
                        if ($event) {
                            ?>
                            <?php echo htmlspecialchars_decode($event['Description']); ?>
                            <?php
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>