$(document).ready(function() {
    if ($(window).width() >= 678) {
        $('#FAB').hide();
    }
});

function FABWindowChangeListener() {
    var width = $(window).width();
    if (width < 678) {
        $('#FAB').show();
    }
    else {
        $('#FAB').hide();
    }
}

$(window).on('resize', FABWindowChangeListener);