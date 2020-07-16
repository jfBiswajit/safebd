@include('admin.layouts.header')
<div class="container p-5">
	<div class="border rounded">
		<h4 class="bg-light  p-3 text-muted">Update Banner</h4>
		<form class="p-3" method="POST" action="{{ url('add_new_product') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-12 form-group">
					<label class="font-weight-bold">Banner 1</label>
					<input type="file" class="form-control-file" required name="thumb">
				</div>
				<div class="col-md-12 form-group">
					<label class="font-weight-bold">Banner - 2</label>
					<input type="file" class="form-control-file" required name="thumb">
				</div>
				<div class="col-md-12 form-group">
					<label class="font-weight-bold">Banner - 3</label>
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
