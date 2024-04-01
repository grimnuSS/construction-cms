<?php $this->load->view('header'); ?>


<!-- Facts Start -->
<div class="mt-5 container-fluid facts py-5 pt-lg-0">
	<div class="container py-5 pt-lg-0">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="display-6 mb-4 text-center">Galerimiz</h1>
			</div>
		</div>
		<div class="row gx-0">
			<?php foreach ($galeri as $veri):?>
				<div class="col-lg-4 p-5 wow fadeIn" data-wow-delay="0.5s">
					<img src="<?php echo base_url("") . $veri->medya_url;?>" alt="" style="width: 300px; height: 300px;">
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<!-- Facts End -->
<?php $this->load->view('footer'); ?>
