@include('users.layouts.header')
    <div class="p-4">
    	<div class="row">
    		@for ($i = 0; $i < 8; $i++) <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    			<div class="card" style="margin-bottom: 2rem">
    				<img class="card-img-top" src="https://www.zatista.ie/sitemap/email-images/300x300.jpg"
    					alt="Card image cap">
    				<div class="card-body">
    					<p class="card-title text-capitalize" style="font-size: 0.9rem">AirDoctor Digital Thermometer</p>
    					<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ 250</b></h5>
    					<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="10"
    						data-name="AirDoctor Digital Thermometer" data-price="40">Add To Cart</button>
    				</div>
    			</div>
    	</div>
    	@endfor
    </div>
@include('users.layouts.footer')
