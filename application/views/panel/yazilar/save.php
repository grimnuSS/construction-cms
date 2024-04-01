<?php $this->load->view("panel/header"); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Yazı Ekle</h1>
	</div>

	<div class="row mb-3">
		<!-- Invoice Example -->
		<div class="col-xl-12 col-lg-12 mb-4">
			<div class="card">
				<div class="p-4 card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Yazı Ekle</h6>
				</div>
				<div class="p-4 table-responsive">
					<form action="<?php echo base_url("yazilar/save") ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="baslik">Başlık</label>
							<input type="text" class="form-control" name="baslik" placeholder="Başlık">
						</div>
						<div class="form-group">
							<label for="kisa_aciklama">Kısa Açıklama</label>
							<input type="text" class="form-control" name="kisa_aciklama" placeholder="Başlık">
						</div>
						<div class="form-group">
							<label for="aciklama">Açıklama</label>
							<textarea class="form-control" name="aciklama" placeholder="Açıklama"></textarea>
						</div>
						<div class="form-group">
							<label for="resim">Resim</label>
							<input type="file" class="form-control" name="resim">
						</div>
						<div class="form-group">
							<label for="telefon">Kategori</label>
							<select name="kategori" class="form-control">
								<option value="bilgi">Bilgi</option>
								<option value="hizmet">Hizmet</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Ekle</button>
					</form>
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
