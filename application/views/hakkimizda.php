<?php $this->load->view('header'); ?>

<!-- About Start -->
<div class="container-xxl py-6">
	<div class="container">
		<div class="row g-5">
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
					<img class="position-absolute w-100 h-100" src="<?php echo base_url("img/")?>about-1.png" alt="" style="object-fit: cover;">
					<img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="<?php echo base_url("img/")?>about-2.jpg" alt="" style="width: 200px; height: 200px;">
				</div>
			</div>
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="h-100">
					<?php foreach ($hakkimizda as $veri):?>

						<h6 class="text-primary text-uppercase mb-2">Hakkımızda</h6>
						<h1 class="display-6 mb-4"><?php echo $veri->baslik;?></h1>
						<p><?php echo $veri->aciklama;?></p>
						<div class="row g-4">
							<div class="col-sm-12">
								<a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:<?php echo $veri->telefon;?>">
										<span class="flex-shrink-0 btn-square bg-primary">
											<i class="fa fa-phone-alt text-white"></i>
										</span>
									<span class="px-3"><?php echo $veri->telefon;?></span>
								</a>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
