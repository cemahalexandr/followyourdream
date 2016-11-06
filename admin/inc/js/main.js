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

    $('button.del-carousel-img').click(function(){
        var localThis = $(this);
        $.ajax({
            url: "../admin/formAction/img-many-del.php",
            type: "POST",
            data: {
                imgSrc : $(this).siblings('img').attr('src').substring(3),
                tableName : $(this).siblings("input[name=tableName]").val(),
                columnName : $(this).siblings("input[name=columnName]").val(),
                imgCount : $(this).siblings("input[name=imgCount]").val(),
                id : $(this).siblings("input[name=id]").val()
            },
            success: function (data) {
                console.log(data);
                var test = localThis.parents('.box-body').html();
                localThis.parents('.form-group').children('.upload-img').css('display', 'block');
                localThis.parent('.form-group-img').remove();
            }
        });
    });

/*-----------------------------------------*/
/*-----------main functions----------------*/
/*-----------------------------------------*/
    var maxHeight = 0;
    $('.colHeight > div').each(function () {
        var height = $(this).height();
        if (height > maxHeight){
            maxHeight = height;
        }
    });
    $('.colHeight > div').each(function () {
        $(this).css('height', maxHeight + 'px');
    });
    // console.log(maxHeight);


    // $('.colHeight > div').equalHeights();


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


/*--------работа с полем select в модальном окне--------*/
    var month = {
        jan: 'Январь',
        feb: 'Февраль',
        mar: 'Март',
        apr: 'Апрель',
        may: 'Май',
        jun: 'Июнь',
        jul: 'Июль',
        aug: 'Август',
        sep: 'Сентябрь',
        oct: 'Октябрь',
        nov: 'Ноябрь',
        dec: 'Декабрь'
    };

    //выбор нужного поля select
    var monthShort = $('#modalMonth').val();
    var monthName = '';
    for (var prop in month){
        if (prop == monthShort){
            monthName = month[prop];
        }
    }
    $('.modalMonth option').each(function(){
        if (monthName == $(this).val()){
            $(this).attr('selected', 'selected');
        }
    });

    // передача идентификатора месяца при изменении select
    $('.modalMonth').change(function(){
        for ( prop in month ){
            if ( month[prop] == $('.modalMonth').val() ){
                $('#modalMonth').val(prop);
            }
        }
    });
/*-------- / работа с полем select в модальном окне--------*/

    
    
    // change image src in textarea
    $('textarea.changeImgSrc').each(function(){
        var textareaContent = $(this).val();
        $('#replaceImgSrc').html(textareaContent); //paste textarea content
        $('#replaceImgSrc img').each(function(){ //chanse img src
            var imgSrc = $(this).attr('src');
            imgSrc = "../" + imgSrc;
            $(this).attr('src', imgSrc);
        });
        $(this).html($('#replaceImgSrc').html()); //paste new content
    });


    // $('.organizatorBlock').change(function(){
    //     //
    //     var organizatorArr = ['', '', '', '', '', '', ''];
    //     organizatorArr[0] = $(this).find('img').attr('src');
    //     organizatorArr[1] = $(this).find('input[name=orgName-1]').val();
    //     organizatorArr[2] = $(this).find('input[name=orgPosition-1]').val();
    //     organizatorArr[3] = $(this).find('input[name=orgFb-1]').val();
    //     organizatorArr[4] = $(this).find('input[name=orgSkype-1]').val();
    //     organizatorArr[5] = $(this).find('input[name=orgEmail-1]').val();
    //     organizatorArr[6] = $(this).find('input[name=orgPhone-1]').val();
    //     organizatorArr = organizatorArr.join("||");
    //     console.log(organizatorArr);
    // });

    /*---------------textarea--------------*/
    // $('.js-wrap-text').click(function (e) {
    //     e.preventDefault();
    //     var el = $('.js-textarea')[0];
    //     var selectedText = getSelectedText(el);
    //
    //     var replTag = $(this).data('tag');
    //     var replClass = $(this).data('class');
    //
    //     console.log(replTag);
    //     console.log(replClass);
    //     console.log(selectedText);
    //
    //     var newText = '<' + replTag + ' class="' + replClass + '">' + selectedText + '</' + replTag + '>'
    //
    //     replaceSelectedText(el, newText)
    // });
    // function getSelectedText(el) {
    //     var selectionObj = getInputSelection(el);
    //     var start = selectionObj['start'];
    //     var end = selectionObj['end'];
    //     var texareaValue = $(el).val();
    //     return texareaValue.substr(start, end - start);
    // }
    // function getInputSelection(el) {
    //     var start = 0, end = 0, normalizedValue, range,
    //         textInputRange, len, endRange;
    //     if (typeof el.selectionStart == "number" && typeof el.selectionEnd == "number") {
    //         start = el.selectionStart;
    //         end = el.selectionEnd;
    //     } else {
    //         range = document.selection.createRange();
    //         if (range && range.parentElement() == el) {
    //             len = el.value.length;
    //             normalizedValue = el.value.replace(/\r\n/g, "\n");
    //             // Create a working TextRange that lives only in the input
    //             textInputRange = el.createTextRange();
    //             textInputRange.moveToBookmark(range.getBookmark());
    //             // Check if the start and end of the selection are at the very end
    //             // of the input, since moveStart/moveEnd doesn't return what we want
    //             // in those cases
    //             endRange = el.createTextRange();
    //             endRange.collapse(false);
    //             if (textInputRange.compareEndPoints("StartToEnd", endRange) > -1) {
    //                 start = end = len;
    //             } else {
    //                 start = -textInputRange.moveStart("character", -len);
    //                 start += normalizedValue.slice(0, start).split("\n").length - 1;
    //                 if (textInputRange.compareEndPoints("EndToEnd", endRange) > -1) {
    //                     end = len;
    //                 } else {
    //                     end = -textInputRange.moveEnd("character", -len);
    //                     end += normalizedValue.slice(0, end).split("\n").length - 1;
    //                 }
    //             }
    //         }
    //     }
    //     return {
    //         start: start,
    //         end: end
    //     };
    // }
    // function replaceSelectedText(el, text) {
    //     var sel = getInputSelection(el), val = el.value;
    //     el.value = val.slice(0, sel.start) + text + val.slice(sel.end);
    // }
    /*---------------/ textarea--------------*/

    // $('.modalBtn__update').click(function () {
    //     var id = $('input[name=id]').val();
    //     var travelId = $('input[name=travelId]').val();
    //     var travelName = $('input[name=travelName]').val();
    //     var travelDescription = $('input[name=travelDescription]').val();
    //     var travelDate = $('input[name=travelDate]').val();
    //     var travelAlarm = $('input[name=travelAlarm]').val();
    //     var travelPrice = $('input[name=travelPrice]').val();
    //     var travelHeader = $('input[name=travelHeader]').val();
    //     var travelHeaderList = $('input[name=travelHeaderList]').val();
    //     var travelTextUnderHeader = $('input[name=travelTextUnderHeader]').val();
    //     var travelPhoneUnderHeader = $('input[name=travelPhoneUnderHeader]').val();
    //     var travelText1 = $('input[name=travelText1]').val();
    //     var travelTextUnderForm = $('input[name=travelTextUnderForm]').val();
    //     var travelText2 = $('input[name=travelText2]').val();
    //     var travelPriceInc = $('input[name=travelPriceInc]').val();
    //     var travelPriceUninc = $('input[name=travelPriceUninc]').val();
    //     var travelSteps = $('input[name=travelStep1]').val() + "," + $('input[name=travelStep2]').val() + "," + $('input[name=travelStep3]').val() + "," + $('input[name=travelStep4]').val() + "," + $('input[name=travelStep5]').val();
    //     console.log(travelSteps);
    //
    //     var file_data = $('input[name=orgImg1]').prop('files')[0];
    //     var form_data = new FormData();
    //     form_data.append('file', file_data);
    //     alert(form_data);
    //     $.ajax({
    //         url: '../admin/formAction/modal-upload.php', // point to server-side PHP script
    //         dataType: 'text',  // what to expect back from the PHP script, if anything
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         data: form_data,
    //         type: 'post',
    //         success: function(php_script_response){
    //             console.log(php_script_response); // display response from the PHP script, if any
    //         }
    //     });
    //     return false;
    // });



    /*--------ОБРАБОТКА МОДАЛЬНОГО ОКНА-----------------*/
    // $('html').on('click', '.modal-text__content .modalBtn__delBlock', function(){
    //     $(this).parents('.modalBlock').remove();
    //     return false;
    // });


    /*add tag*/
    // $('.modal-text__add .modalBtn__addBlock').click(function () {
    //     var tagName = $(this).attr('data-tag');
    //     var className = $(this).attr('data-class');
    //     var tagVal = $(this).html();
    //
    //
    //
    //     var test = $(this).parents('.modal-text__add').siblings('.modal-text__content').append(addTag);
    //     // console.log(test);
    //     return false;
    // });

    /*add img*/
    // var imgCount = '';
    // $('.modal-text__add .modalBtn__addBlockImg').click(function () {
    //     imgCount = $(this).attr('data-imgCount');
    //
    //     var tagVal = $(this).html();
    //     var images = "";
    //
    //     for(var i = 0; i < imgCount; i++){
    //         images +=
    //             "<div class=\"col-md-4\">" +
    //                 "<div class=\"upload-img\">" +
    //                     "<button class=\'modalBtn__uploadImg btn-danger btn btn-xs\'>Загрузить картинки</button>" +
    //                     "<input type=\"file\" name=\"travelTextImg\" accept=\"image/*\" id=\"\">" +
    //                     "<input data-imgId=" + i + " type=\"hidden\" name=\"\" accept=\"image/*\" id=\"travelImgNumber"+imgCount+"\">" +
    //                 "</div>" +
    //             "</div>";
    //     }
    //
    //     var addTag =
    //         "<div class=\'form-group modalBlock\'>" +
    //         "<label for>"+
    //         tagVal +
    //         "<button class=\'modalBtn__delBlock pull-right btn-danger btn btn-xs\'>удалить</button>" +
    //
    //             "<div class=\"row\">" +
    //             "<input class=\"imgSrc\" type=\"hidden\" data-tag=\"img\" data-imgCount=" + imgCount + " name=\"\" value=\"\" dataSrc=\"\">" +
    //                 images +
    //             "</div>" +
    //     "</div>";
    //     var test = $(this).parents('.modal-text__add').siblings('.modal-text__content').append(addTag);
    //     // console.log(test);
    //     return false;
    // });


    // $('html').on('click', 'button.splite', function(){
    //     var formGroup = $(this).parents('.modal-text__content').find('.form-group');
    //     console.log(formGroup.length);
    //     return false;
    // });

    // $(document).on('change', 'input[type=file]', function(e){
    //     e.preventDefault();
    //     modal.addImage();
    // });


    // modal.addTag();
    // var modal = {
    //     testVar: '',
    //     addTag: function(){
    //         testVar = 'test';
    //         console.log(testVar);
    //     },
    //     addImage: function(){
    //         var imgId = $(this).siblings('input[type=hidden]').attr('data-imgid');
    //         var imgArr = [];
    //         var formData = new FormData($('form.index-header-form')[0]);
    //         console.log(imgId);
    //         $.ajax({
    //             url: "formAction/modal-upload-img.php",
    //             type: "POST",
    //             data:  formData,
    //             contentType: false,
    //             cache: false,
    //             processData: false,
    //             success: function(data)
    //             {
    //
    //
    //                 console.log(data);
    //             }
    //         });
    //     },
    //     create: function(data){
    //
    //     }
    // }
});