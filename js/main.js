$(document).ready(function () {
  $(".text-overflow").each(function () {
    const parentWidth = $(this).parent().width();
    const elementWidth = $(this).width();
    $(this).css("max-width", `${parentWidth}px`);

    // if (elementWidth >= parentWidth) {
    //   $(this).css("text-align", "left");
    // }
  });
});
