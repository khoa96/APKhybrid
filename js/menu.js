$(document).ready(function() {
  $(".navbar-menu .navbar-nav .nav-item").hover(function() {
    $data = $(this).data("menu");
    $(this).addClass("active");
    $(this).parents(".menu-block").find(".children-menu." + $data).addClass("active");
  }, function() {
    $data = $(this).data("menu");
    $(this).removeClass("active");
    $(this).parents(".menu-block").find(".children-menu." + $data).removeClass("active");
  });
  $('.children-menu').hover(function() {
    $(this).addClass("active");
    $hover = $(this).data("hover");
    console.log($hover);
    console.log($(this).parents(".menu-block").find(".nav-item").hasClass($hover))
    if ($(this).parents(".menu-block").find(".nav-item").hasClass($hover)) {
      $(this).parents(".menu-block").find(".nav-item."+$hover).addClass("active");
    } else {
      $(this).parents(".menu-block").find(".nav-item."+$hover).removeClass("active");
    }
  }, function() {
    $(this).parents(".menu-block").find(".nav-item").removeClass("active")
    $(this).removeClass("active");
  })
});
