<?php $this->load->view("panel/header"); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Kadromuz</h1>
	</div>

	<div class="row mb-3">
		<!-- Invoice Example -->
		<div class="col-xl-12 col-lg-12 mb-4">
			<div class="card">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Kadromuz</h6>
				</div>
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
						<tr>
							<th>Isim</th>
							<th>Resim</th>
							<th>Alan</th>
							<th>Telefon</th>
							<th>İşlemler</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($kadro as $veri) {?>
							<tr>
								<td><?php echo $veri->name; ?></td>
								<td><?php echo $veri->resim; ?></td>
								<td><?php echo $veri->alan; ?></td>
								<td><?php echo $veri->telefon; ?></td>
								<td><a href="<?php echo base_url("Kadrolar/deleteKadro/".$veri->id); ?>" class="btn btn-sm btn-danger">Sil</a><a href="<?php echo base_url("Kadrolar/edit/".$veri->id); ?>" class="btn btn-sm btn-primary">Düzenle</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="card-footer"></div>
			</div>
		</div>
		<?php $this->load->view("panel/footer"); ?>
