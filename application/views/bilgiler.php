<?php $this->load->view('header'); ?>

<!-- Facts Start -->
<div class="container-fluid mb-5 facts py-5 pt-lg-0">
	<div class="container py-5 pt-lg-0">
		<h2>Bilgiler</h2>
		<div class="row gx-0">
			<?php
			foreach ($bilgiler as $veri): ?>
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
			endforeach; ?>

		</div>
	</div>
</div>
<!-- Facts End -->
<?php $this->load->view('footer'); ?>
