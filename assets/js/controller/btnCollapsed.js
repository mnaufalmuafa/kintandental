$(document).ready(function(){
    if ($(window).width() < 678) {
        $(".btn-collapsed").hide();
    }
});

function btnCollapsedWindowResizeListener() {
    var width = $(window).width();
    if (width < 678) {
        $('.btn-collapsed').hide();
    }
    else {
        $('.btn-collapsed').show();
    }
}

$(window).on('resize', btnCollapsedWindowResizeListener);