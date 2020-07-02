$(document).ready(function () {
    $(".soysub a").removeAttr().attr('class','dropdown-item');

    $('.soysub a').on('click', function () {
            link=$(this).attr('href');
            window.location.href=link;        
    });
});