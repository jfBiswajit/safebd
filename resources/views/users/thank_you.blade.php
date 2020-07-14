@include('users.layouts.header')
<div class="container p-5">
	<div class="alert alert-success" role="alert">
		<h4 class="alert-heading">Thank You!</h4>
		<p>Thank you for visiting us and making your purchase! <br> We will contact you shortly!</p>
	</div>
	<div class="p-4 border">
		<p class="font-weight-bold">Dear {{ $name }},</p>
		<p class="font-weight-light">
			Thank you for visiting us and making your first purchase! We’re glad that you found what you were looking for.
			It is our goal that you are always happy with what you bought from us, so please let us know if your buying
			experience was anything short of excellent. We look forward to seeing you again. Have a great day!
		</p>
		<p>Best Regards,<br> safeBD.Net</p>
		<div class="d-flex">
			<a href="{{ url('/') }}" class="btn btn-success ml-auto">Go to Home</a>
		</div>
	</div>
</div>
@include('users.layouts.footer')
