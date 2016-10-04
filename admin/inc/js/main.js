$(document).ready(function () {
    // console.log(formGroup);
    // nav
    // console.log($(this).find('.form-group-img'));
    var formGroup = $('.form-group');
    formGroup.each(function(){
        // console.log($(this).children('.form-group-img').html());
        if ($(this).children('.form-group-img').html() != undefined){
            $(this).children('.upload-img').css('display', 'none');
            // $(this).children('input').css('display', 'none');
        }
    });
});