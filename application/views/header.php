<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8">
	<title>İpekçi Sürücü Kursu</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?php echo base_url("img/")?>favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?php echo base_url("css/")?>bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?php echo base_url("css/")?>style.css" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
	<div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark text-light p-0">
	<div class="row gx-0 d-none d-lg-flex">
		<div class="col-lg-7 px-5 text-start">
			<div class="h-100 d-inline-flex align-items-center me-4">
				<small class="fa fa-map-marker-alt text-primary me-2"></small>
				<small>Işık caddesi, Merkez, Mardin</small>
			</div>
			<div class="h-100 d-inline-flex align-items-center">
				<small class="far fa-clock text-primary me-2"></small>
				<small>Pazartesi - Cuma : 09.00 - 18.00</small>
			</div>
		</div>
		<div class="col-lg-5 px-5 text-end">
			<div class="h-100 d-inline-flex align-items-center me-4">
				<small class="fa fa-phone-alt text-primary me-2"></small>
				<small>0482 213 34 74</small>
			</div>
			<div class="h-100 d-inline-flex align-items-center mx-n2">
				<a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
				<a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
	<a href="<?php echo base_url('')?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
		<h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>İpekçi Sürücü Kursu</h2>
	</a>
	<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<div class="navbar-nav ms-auto p-4 p-lg-0">
			<a href="<?php echo base_url('')?>" class="nav-item nav-link">Ana Sayfa</a>
			<a href="<?php echo base_url('Main/galeri')?>" class="nav-item nav-link">Galeri</a>
			<a href="<?php echo base_url('Main/bilgiler')?>" class="nav-item nav-link">Adaylara Bilgiler</a>
			<a href="<?php echo base_url('Main/hizmetler')?>" class="nav-item nav-link">Hizmetlerimiz</a>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kurumsal</a>
				<div class="dropdown-menu bg-light m-0">
					<a href="<?php echo base_url("Main/hakkimizda")?>" class="dropdown-item">Hakkımızda</a>
					<a href="<?php echo base_url("Main/kadromuz")?>" class="dropdown-item">Kadromuz</a>
					<a href="<?php echo base_url("Main/sinavlar")?>" class="dropdown-item">Sınav Listeleri</a>
				</div>
			</div>
			<a href="<?php echo base_url("main/contact")?>" class="nav-item nav-link">İletişim</a>
		</div>
		<?php if (!$signed_in) {?>
			<a href="<?php echo base_url('admin/login')?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Admin girişi<i class="fa fa-arrow-right ms-3"></i></a>
		<?php } else {?>
			<a href="<?php echo base_url('/panel')?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Yönetici paneli<i class="fa fa-arrow-right ms-3"></i></a>
		<?php }?>
	</div>
</nav>
<!-- Navbar End -->
