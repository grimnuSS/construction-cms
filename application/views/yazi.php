<?php $this->load->view('header'); ?>


<!-- Facts Start -->
<div class="mt-5 container-fluid facts py-5 pt-lg-0">
	<?php foreach ($yazilar as $veri):?>
	<div class="container py-5 pt-lg-0">
		<div class="row gx-0">
			<h1><?php echo $veri->baslik;?></h1>
				<div class="col-lg-12 p-5 wow fadeIn" data-wow-delay="0.5s">
					<img src="<?php echo base_url("") . $veri->resim; ?>" alt="" style="width: 300px; height: 300px;">
				</div>
				<div class="col-lg-12 p-5 wow fadeIn" data-wow-delay="0.5s">
					<p><?php echo $veri->aciklama;?></p>
				</div>
		</div>
	</div>
	<?php endforeach;?>
</div>
<!-- Facts End -->
<?php $this->load->view('footer'); ?>
