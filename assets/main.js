$(document).ready(function(){
    $('body').on('click', '.image', function (e) {
        if($(this).hasClass('wrong')){
            $(this).find('img').fadeOut(300);
        }
    });
});