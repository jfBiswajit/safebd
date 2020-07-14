$(function () {
  $.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
		},
	})

	function CompleteOrder() {
		const DeliverBtn = $(".delivered_btn");
    DeliverBtn.click(function(e) {
      const Row = e.target.parentElement.parentElement;
      const Id = e.target.getAttribute('data-id');
            $.ajax({
							url: "delivered",
							method: "POST",
							data: {
								id: Id,
							},
							success: function (response) {
                console.log(response);
								if (response.success) {
									Row.remove();
								}
							},
							dataType: "json",
						});
    });
	}

	CompleteOrder();
});
