@include('layouts.header')
<div class="container p-5">
  <h4 class="p-2 mb-3 text-success">
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
  <div class="mb-4">
      <a href="" class="btn btn-success float-right">Checkout Now</a>
  </div>
</div>
@include('layouts.footer')
