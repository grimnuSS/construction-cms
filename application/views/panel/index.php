<?php $this->load->view("panel/header"); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">İletişim Talepleri</h1>
	</div>

	<div class="row mb-3">
		<!-- Invoice Example -->
		<div class="col-xl-12 col-lg-12 mb-4">
			<div class="card">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Talepler</h6>
				</div>
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
						<tr>
							<th>Isim</th>
							<th>E-Posta</th>
							<th>Konu</th>
							<th>Açıklama</th>
							<th>İşlemler</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($contact as $veri) {?>
						<tr>
							<td><?php echo $veri->isim; ?></td>
							<td><?php echo $veri->email; ?></td>
							<td><?php echo $veri->konu; ?></td>
							<td><?php echo $veri->aciklama; ?></td>
							<td><a href="<?php echo base_url("Panel/deleteIletisim/".$veri->id); ?>" class="btn btn-sm btn-danger">Sil</a></td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="card-footer"></div>
			</div>
		</div>
		<?php $this->load->view("panel/footer"); ?>
