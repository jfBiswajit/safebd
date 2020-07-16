


@include('admin.layouts.header')
<div class="container-fluid">
	<h1 class="mt-4 pb-4">Dashboard</h1>
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body text-center">
					<p>Pending Order</p>
					<h2 class="bg-light rounded-circle text-primary mx-auto" style="width: 44px; height: 44px">
						{{ $pending_order }}</h2>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="{{ url('pending_orders') }}">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body text-center">
					<p>Completed Order</p>
					<h2 class="bg-light rounded-circle text-success mx-auto" style="width: 44px; height: 44px">
						{{ $completed_order }}
					</h2>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="{{ url('completed_orders') }}">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-warning text-white mb-4">
				<div class="card-body text-center">
					<p>Total Poducts</p>
					<h2 class="bg-light rounded-circle text-warning mx-auto" style="width: 44px; height: 44px">
						{{ $total_product }}
					</h2>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="#">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-danger text-white mb-4">
				<div class="card-body text-center">
					<p>Total Category</p>
					<h2 class="bg-light rounded-circle text-danger mx-auto" style="width: 44px; height: 44px">
						{{ $total_category }}
					</h2>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="#">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-6">
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-chart-area mr-1"></i>
					Area Chart Example
				</div>
				<div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-chart-bar mr-1"></i>
					Bar Chart Example
				</div>
				<div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
			</div>
		</div>
	</div>
</div>
@include('admin.layouts.footer')
