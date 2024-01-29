; (function ($) {
    $(document).ready(function () {
        $(".set > a").on("click", function() {
            if ($(this).hasClass("active")) {
              $(this).removeClass("active");
              $(this)
                .siblings(".content")
                .slideUp(500);
              $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
            } else {
              $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
              $(this)
                .find("i")
                .removeClass("fa-plus")
                .addClass("fa-minus");
              $(".set > a").removeClass("active");
              $(this).addClass("active");
              $(".content").slideUp(500);
              $(this)
                .siblings(".content")
                .slideDown(500);
            }
        });

  // Starting condition when page loads
  $('.tabs-stage section').hide();
  $('.tabs-stage section:first').show();
  $('.tabs-stage section:first').addClass('active');
  $('.tabs-nav li:first').addClass('tab-active');
  
  // condition for tab click
  $('.tabs-nav a').on('click', function(event){
    event.preventDefault();
    $('.tabs-nav li').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage section').hide();
    $('.tabs-stage section').removeClass('active');
    $($(this).attr('href')).addClass('active');
    $($(this).attr('href')).fadeIn();
  });
  
      });
})(jQuery);
