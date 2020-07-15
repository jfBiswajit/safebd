@include('users.layouts.header')
<div class="p-4">
	<div class="row">
		@foreach ($products as $product)
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
				<div class="card">
					<img class="card-img-top" src="storage/{{ $product->thumb }}" alt="{{ $product->name }}">
					<div class="card-body">
						<p class="card-title text-capitalize" style="font-size: 0.9rem">{{ $product->name }}</p>
						<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ 250</b></h5>
						<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
							data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
					</div>
				</div>
			</a>
		</div>
		@endforeach
	</div>
	@include('users.layouts.footer')
