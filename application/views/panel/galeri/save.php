<?php $this->load->view("panel/header"); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Galeri Ekle</h1>
	</div>

	<div class="row mb-3">
		<!-- Invoice Example -->
		<div class="col-xl-12 col-lg-12 mb-4">
			<div class="card">
				<div class="p-4 card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Galeri Ekle</h6>
				</div>
				<div class="p-4 table-responsive">
					<form action="<?php echo base_url("galeri/save") ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="medya_url">Medya URL</label>
							<input type="file" class="form-control" name="medya_url" placeholder="Medya URL">
						</div>
						<button type="submit" class="btn btn-primary">Ekle</button>
					</form>
				</div>
				<div class="p-4 card-footer"></div>
			</div>
		</div>
		<?php $this->load->view("panel/footer"); ?>
