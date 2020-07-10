@extends('layouts.header')
<div class="container">
	<header class="p-4">
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
</div>
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
<section class="p-4" id="main-slider">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset('img/hero/demo.jpg') }}" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('img/hero/demo.jpg') }}" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('img/hero/demo.jpg') }}" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
@extends('layouts.footer')
