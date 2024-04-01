<?php $this->load->view("panel/header"); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Yazı Düzenle</h1>
	</div>

	<div class="row mb-3">
		<!-- Invoice Example -->
		<div class="col-xl-12 col-lg-12 mb-4">
			<div class="card">
				<div class="p-4 card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Yazı Düzenle</h6>
				</div>
				<div class="p-4 table-responsive">
					<?php foreach ($yazilar as $veri): ?>
						<form action="<?php echo base_url("kadrolar/update") ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $veri->id; ?>"> <!-- Eklenen satır -->
							<div class="form-group">
								<label for="name">Ad Soyad</label>
								<input type="text" class="form-control" name="name" value="<?php echo $veri->name; ?>" placeholder="Ad Soyad">
							</div>
							<div class="form-group">
								<label for="resim">Resim</label>
								<input type="file" class="form-control" name="resim">
							</div>
							<div class="form-group">
								<label for="alan">Alan</label>
								<input type="text" class="form-control" name="alan" value="<?php echo $veri->alan; ?>" placeholder="Alan">
							</div>
							<div class="form-group">
								<label for="telefon">Telefon</label>
								<input type="text" class="form-control" name="telefon" value="<?php echo $veri->telefon; ?>" placeholder="Telefon">
							</div>
							<button type="submit" class="btn btn-primary">Kaydet</button>
						</form>
					<?php endforeach; ?>
				</div>
				<div class="p-4 card-footer">
					<?php if (isset($error)) { ?>
						<div class="alert alert-danger"><?php echo $error; ?></div>
					<?php } ?>
					<?php if (isset($success)) { ?>
						<div class="alert alert-success"><?php echo $success; ?></div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php $this->load->view("panel/footer"); ?>
