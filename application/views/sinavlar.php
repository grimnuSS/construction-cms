<?php $this->load->view('header'); ?>


<!-- Facts Start -->
<div class="mt-5 container-fluid facts py-5 pt-lg-0">
	<div class="container py-5 pt-lg-0">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="display-6 mb-4 text-center">Sınavlar</h1>
			</div>
		</div>
		<div class="row gx-0">
			<table border="1">
				<thead>
				<tr>
					<th>ID</th>
					<th>Ad Soyad</th>
					<th>Sınav Saati</th>
					<th>Sonuç</th>
					<th>Tarih</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($sinav as $veri): ?>
					<tr>
						<td><?php echo $veri->id; ?></td>
						<td><?php echo $veri->ad_soyad; ?></td>
						<td><?php echo $veri->sinav_saati; ?></td>
						<td><?php echo $veri->sonuc; ?></td>
						<td><?php echo $veri->tarih; ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Facts End -->
<?php $this->load->view('footer'); ?>
