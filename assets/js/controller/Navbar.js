var valLink1;
var valLink2;
var valLink3;
var valLink4;

$(document).ready(function() {
    valLink1 = $('#link-1').html();
    valLink2 = $('#link-2').html();
    valLink4 = $('#link-4').html();
    valLink5 = $('#link-5').html();
    if ($(window).width() < 678) {
        $("#link-5").html(valLink1);
        $("#link-4").html(valLink2);
        $("#link-2").html(valLink4);
        $("#link-1").html(valLink5);
    }
    $('#intentDropDown').click(function(){
        var kelas = $('#dropdownClick').attr('class');
        if (kelas === 'topnav') {
            $('#dropdownClick').attr('class','topnav responsive');
        }
        else {
            $('#dropdownClick').attr('class','topnav');
        }
    });
});

function NavbarWindowChangeListener() {
    var width = $(window).width();
    if (width < 678) {
        $("#link-5").html(valLink1);
        $("#link-4").html(valLink2);
        $("#link-2").html(valLink4);
        $("#link-1").html(valLink5);
    }
    else {
        $("#link-5").html(valLink5);
        $("#link-4").html(valLink4);
        $("#link-2").html(valLink2);
        $("#link-1").html(valLink1);
    }
}

$(window).on('resize', NavbarWindowChangeListener);