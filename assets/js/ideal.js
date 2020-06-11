jQuery(document).on("keyup", function (e) {
  var modal = UIkit.modal(".uk-modal");
  if (e.keyCode === 27 && modal.isActive()) {
    modal.hide();
  }
});

jQuery(document).ready(function($){
  $(".postform").select2();
  $.fn.select2.defaults.set( "theme", "bootstrap" );
  $( "select" ).select2({
    theme: "bootstrap"
  });

});
