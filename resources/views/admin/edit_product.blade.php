@include('admin.layouts.header')
<div class="container p-5">
	<div class="border rounded">
		<h4 class="bg-light  p-3 text-muted">Add New Product</h4>
		<form class="p-3" method="POST" action="{{ url("admin/products/{$product->id}") }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-12 form-group">
					<label>Product Name</label>
					<input type="text" class="form-control" name="name" value="{{ $product->name }}">
				</div>
				<div class="col-md-12 form-group">
					<label for="">Description</label>
					<textarea class="form-control" required name="desc" id="" cols="30" rows="10">{{ $product->desc }}</textarea>
				</div>
				<div class="col-md-6 form-group">
					<label for="inputState">Category</label>
					<select id="inputState" class="form-control" name="id">
						<option selected value="">Choose...</option>
						@foreach ($categories as $key=>$item)
						<option value="{{ $key }}"> {{ $item }} </option>
						@endforeach
					</select>
				</div>
				<div class="col-md-6 form-group">
					<label for="">Price</label>
					<input type="text" class="form-control" name="price" value="{{ $product->price }}">
				</div>
				<div class="col-md-2 form-group">
					<label>Thumbnail one</label>
					<input type="file" class="form-control-file" name="thumb_one">
				</div>
				<div class="col-md-2 form-group">
					<label>Thumbnail two</label>
					<input type="file" class="form-control-file" name="thumb_two">
				</div>
				<div class="col-md-2 form-group">
					<label>Thumbnail three</label>
					<input type="file" class="form-control-file" name="thumb_three">
				</div>
			</div>
			<div class="form-group">
				<button type="submit" type="submit" class="btn btn-block btn-success mt-2 text-light">Add
					Product</button>
			</div>
		</form>
	</div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
	CKEDITOR.replace('desc');

</script>
@include('admin.layouts.footer')
