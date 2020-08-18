@include('users.layouts.header')
<div class="container my-5">
	<div class="row">
		<div class="col-md-5">
			<div class="exzoom" id="exzoom">
				<div class="exzoom_img_box">
					<ul class='exzoom_img_ul'>
						<li><img src="/storage/{{ $product->thumb_one }}" />
						</li>
						<li><img src="/storage/{{ $product->thumb_two }}" />
						</li>
						<li><img src="/storage/{{ $product->thumb_three }}" />
						</li>
					</ul>
				</div>
				<div class="exzoom_nav"></div>
				<p class="exzoom_btn">
					<a href="javascript:void(0);" class="exzoom_prev_btn">
						< </a> <a href="javascript:void(0);" class="exzoom_next_btn"> >
					</a>
				</p>
			</div>
		</div>
		<div class="col-md-7">
			<div class="product_details ml-4">
				<div class="title mb-3">
					<h3 class="p-1">{{ $product->name }}</h3>
					<h3 class="text-danger p-1">৳ {{ $product->price }}</h3>
				</div>
				<div class="description p-1">
					<h6>Description</h6>
					<div class="font-weight-light" style="font-weight: 300">
						{!! $product->desc !!}
					</div>
				</div>
				<div class="delivery p-1">
					<h6>Delivery</h6>
					<p class="text-muted font-weight-light">All Over Bangladesh</p>
				</div>
				<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
					data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
			</div>
		</div>
	</div>
</div>
<section id="new_arrival">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">RECOMENDED</h4>
			<p class="text-muted font-weight-light">Recomendation for You</p>
		</div>
		<div class="float-right">
			<a class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($recomended as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="/storage/{{ $product->thumb_one }}" alt="{{ $product->name }}">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>{{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
@include('users.layouts.footer')

<script>
	$(function () {

		$("#exzoom").exzoom({
			"navWidth": 60,
			"navHeight": 60,
			"navItemNum": 3,
			"navItemMargin": 7,
			"navBorder": 1,
			"autoPlay": true,
			"autoPlayTimeout": 2000
		});
	});

</script>
