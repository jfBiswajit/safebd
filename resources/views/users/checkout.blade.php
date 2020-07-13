@include('users.layouts.header')
  <div class="container font-weight-light">
    <form class="p-5 m-5 border" method="POST" action="{{ url('thank_you') }}">
			@csrf
      <div class="row">
      	<div class="col-md-6">
      		<div class="form-group">
      			<label for="name">Full Name</label>
      			<input type="text" class="form-control font-weight-light" id="name" aria-describedby="emailHelp"
      				placeholder="First & Last Name" name="name" required>
      		</div>
      	</div>
      	<div class="col-md-6">
      		<div class="form-group">
      			<label for="phone">Phone</label>
      			<input required type="text" class="form-control font-weight-light" id="phone" placeholder="+88 01XXXXXXXXX" name="phone">
      		</div>
      	</div>
      </div>
      <div class="row">
      	<div class="col-md-6">
      		<div class="form-group">
      			<label for="address_one">Address</label>
      			<input type="text" class="form-control font-weight-light" id="address_one" aria-describedby="emailHelp"
      				placeholder="House #2B, Road #08, Nikunja-2, Khilkhet, Dhaka 1229" name="address">
      		</div>
      	</div>
      	<div class="col-md-6">
      		<div class="form-group">
      			<label for="address_two">Address 2 <span class="text-muted">(Optional)</span></label>
      			<input type="text" class="form-control" id="address_two" name="address_op">
      		</div>
      	</div>
      </div>
      <div class="d-flex">
      	<button type="submit" class="btn btn-success ml-auto">Checkout Now</button>
      </div>
    </form>
  </div>
@include('users.layouts.footer')
