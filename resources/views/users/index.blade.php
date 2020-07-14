@include('users.layouts.header')
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
<section id="new_arrival">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">NEW ARRIVAL</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($latest_products as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="card">
					<img class="card-img-top" src="storage/{{ $product->thumb }}" alt="Card image cap">
					<div class="card-body">
						<p class="card-title text-capitalize" style="font-size: 0.9rem">{{ $product->name }}</p>
						<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ 250</b></h5>
						<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
							data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">SAFETY PRODUCTS</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($safety_products as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="card">
					<img class="card-img-top" src="storage/{{ $product->thumb }}" alt="Card image cap">
					<div class="card-body">
						<p class="card-title text-capitalize" style="font-size: 0.9rem">{{ $product->name }}</p>
						<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
						<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
							data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">LAB PRODUCTS</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($lab_products as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="card">
					<img class="card-img-top" src="storage/{{ $product->thumb }}" alt="Card image cap">
					<div class="card-body">
						<p class="card-title text-capitalize" style="font-size: 0.9rem">{{ $product->name }}</p>
						<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
						<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
							data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">ELECTRONICS</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($electronics as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="card">
					<img class="card-img-top" src="storage/{{ $product->thumb }}" alt="Card image cap">
					<div class="card-body">
						<p class="card-title text-capitalize" style="font-size: 0.9rem">{{ $product->name }}</p>
						<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
						<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
							data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@include('users.layouts.footer')
