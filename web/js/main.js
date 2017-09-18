$(".scroll").click(function() {
    $('html,body').animate({
            scrollTop: $(".to-scroll").offset().top},
        'slow');
});

$(".scrollWestUSA").click(function() {
    $('html,body').animate({
            scrollTop: $(".to-scrollWestUSA").offset().top},
        'slow');
});

$(".scroll").click(function() {
    $(".scroll").addClass('scroll-clicked');
});

$(".scrollWestUSA").click(function() {
    $(".scrollWestUSA").addClass('scroll-clicked');
});
