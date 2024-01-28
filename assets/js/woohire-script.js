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

        $(".sub-set > a").on("click", function() {
            if ($(this).hasClass("active")) {
              $(this).removeClass("active");
              $(this)
                .siblings(".sub-content")
                .slideUp(500);
              $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
            } else {
              $(".sub-set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
              $(this)
                .find("i")
                .removeClass("fa-plus")
                .addClass("fa-minus");
              $(".sub-set > a").removeClass("active");
              $(this).addClass("active");
              $(".sub-content").slideUp(500);
              $(this)
                .siblings(".sub-content")
                .slideDown(500);
            }
        });
        

    });
})(jQuery);

