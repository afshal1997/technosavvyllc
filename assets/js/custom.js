window.$ = jQuery.noConflict();
function OptanonWrapper() { }
$(document).ready(function () {
    AOS.init({
        duration: 1200,
    })
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            $("body").addClass("active_headers");
        }
    });
});