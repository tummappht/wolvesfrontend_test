$(document).ready(function() {

  checkScreenSize();

  $( window ).resize(function() {
    checkScreenSize();
  });

  // toggle class .sidebar-active when click on .sidebarCollapse element
  $("#sidebarCollapse").on("click",function() {
    $("#main").toggleClass("sidebar-active");
    if($( window ).width() < 992) {
      $("#sidebarCollapseIcon").toggleClass("fa-times");
    }
  });

  // to check the screen size and executes a block of code in if else statement
  function checkScreenSize() {
    var screen_width = $( window ).width();
    if(screen_width > 992) {
      $("#main").addClass("sidebar-active");
      $("#sidebarCollapseIcon").removeClass("fa-times");
    } else {
      $("#main").removeClass("sidebar-active");
    }
  }

});
