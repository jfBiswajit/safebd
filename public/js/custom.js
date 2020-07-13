$(window).on("load", function () {
	$("#status").fadeOut();
	$("#preloader").delay(350).fadeOut("slow");
	$("body").delay(350).css({ overflow: "visible" });
});

// Start Coding Here
$(function(){
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
	toastr["success"]("Inconceivable!", "Item Added To Cart!");
	console.log(1);
})
