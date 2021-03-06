$(function () {
	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
		},
	});

	$(".add_to_cart").click(function (e) {
		const ProductID = $(this).attr("data-id");
		const Name = $(this).attr("data-name");
		const Price = $(this).attr("data-price");
		const CartValEl = $("#cart_val");

		$.ajax({
			url: "/add_to_cart",
			method: "POST",
			data: {
				product_id: ProductID,
				name: Name,
				price: Price,
			},
			success: function (response) {
				console.log(ProductID);
				CartValEl.text(response.TotalItems);
				toastr.options = {
					closeButton: false,
					debug: false,
					newestOnTop: false,
					progressBar: false,
					positionClass: "toast-top-right",
					preventDuplicates: false,
					onclick: null,
					showDuration: "300",
					hideDuration: "1000",
					timeOut: "5000",
					extendedTimeOut: "1000",
					showEasing: "swing",
					hideEasing: "linear",
					showMethod: "fadeIn",
					hideMethod: "fadeOut",
				};
				toastr["success"]("Item Added To The Cart!");
			},
			dataType: "json",
		});
		e.preventDefault();
	});
});
