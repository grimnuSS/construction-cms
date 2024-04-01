<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?php echo base_url('panel/')?>img/logo/logo.png" rel="icon">
	<title>Admin Panel</title>
	<link href="<?php echo base_url('/css/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/css/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/css/')?>ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
<div id="wrapper">
	<!-- Sidebar -->
	<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('')?>">
			<div class="sidebar-brand-text mx-3">Anasayfa</div>
		</a>
		<hr class="sidebar-divider my-0">
		<div class="sidebar-heading">
			Sayfalar
		</div>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
			   aria-controls="collapseForm">
				<i class="fab fa-fw fa-wpforms"></i>
				<span>İletişim</span>
			</a>
			<div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">İletişim</h6>
					<a class="collapse-item" href="<?php echo base_url("panel/index")?>">İletişim Listesi</a>
				</div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
			   aria-controls="collapseTable">
				<i class="fas fa-fw fa-table"></i>
				<span>Kurumsal</span>
			</a>
			<div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Kadromuz</h6>
					<a class="collapse-item" href="<?php echo base_url("kadrolar/index")?>">Listele</a>
					<a class="collapse-item" href="<?php echo base_url("kadrolar/saveIndex")?>">Ekle</a>
					<h6 class="collapse-header">Sınav Listeleri</h6>
					<a class="collapse-item" href="<?php echo base_url("sinavlar/index")?>">Listele</a>
					<a class="collapse-item" href="<?php echo base_url("sinavlar/saveIndex")?>">Ekle</a>
				</div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTbl" aria-expanded="true"
			   aria-controls="collapseTbl">
				<i class="fas fa-fw fa-table"></i>
				<span>Galeri</span>
			</a>
			<div id="collapseTbl" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Galeri</h6>
					<a class="collapse-item" href="<?php echo base_url("galeri/index")?>">Listele</a>
					<a class="collapse-item" href="<?php echo base_url("galeri/saveIndex")?>">Ekle</a>
				</div>
			</div>
		</li>
		<hr class="sidebar-divider">
		<div class="sidebar-heading">
			Yazılar
		</div>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
			   aria-controls="collapsePage">
				<i class="fas fa-fw fa-columns"></i>
				<span>Yazılar</span>
			</a>
			<div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Yazı İşlemleri</h6>
					<a class="collapse-item" href="<?php echo base_url("yazilar/index")?>">Listele</a>
					<a class="collapse-item" href="<?php echo base_url("yazilar/saveIndex")?>">Ekle</a>
				</div>
			</div>
		</li>
	</ul>
	<!-- Sidebar -->
	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
			<!-- TopBar -->
			<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
				<button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-search fa-fw"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
							 aria-labelledby="searchDropdown">
							<form class="navbar-search">
								<div class="input-group">
									<input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
										   aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button">
											<i class="fas fa-search fa-sm"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</li>
					<div class="topbar-divider d-none d-sm-block"></div>
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false">
							<img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
							<span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<!-- Topbar -->
