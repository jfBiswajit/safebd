@include('admin.layouts.header')
<div class="container-fluid">
	<div class="card mb-4 mt-4">
		<div class="card-header">
			<i class="fas fa-table mr-1"></i>
			Update Products
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>id</th>
							<th>Thumbnail</th>
							<th>Name</th>
							<th>Price</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($products as $key=>$item)
						<tr>
							<td>{{ ++$key }}</td>
							<td><img style="width: 80px; height:80px" src="{{ asset("storage/" .$item->thumb) }}" alt="{{ $item->name }}"></td>
							<td>{{ $item->name }}</td>
							<td>{{ $item->price }}</td>
							<td><a href="{{ url("admin/products/{$item->id}") }}" class="btn btn-success btn-block">Edit</a>
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@include('admin.layouts.footer')
