<!doctype html>
<html lang="en">

<head>
	{{-- Required meta tags --}}
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	{{-- Bootstrap CSS --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	{{-- Custom goole fonts --}}
	<link href="https://fonts.googleapis.com/css2?family=Galada&family=Noto+Sans+JP:wght@300;400;500&display=swap"
		rel="stylesheet">

	{{-- Favicon --}}
	<link rel="shortcut icon" href="{{ asset('icon/favicon.png') }}" />

	{{-- Toastr Js --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	{{-- Custom CSS Style --}}
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<title>{{ $title }}</title>
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<div class="sticky-top bg-white">
		<header class="container px-4 pt-4">
			<div class="row">
				<div class="col-xl-3">
					<div class="logo">
						<h1 class="font-Galada text-success">SafeBD.Net</h1>
					</div>
				</div>
				<div class="col-xl-5">
					<form class="form-inline">
						<div id="top_search">
							<input type="text" name="" id="search-box" class="font-weight-light form-control mr-2"
								placeholder="What are you looking for?" size="28">
							<button type="submit" class="btn btn-success sm-block">Search</button>
						</div>
					</form>
				</div>
				<div class="col-xl-4">
						<div class="d-flex" id="user_panel_top">
							<ion-icon name="call-outline" style="font-size: 1.8rem" class="mr-2"></ion-icon>
							<span class="log-reg">
								<span><b>Hotline</b></span>
								<span>+88 01842181614</span>
							</span>
							<span style="position: relative">
								<ion-icon name="cart-outline" style="font-size: 1.8rem" class="ml-4"></ion-icon>
								<span class="cart_item_show" id="cart_val">{{ $cart_items }}</span>
							</span>
							<ion-icon name="person-outline" style="font-size: 1.8rem" class="mr-2 ml-4"></ion-icon>
							<span class="log-reg">
								<span><a href=""><b>Log In</b></a></span>
								<span><a href=""><b>Register</b></a></span>
							</span>
						</div>
				</div>
			</div>
		</header>
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-uppercase" id="navbarNavDropdown">
				<ul class="navbar-nav w-70 mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Safety</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Fire</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Lab</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Electronics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Mechanical</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Cevil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Textile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Islamic</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
