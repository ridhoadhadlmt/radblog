$(document).ready(function(){
  $(".btn-toggle").click(function(e) {
  e.preventDefault();
    $(".main-wrapper").toggleClass("toggled");
  });

  $(".table").DataTable();
});



// $(document).ready(function(){
//   $(".collapse.show").each(function(){
//       $(this).prev(".nav-item").find("i").addClass("ion-ios-arrow-down").removeClass("ion-ios-arrow-up");
//     });
//   $(".collapse").on('show.bs.collapse', function(){
//     $(this).prev(".nav-item").find("i").removeClass("ion-ios-arrow-up").addClass("ion-ios-arrow-down");
//   }).on('hide.bs.collapse', function(){
//     $(this).prev(".nav-item").find("i").removeClass("ion-ios-arrow-down").addClass("ion-ios-arrow-up");
// });