@include('admin.layouts.header')
  <div class="container p-4">
    <form method="POST" action="{{ url('add_new_product') }}" class="p-5 border" enctype="multipart/form-data">
		@csrf
      <div class="row">
      	<div class="col-md-6 form-group">
      		<label>Product Name</label>
      		<input type="text" class="form-control" required name="name">
      	</div>
      	<div class="col-md-6 form-group">
      		<label for="">Description</label>
      		<input type="text" class="form-control" required name="desc">
      	</div>
      	<div class="col-md-6 form-group">
      		<label for="inputState">Category</label>
      		<select id="inputState" class="form-control" required name="id">
      			<option selected>Choose...</option>
      			@foreach ($categories as $key=>$item)
							<option value="{{ $key }}"> {{ $item }} </option>
						@endforeach
      		</select>
      	</div>
      	<div class="col-md-6 form-group">
      		<label for="">Price</label>
      		<input type="text" class="form-control" required name="price">
      	</div>
      	<div class="col-md-6 form-group">
      		<label>Thumbnail</label>
      		<input type="file" class="form-control-file" required name="thumb">
      	</div>
      	<div class="col-md-6 form-group">
      		<button type="submit" class="btn btn-block btn-success mt-2">Add Product</button>
      	</div>
      </div>
    </form>
  </div>
@include('admin.layouts.footer')
