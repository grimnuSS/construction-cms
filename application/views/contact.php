<?php $this->load->view('header'); ?>


<!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.679058516969!2d40.716567899999994!3d37.3264293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400a8f36b375b57b%3A0x5e1b7e3129e06b55!2s13%20Mart%2C%20I%C5%9F%C4%B1k%20Cd.%2C%2047200%20Artuklu%2FMardin!5e0!3m2!1str!2str!4v1703702175414!5m2!1str!2str"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Bize Ulaşın</h6>
                    <h1 class="display-6 mb-4">Herhangi Bir Sorunuz Varsa Lütfen Bize Ulaşın</h1>
                    <form action="<?php echo base_url('main/contact_kaydet')?>" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="isim" id="name" placeholder="Your Name">
                                    <label for="name">Adınız</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" name="email" id="email" placeholder="Your Email">
                                    <label for="email">E-posta adresiniz</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="konu" id="subject" placeholder="Subject">
                                    <label for="subject">Konu</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" name="aciklama" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">İletmek istediğiniz mesajı lütfen buraya yazınız.</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Mesajı İlet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php $this->load->view('footer'); ?>

