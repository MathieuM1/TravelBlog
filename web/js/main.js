$(".scroll").click(function() {
    $('html,body').animate({
            scrollTop: $(".presentation").offset().top},
        'slow');
});
