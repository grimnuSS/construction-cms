<?php $this->load->view("panel/header"); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Sınav Ekle</h1>
	</div>

	<div class="row mb-3">
		<!-- Invoice Example -->
		<div class="col-xl-12 col-lg-12 mb-4">
			<div class="card">
				<div class="p-4 card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Sınav Ekle</h6>
				</div>
				<div class="p-4 table-responsive">
					<form action="<?php echo base_url("sinavlar/save") ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="ad_soyad">Ad Soyad</label>
							<input type="text" class="form-control" name="ad_soyad" placeholder="Ad Soyad">
						</div>
						<div class="form-group">
							<label for="sinav_saati">Sınav Saati</label>
							<input type="text" class="form-control" name="sinav_saati" placeholder="Sınav Saati">
						</div>
						<div class="form-group">
							<label for="sonuc">Sonuç</label>
							<input type="text" class="form-control" name="sonuc" placeholder="Sonuç">
						</div>
						<div class="form-group">
							<label for="tarih">Tarih</label>
							<input type="date" class="form-control" name="tarih" placeholder="Tarih">
						</div>
						<button type="submit" class="btn btn-primary">Ekle</button>
					</form>
				</div>
				<div class="p-4 card-footer"></div>
			</div>
		</div>
		<?php $this->load->view("panel/footer"); ?>
