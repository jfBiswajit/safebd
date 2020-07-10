@extends('layouts.header')
<div class="container">
	<header class="p-4">
		<div class="row">
			<div class="col-lg-3">
				<div class="logo">
					<h1 class="font-Galada text-success">SafeBD.Net</h1>
				</div>
			</div>
			<div class="col-lg-5">
				<form class="form-inline">
					<input type="text" name="" id="" class="form-control mr-2" placeholder="What are you looking for?">
					<button type="submit" class="btn btn-success">Search</button>
				</form>
			</div>
			<div class="col-lg-4">
				<div class="d-flex">
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
@extends('layouts.footer')
