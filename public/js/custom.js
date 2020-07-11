$(window).on("load", function () {
	// makes sure the whole site is loaded
	$("#status").fadeOut(); // will first fade out the loading animation
	$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
	$("body").delay(350).css({ overflow: "visible" });
});


var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll("*"), function (el) {
	if (el.offsetWidth > docWidth) {
		console.log(el);
	}
});
