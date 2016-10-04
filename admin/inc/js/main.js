$(document).ready(function () {

    // скрытие загрузчика если есть картинка
    $('.form-group').each(function(){
        if ($(this).children('.form-group-img').html() != undefined){
            $(this).children('.upload-img').css('display', 'none');
        }
    });

    // передача пути к картинке в input
    $('.form-group-img img.image-to-input').each(function(){
        var imgAttr = $(this).attr('src');
        $(this).siblings('input').val(imgAttr.substring(3));
    });

    // путь к картинкам в карусели.
    var indexCarouselSrc = '';
    $('.index-header-image-carousel img').each(function(){
        indexCarouselSrc += $(this).attr('src').substring(3) + ",";
    });
    $('input[name=headerCarouselSrc]').val(indexCarouselSrc);
});