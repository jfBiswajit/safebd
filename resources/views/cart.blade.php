@include('layouts.header')
<div class="container">
  <div class="p-4 border rounded m-4">
    <h4 class="pb-4 mb-3 text-success border-bottom">
    	<ion-icon name="cart"></ion-icon>
    	<span class="">My Cart</span>
    </h4>
    <table class="table">
    	<thead class="thead-light">
    		<tr>
    			<th scope="col">#</th>
    			<th scope="col">Products</th>
    			<th scope="col">Price</th>
    			<th scope="col"></th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr>
    			<th scope="row">1</th>
    			<td>Product One</td>
    			<td>৳ 50</td>
    			<td>
    				<ion-icon name="close-outline"></ion-icon>
    			</td>
    		</tr>
    		<tr>
    			<th scope="row">2</th>
    			<td>Product One</td>
    			<td>৳ 50</td>
    			<td>
    				<ion-icon name="close-outline"></ion-icon>
    			</td>
    		</tr>
    		<tr>
    			<th scope="row">3</th>
    			<td>Product One</td>
    			<td>৳ 50</td>
    			<td>
    				<ion-icon name="close-outline"></ion-icon>
    			</td>
    		</tr>
    		<tr>
    			<th scope="row"></th>
    			<td>Total</td>
    			<td>৳ 150</td>
    			<td></td>
    		</tr>
    	</tbody>
    </table>
    <div class="d-flex">
    	<a href="" class="btn btn-success ml-auto">Checkout Now</a>
    </div>
  </div>
</div>
@include('layouts.footer')
