var leftSideVal;
var leftSideClass;
var rightSideClass;
$(document).ready(function(){
    leftSideVal = $('.left-side').html();
    leftSideClass = $('.left-side').attr('class');
    rightSideClass = $('.right-side').attr('class');

    if ($(window).width() < 681) {
        $('.left-side').html('');
        $('.left-side').attr('class','d-none');
        $('#right-side').attr('class','col-12');
    }
});
function jqueryResize() {
    var width = $(window).width();
    if (width < 681) {
        $('.left-side').html('');
        $('.left-side').attr('class','d-none');
        $('#right-side').attr('class','col-12');
    }
    else {
        console.log(leftSideClass);
        $('#left-side').attr('class',leftSideClass+' d-inline');
        $('.left-side').html(leftSideVal);
        $('#right-side').attr('class',rightSideClass);
    }
}

$(window).on('resize', jqueryResize);