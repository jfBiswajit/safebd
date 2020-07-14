$(function () {
	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
		},
	});

	function CompleteOrder() {
		console.log(1);
	}

	CompleteOrder();
});
