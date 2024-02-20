<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Teklif Ver</h2>
            <p>Sizin için en uygun sigorta teklifini almak için bize ulaşın, özel çözümlerimizle sizi güvence altına
                alalım.</p>
        </div>

        <div class="row gx-lg-0 gy-4">
            <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="showForm('trafik')"><i
                            class="bi bi-car-front-fill"></i> Trafik Sigortası
                </button>
                <button type="button" class="btn btn-success" onclick="showForm('kasko')"><i
                            class="bi bi-car-front"></i> Kasko Sigortası
                </button>
                <button type="button" class="btn btn-warning" onclick="showForm('deprem')"><i class="bi bi-house"></i>
                    Deprem Sigortası
                </button>
                <button type="button" class="btn btn-danger" onclick="showForm('contact')"><i
                            class="bi bi-messenger"></i> İletişim
                </button>
            </div>

            <div class="col-lg-14">
                <form class="trafik-forms php-email-form" id="trafikForm">
                    <div class="row">
                        <div class="section-header">
                            <h3>Trafik Sigortası Teklif Formu</h3>
                        </div>
                        <input type="hidden" name="requestType" value="Trafik Sigortası">
                        <div class="col-md-6 form-group">
                            <label class="label-contact-title">Ad Soyad</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ad Soyad">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Telefon Numarası</label>
                            <input type="number" class="form-control" name="phone" id="email" placeholder="Telefon Numarası">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">TC Kimlik Numarası</label>
                            <input type="number" class="form-control" name="tcno" id="subject" placeholder="TC Kimlik Numarası">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Plaka</label>
                            <input type="text" class="form-control" name="plate" id="subject" placeholder="Plaka">
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Belge Seri No. </label>
                            <input type="text" class="form-control" name="documentno" id="subject" placeholder="Örnek : AA-123456">
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <div class="radio-container">
                                <label class="label-contact-title">Teklif Tipi</label>
                                <div class="radio-options">
                                    <label for="yeniTescil" class="radio-option">
                                        <input type="radio" name="teklifTipi" id="yeniTescil" value="Yeni Tescil">
                                        Yeni Tescil
                                    </label>
                                    <label for="yenileme" class="radio-option">
                                        <input type="radio" name="teklifTipi" id="yenileme" value="Yenileme">
                                        Yenileme
                                    </label>
                                    <label for="sifirArac" class="radio-option">
                                        <input type="radio" name="teklifTipi" id="sifirArac" value="Sıfır Araç">
                                        Sıfır Araç
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-success" id="trafikFormBtn">Teklif Ver</button>
                    </div>
                </form>
                <form class="kasko-forms php-email-form hidden" id="kaskoForm">
                    <div class="row">
                        <div class="section-header">
                            <h3>Kasko Sigortası Teklif Formu</h3>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="label-contact-title">Ad Soyad</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ad Soyad">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Telefon Numarası</label>
                            <input type="email" class="form-control" name="phone" id="email" placeholder="Telefon Numarası">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">TC Kimlik Numarası</label>
                            <input type="text" class="form-control" name="tcno" id="subject" placeholder="TC Kimlik Numarası">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Plaka</label>
                            <input type="text" class="form-control" name="plate" id="subject" placeholder="Plaka">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Belge Seri No</label>
                            <input type="text" class="form-control" name="documentno" id="subject" placeholder="Örnek : AA-123456">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Meslek Bilgisi</label>
                            <input type="text" class="form-control" name="job" id="subject" placeholder="Meslek Bilgisi">
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <div class="radio-container">
                                <label class="label-contact-title">Teklif Tipi</label>
                                <div class="radio-options">
                                    <label for="yeniTescil" class="radio-option">
                                        <input type="radio" name="teklifTipi" id="yeniTescil" value="Yeni Tescil">
                                        Yeni Tescil
                                    </label>

                                    <label for="yenileme" class="radio-option">
                                        <input type="radio" name="teklifTipi" id="yenileme" value="Yenileme">
                                        Yenileme
                                    </label>

                                    <label for="sifirArac" class="radio-option">
                                        <input type="radio" name="teklifTipi" id="sifirArac" value="Sıfır Araç">
                                        Sıfır Araç
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-success" id="kaskoFormBtn">Teklif Ver</button>
                    </div>
                </form>
                <form class="deprem-forms php-email-form hidden" id="depremForm">
                    <div class="row">
                        <div class="section-header">
                            <h3>Deprem Sigortası Teklif Formu</h3>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="label-contact-title">Ad Soyad</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ad Soyad">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Telefon NO</label>
                            <input type="email" class="form-control" name="phone" id="email" placeholder="Telefon Numarası">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">TC Kimlik Numarası</label>
                            <input type="text" class="form-control" name="tcno" id="subject" placeholder="TC Kimlik Numarası">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Metrekare Bilgisi (m2)</label>
                            <input type="text" class="form-control" name="meters" id="subject" placeholder="Metrekare Bilgisi (m2)">
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Bina İnşaat Yılı</label>
                            <select id="dateSelect" class="form-control" name="buildingyear">
                                <option value="" disabled selected>Lütfen bir tarih seçin</option>
                                <option value="1975 ve Öncesi">1975 ve Öncesi</option>
                                <option value="1976-1996">1976-1996</option>
                                <option value="1997-1999">1997-1999</option>
                                <option value="2000-2006">2000-2006</option>
                                <option value="2007 ve Sonrası">2007 ve Sonrası</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Açık Adres</label>
                            <textarea name="adres" class="form-control" placeholder="Adres*"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-success" id="depremFormBtn">Teklif Ver</button>
                        </div>
                    </div>
                </form>
                <form class="contact-forms php-email-form hidden" id="contactForm">
                    <div class="row">
                        <div class="section-header">
                            <h3>İletişim Formu</h3>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="label-contact-title">Ad Soyad</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ad Soyad">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Mail Adresi</label>
                            <input type="email" class="form-control" name="mail" id="email" placeholder="Mail Adresi">
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Konu</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu">
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <label class="label-contact-title">Mesajınız</label>
                            <textarea name="message" rows="9" class="form-control" placeholder="Mesajınız"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="button" id="contactFormBtn" class="btn btn-success">Mesaj Gönder</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="section-header">
                <h2>İletişim Bilgileri</h2>
                <p>Sorularınız veya sigorta ihtiyaçlarınız için bizimle iletişime geçmekten çekinmeyin, size yardımcı
                    olmaktan mutluluk duyarız.</p>
            </div>
            <div class="col-lg-14">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Konum:</h4>
                            <p>İstanbul - Fatih / Menekşe Sokak No : 13 Kat : 5</p>
                        </div>
                    </div>

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Mail Adresi:</h4>
                            <p>info@gursoysigorta.com</p>
                        </div>
                    </div>

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Telefon Numarası:</h4>
                            <p>0 216 274 43 16</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Açık Saatler:</h4>
                            <p>Pazartesi - Cumartesi : 08:00 - 17:00</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

            </div>
        </div>
    </div>
</section>