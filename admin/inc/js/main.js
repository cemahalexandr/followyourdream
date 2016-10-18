$(document).ready(function () {
    /*-----------------------------------------*/
    /*-----------unique functions--------------*/
    /*-----------------------------------------*/
    // удаление изображения
    $('button.del-img').click(function(){
        var localThis = $(this);
        $.ajax({
            url: "../admin/formAction/img-del.php",
            type: "POST",
            data: {
                imgSrc : $(this).siblings('img').attr('src').substring(3),
                tableName : $(this).siblings("input[name=tableName]").val(),
                columnName : $(this).siblings("input[name=columnName]").val(),
                imgCount : $(this).siblings("input[name=imgCount]").val(),
                id : $(this).siblings("input[name=id]").val()
            },
            success: function (data) {
                var test = localThis.parents('.box-body').html();
                localThis.parents('.form-group').children('.upload-img').css('display', 'block');
                localThis.parent('.form-group-img').remove();
            }
        });
    });
    
    

    /*-----------------------------------------*/
    /*-----------main functions----------------*/
    /*-----------------------------------------*/
    // скрытие загрузчика если есть картинка
    $('.form-group').each(function(){
        if ($(this).children('.form-group-img').html() != undefined){
            // console.log("yes");
            $(this).children('.upload-img').css('display', 'none');
        }
    });

    
    // передача пути к картинке в input
    $('.form-group-img img.image-to-input').each(function(){
        var imgAttr = $(this).attr('src');
        $(this).siblings('input[name=headerLogoLink]').val(imgAttr.substring(3));
    });

    
    // путь к картинкам в карусели.
    var indexCarouselSrc = '';
    $('.index-header-image-carousel img').each(function(){
        indexCarouselSrc += $(this).attr('src').substring(3) + ",";
    });
    $('input[name=headerCarouselSrc]').val(indexCarouselSrc);
});