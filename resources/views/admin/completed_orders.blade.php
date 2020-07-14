@include('admin.layouts.header')
<div class="container-fluid">
	<div class="card mb-4 mt-4">
		<div class="card-header">
			<i class="fas fa-table mr-1"></i>
			Pending Orders
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>id</th>
							<th>Deliverd At</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Product</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($orders as $key=>$item)
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{ date('d-M-Y', strtotime($item->updated_at)) }} <br> ({{ date('h:i A', strtotime($item->updated_at)) }})
							<td>{{ $item->name }}</td>
							<td>{{ $item->phone }}</td>
							<td>{{ $item->product_id }}</td>
							<td>{{ $item->quantity }}</td>
							<td>{{ $item->price }}</td>
							<td>{{ $item->address }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@include('admin.layouts.footer')
