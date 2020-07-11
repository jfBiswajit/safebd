<!doctype html>
<html lang="en">

<head>
	{{-- Required meta tags --}}
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	{{-- Bootstrap CSS --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	{{-- Custom goole fonts --}}
	<link href="https://fonts.googleapis.com/css2?family=Galada&family=Noto+Sans+JP:wght@300;400;500&display=swap"
		rel="stylesheet">

	{{-- Favicon --}}
	<link rel="shortcut icon" href="{{ asset('icon/favicon.png') }}" />

	{{-- Custom CSS Style --}}
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<title>{{ $title }}</title>
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<header class="container p-4">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<div class="logo">
					<h1 class="font-Galada text-success">SafeBD.Net</h1>
				</div>
			</div>
			<div class="col-lg-5 col-md-12">
				<form class="form-inline">
					<input type="text" name="" id="search-box" class="form-control mr-2" placeholder="What are you looking for?">
					<button type="submit" class="btn btn-success sm-block">Search</button>
				</form>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="d-flex" id="user-panel-top">
					<ion-icon name="call-outline" size="large" class="mr-2"></ion-icon>
					<span class="log-reg">
						<span><b>Hotline</b></span>
						<span>+88 01842181614</span>
					</span>
					<ion-icon name="cart-outline" size="large" class="ml-4"></ion-icon>
					<ion-icon name="person-outline" size="large" class="mr-2 ml-4"></ion-icon>
					<span class="log-reg">
						<span><a href=""><b>Log In</b></a></span>
						<span><a href=""><b>Register</b></a></span>
					</span>
				</div>
			</div>
		</div>
	</header>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
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
