<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>{{ $title }}</title>
	<link rel="shortcut icon"
		href="https://cdn.iconscout.com/icon/free/png-256/key-keys-access-entry-lock-unlock-open-4-23086.png"
		type="image/x-icon">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
		crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
	</script>
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand text-light" style="text-align: center; font-weight: bold" href="{{ url('admin/dashboard') }}">SAFEBD</a>
		<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
				class="fas fa-bars"></i></button>
		<!-- Navbar Search-->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
					aria-describedby="basic-addon2" />
				<div class="input-group-append">
					<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
				</div>
			</div>
		</form>
		<!-- Navbar-->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#">Settings</a>
					<a class="dropdown-item" href="#">Activity Log</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ url('admin/logout') }}">Logout</a>
				</div>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<a class="nav-link" href="{{ url('admin/dashboard') }}">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Dashboard
						</a>

						<a class="nav-link" href="{{ url("admin/update_banner") }}">
							<div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
							Banner
						</a>

						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#orders"
							aria-expanded="false" aria-controls="orders">
							<div class="sb-nav-link-icon"><i class="fas fa-th-list"></i></div>
							Orders
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="orders" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link" href="{{ url('admin/pending_orders') }}">Pending</a>
								<a class="nav-link" href="{{ url('admin/completed_orders') }}">Completed</a>
							</nav>
						</div>

						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#products"
							aria-expanded="false" aria-controls="products">
							<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
							Products
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="products" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link" href="{{ url('admin/add_new_product') }}">Add New</a>
								<a class="nav-link" href="{{ url('admin/products') }}">Update</a>
								<a class="nav-link" href="#">Delete</a>
							</nav>
						</div>
						<div class="sb-sidenav-menu-heading">Addons</div>
						<a class="nav-link" href="#">
							<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
							Charts
						</a>
						<a class="nav-link" href="#">
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Tables
						</a>
					</div>
				</div>
				<div class="sb-sidenav-footer text-uppercase" style="text-align: center">{{ $data['name'] }}</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
