<?php $this->load->view('header'); ?>


<!-- Facts Start -->
<div class="mt-5 container-fluid facts py-5 pt-lg-0">
	<div class="container py-5 pt-lg-0">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="display-6 mb-4 text-center">Kadromuz</h1>
			</div>
		</div>
		<div class="row gx-0">
			<?php foreach ($kadro as $veri):?>
			<div class="col-lg-4 p-5 wow fadeIn" data-wow-delay="0.5s">
				<div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 200px;">
					<div class="d-flex">
						<div class="flex-shrink-0 btn-lg-square bg-primary">
							<img class="col-6 col-lg-12 mb-4 mb-lg-0 p-2" src="<?php echo base_url("") . $veri->resim;?>" alt="" style="width: 120px; height: 120px;">
						</div>
						<div class="ps-4">
							<h5><?php echo $veri->name;?></h5>
							<h6><?php echo $veri->alan;?></h6>
							<h6><?php echo $veri->telefon;?></h6>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<!-- Facts End -->
<?php $this->load->view('footer'); ?>
