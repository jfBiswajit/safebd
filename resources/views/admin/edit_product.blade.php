@include('admin.layouts.header')
<div class="container p-5">
	<div class="border rounded">
		<h4 class="bg-light  p-3 text-muted">Add New Product</h4>
		<form class="p-3" method="POST" action="{{ url('add_new_product') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-6 form-group">
					<label>Product Name</label>
					<input type="text" class="form-control" required name="name" value="{{ $product->name }}">
				</div>
				<div class="col-md-6 form-group">
					<label for="">Description</label>
					<input type="text" class="form-control" required name="desc" value="{{ $product->desc }}">
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
					<input type="text" class="form-control" required name="price" value="{{ $product->price }}">
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
</div>
@include('admin.layouts.footer')
