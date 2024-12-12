$(window).scroll(function(){
	var scrol = $(window).scrollTop();
	if (scrol >= 1000) {
		$('#navbar-2').addClass('fixed')
	}
	else{
		$('#navbar-2').removeClass('fixed')
	}
});
// var myVar;

// function myFunction() {
//   myVar = setTimeout(showPage, 3000);
// }

// function showPage() {
//   document.getElementByClass("preloader").style.display = "none";
//   document.getElementById("body").style.display = "block";
// }

setTimeout(function(){
  $('.preloader').fadeToggle();
}, 1500);