(function ($, root, undefined) {

    $(function () {

        $(document).ready(function () {
            var o = $(".offcanvas__toggle"), a = $(".offcanvas-holder"), e = $("#offcanvas-mask"), n = $(".offcanvas__close"), s = $("body");
            o.on("click", function (o) {
                o.preventDefault(), a.addClass("open"), e.addClass("open"), s.addClass("offcanvas-open"), $asidePanel.removeClass("aside-open"), $asideBtnToggle.removeClass("open")
            }), e.on("click", function () {
                a.removeClass("open"), e.removeClass("open"), s.removeClass("offcanvas-open")
            }), n.on("click", function (o) {
                o.preventDefault(), a.removeClass("open"), e.removeClass("open"), s.removeClass("offcanvas-open")
            }), $(window).width() <= 767 ? $(".offcanvas-holder").appendTo("body") : $(".offcanvas-holder").appendTo(".offcanvas-wrapper")
        }), $(window).resize(function () {
            $(window).width() <= 767 ? $(".offcanvas-holder").appendTo("body") : $(".offcanvas-holder").appendTo(".offcanvas-wrapper")
        }), $(window).scroll(function () {
            $(this).scrollTop() > 30 && !$(".navbar-holder").hasClass("navbar-holder--sticky") ? $(".navbar-holder").addClass("navbar-holder--sticky") : $(this).scrollTop() <= 30 && $(".navbar-holder").removeClass("navbar-holder--sticky")
        });

    });

})(jQuery, this);
