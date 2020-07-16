@include('admin.layouts.header')
<div class="container p-5">
	<div class="border rounded">
		<h4 class="bg-light  p-3 text-muted">Update Banner</h4>
		<form class="p-3" method="POST" action="{{ url('admin/update_banner') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-12 form-group">
					<label class="font-weight-bold">Select Banner</label>
					<input type="file" class="form-control-file" name="ban">
				</div>
				<div class="col-md-6 form-group">
					<button type="submit" class="btn btn-block btn-success mt-2">Change Banner</button>
				</div>
			</div>
		</form>
	</div>
</div>
@include('admin.layouts.footer')
