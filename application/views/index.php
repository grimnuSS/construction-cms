<?php $this->load->view('header'); ?>


<!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Uzman Eğitmenlerle Sürüş Deneyiminizi Geliştirin.</h1>
                                    <a href="<?php echo base_url('Main/sinavlar')?>" class="btn btn-light py-sm-3 px-sm-5 ms-3">Sınav Listeleri</a>
									<a href="<?php echo base_url('Main/kadromuz')?>" class="btn btn-primary py-sm-3 px-sm-5 ms-3">Kadromuz</a>
									<a href="<?php echo base_url('Main/hakkimizda')?>" class="btn btn-light py-sm-3 px-sm-5 ms-3">Hakkımızda</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Güvenli Yarınlar İçin Şimdi Öğrenin.</h1>
									<a href="<?php echo base_url('Main/sinavlar')?>" class="btn btn-light py-sm-3 px-sm-5 ms-3">Sınav Listeleri</a>
									<a href="<?php echo base_url('Main/kadromuz')?>" class="btn btn-primary py-sm-3 px-sm-5 ms-3">Kadromuz</a>
									<a href="<?php echo base_url('Main/hakkimizda')?>" class="btn btn-light py-sm-3 px-sm-5 ms-3">Hakkımızda</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Önceki</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sonraki</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid mb-5 facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
				<?php
				$count = 0;
				foreach ($yazilar as $veri): ?>
					<?php if ($count == 4) break; ?>
					<div class="col-lg-3 wow fadeIn" data-wow-delay="0.3s">
						<div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 200px;">
							<div class="d-flex row">
								<img class="col-12 col-lg-12" src="<?php echo base_url("") . $veri->resim; ?>" alt="" style="width: 200px; height: 200px;">

								<div class="p-3 mt-4 row">
									<h5><?php echo $veri->baslik; ?></h5>
									<span><?php echo $veri->kisa_aciklama; ?></span>

									<!-- Form ve Hidden Input Ekleniyor -->
									<form action="<?php echo base_url('Main/yazi'); ?>" method="post">
										<input type="hidden" name="yazi_id" value="<?php echo $veri->id; ?>">
										<button type="submit" class="btn btn-primary">Devamını Oku...</button>
									</form>
									<!-- Form ve Hidden Input Bitiyor -->
								</div>
							</div>
						</div>
					</div>
				<?php
				$count++;
				endforeach; ?>

            </div>
        </div>
    </div>
    <!-- Facts End -->

	<div class="container-fluid mt-5 facts py-5 pt-lg-0">
		<div class="container py-5 pt-lg-0">
			<div class="row gx-0">
				<h1>Ehliyet Sınıfları</h1>
				<?php
				$i = 1; // Başlangıç indis değeri

				foreach ($yazilar as $veri):
					if ($i == 5): // Sadece 4. veriyi göster
						?>
						<div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
							<div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 200px;">
								<div class="d-flex row">
									<img class="col-12 col-lg-12" src="<?php echo base_url("") . $veri->resim; ?>" alt="" style="width: 200px; height: 200px;">

									<div class="p-3 mt-4 row">
										<h5><?php echo $veri->baslik; ?></h5>
										<span><?php echo $veri->kisa_aciklama; ?></span>

										<!-- Form ve Hidden Input Ekleniyor -->
										<form action="<?php echo base_url('Main/yazi'); ?>" method="post">
											<input type="hidden" name="yazi_id" value="<?php echo $veri->id; ?>">
											<button type="submit" class="btn btn-primary">Devamını Oku...</button>
										</form>
										<!-- Form ve Hidden Input Bitiyor -->
									</div>
								</div>
							</div>
						</div>
						<?php
						break; // Döngüyü sonlandır
					endif;
					$i++; // İndisi arttır
				endforeach;
				?>

			</div>
		</div>
	</div>


<div class="container-fluid mt-5 facts py-5 pt-lg-0">
	<div class="container py-5 pt-lg-0">
		<div class="row gx-0">
			<h1>Hizmetlerimiz</h1>
			<?php foreach ($hizmetler as $veri):?>
					<div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
						<div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 200px;">
							<div class="d-flex row">
								<img class="col-12 col-lg-12" src="<?php echo base_url("") . $veri->resim; ?>" alt="" style="width: 200px; height: 200px;">

								<div class="p-3 mt-4 row">
									<h5><?php echo $veri->baslik; ?></h5>
									<span><?php echo $veri->kisa_aciklama; ?></span>

									<!-- Form ve Hidden Input Ekleniyor -->
									<form action="<?php echo base_url('Main/yazi'); ?>" method="post">
										<input type="hidden" name="yazi_id" value="<?php echo $veri->id; ?>">
										<button type="submit" class="btn btn-primary">Devamını Oku...</button>
									</form>
									<!-- Form ve Hidden Input Bitiyor -->
								</div>
							</div>
						</div>
					</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
