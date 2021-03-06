$(document).ready(function() {

    
    
    // carousel owl
    $(".header-owl-carousel").owlCarousel({
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay: 6000
    });
    $(".reviews__wrapper, .temp-slider-wrap").owlCarousel({
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoHeight : true
    });



    //video img to background
    $('.our-video__wrapper').each(function(){
        var imgSrc = $(this).attr('data-image');
        $(this).children("a").css("background-image", "url(../" + imgSrc + ")");//local
        // $(this).children("a").css("background-image", "url(../followyourdream/" + imgSrc + ")"); // server
    });



    // БЛОК БЛИЖАЙШИЕ СОБЫТИЕ регулировка картинок по высоте
    $('.upcoming-event__item').each(function(){
        var upcomingWrapper = $(this).find(".upcoming-event__item-img-wrapper");
        var upcomingImg = $(this).find(".upcoming-event__item-img-wrapper img");
        // alert(upcomingImg.attr('src'));
        if (upcomingWrapper.height() > upcomingImg.height()){
            upcomingImg.addClass("height");
        }
    });



    // arctic/template header background
    var arcticHeaderImg = $('.arctic header img').attr('src');
    $('.arctic header').css('background-image', 'url(../'+ arcticHeaderImg +')');



    // template header background
    var tempHeaderImg = $('.template-page header img').attr('src');
    $('.template-page header').css('background-image', 'url(../'+ tempHeaderImg +')');


    /*------------------------------------------*/
    /*-------бегите от этого заказчика, глупцы---*/
    /*--------------мало платит------------------*/
    /*-------------много требует-----------------*/
    /*------------отклоняется от ТЗ----------------*/
    /*------------------------------------------*/
    console.log("бегите от этого заказчика, глупцы! мало платит! много требует! отклоняется от ТЗ!");
    // change li on scroll
    $(function() {
        $("#navbar a[href*=#]:not([href=#])").click(function() {
            $("#navbar li").removeClass('active');
            $(this).closest('li').addClass('active');
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: (target.offset().top - 80) // 70px offset for navbar menu
                    }, 500);
                    return false;
                }
            }
        });

        $('.header-button a.button, .expectation a.button, .upcoming-event__bottom a.button ').click(function () {
            var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1500); // анимируем скроолинг к элементу scroll_el
        $('form.footer__sotial-form a.button').animate({opacity: 0}, 1000).css('display', 'none');
        $('form.footer__sotial-form .animate-wrap').css('display', 'inline-block').animate({opacity: 1}, 1000);
        $("footer").addClass("blur");
            }
            return false; // выключаем стандартное действие
        });
    });



    // opacity 1 after load page
    $("body").animate({opacity: 1}, 1500);


    /*--------SCRIPTS NEW START------------------------------------------*/
    
    
    
    // INDEX --- TAKE PART FORM
    // open modal
    $(".index_modal_subscribe").on('click', function(){
        $("#takePartModal").modal("show");
    });    
    // sent form
    $("#takePartForm").on("submit", function (e) {
        $.ajax({
            url: "data/formAction.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
                $("#takePartForm .takepart_header").text("ПОЗДРАВЛЯЕМ!");
                $("#takePartForm .takepart_descrip").text("ТЕПЕРЬ ТВОЯ ЖИЗНЬ  НАПОЛНИТСЯ НЕОБЫКНОВЕННЫМИ ПУТЕШЕСТВИЯМИ И ЭМОЦИЯМИ!");
                $("#takePartForm .modal-body, #takePartForm .modal-footer").addClass("hidden");
            }
        });
        e.preventDefault();
    });
    // reload form
    $("#takePartModal").on("hidden.bs.modal", function () {
        $("#takePartForm .takepart_header").text("Заявка на получение рассылки");
        $("#takePartForm .takepart_descrip").html("Оставьте свои контактные данные<br />и мы будем сообщать вам самое интересное в мире путешествий");
        $("#takePartForm .modal-body").removeClass("hidden");
        $("#takePartForm .modal-footer").removeClass("hidden");
        $("#takePartForm .modal-footer").addClass("hidden");
        $("#takePartForm #name").val("");
        $("#takePartForm #phone").val("");
        $("#takePartForm #mail").val("");
    });




     // Arctica --- TAKE PART FORM
    // open modal
    $(".index_modal_arktika").on('click', function(){
        $("#takePartModal-arctica").modal("show");
    });    
    // sent form
    $("#takePartForm-arctica").on("submit", function (e) {
        $.ajax({
            url: "data/formAction.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
                $("#takePartForm-arctica .takepart_header").text("ПОЗДРАВЛЯЕМ!");
                $("#takePartForm-arctica .takepart_descrip").text("ТЕПЕРЬ ТВОЯ ЖИЗНЬ  НАПОЛНИТСЯ НЕОБЫКНОВЕННЫМИ ПУТЕШЕСТВИЯМИ И ЭМОЦИЯМИ!");
                $("#takePartForm-arctica .modal-body, #takePartForm-arctica .modal-footer").addClass("hidden");
            }
        });
        e.preventDefault();
    });
    // reload form
    $("#takePartForm-arctica").on("hidden.bs.modal", function () {
        $("#takePartForm-arctica .takepart_header").text("Заявка на получение рассылки");
        $("#takePartForm-arctica .takepart_descrip").html("Оставьте свои контактные данные<br />и мы будем сообщать вам самое интересное в мире путешествий");
        $("#takePartForm-arctica .modal-body").removeClass("hidden");
        $("#takePartForm-arctica .modal-footer").removeClass("hidden");
        $("#takePartForm-arctica .modal-footer").addClass("hidden");
        $("#takePartForm-arctica #name").val("");
        $("#takePartForm-arctica #phone").val("");
        $("#takePartForm-arctica #mail").val("");
    });
    
    


    // Yatching --- TAKE PART FORM
    // open modal
    $(".index_modal_yatching").on('click', function(){
        $("#takePartModal-yatching").modal("show");
    });    
    // sent form
    $("#takePartForm-yatching").on("submit", function (e) {
        $.ajax({
            url: "data/formAction.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
                $("#takePartForm-yatching .takepart_header").text("ПОЗДРАВЛЯЕМ!");
                $("#takePartForm-yatching .takepart_descrip").text("ТЕПЕРЬ ТВОЯ ЖИЗНЬ  НАПОЛНИТСЯ НЕОБЫКНОВЕННЫМИ ПУТЕШЕСТВИЯМИ И ЭМОЦИЯМИ!");
                $("#takePartForm-yatching .modal-body, #takePartForm-yatching .modal-footer").addClass("hidden");
            }
        });
        e.preventDefault();
    });
    // reload form
    $("#takePartForm-arctica").on("hidden.bs.modal", function () {
        $("#takePartForm-yatching .takepart_header").text("Заявка на получение рассылки");
        $("#takePartForm-yatching .takepart_descrip").html("Оставьте свои контактные данные<br />и мы будем сообщать вам самое интересное в мире путешествий");
        $("#takePartForm-yatching .modal-body").removeClass("hidden");
        $("#takePartForm-yatching .modal-footer").removeClass("hidden");
        $("#takePartForm-yatching .modal-footer").addClass("hidden");
        $("#takePartForm-yatching #name").val("");
        $("#takePartForm-yatching #phone").val("");
        $("#takePartForm-yatching #mail").val("");
    });
    
    


// Adventure --- TAKE PART FORM
    // open modal
    $(".index_modal_adventure").on('click', function(){
        $("#takePartModal-adventure").modal("show");
    });    
    // sent form
    $("#takePartForm-adventure").on("submit", function (e) {
        $.ajax({
            url: "data/formAction.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
                $("#takePartForm-adventure .takepart_header").text("ПОЗДРАВЛЯЕМ!");
                $("#takePartForm-adventure .takepart_descrip").text("ТЕПЕРЬ ТВОЯ ЖИЗНЬ  НАПОЛНИТСЯ НЕОБЫКНОВЕННЫМИ ПУТЕШЕСТВИЯМИ И ЭМОЦИЯМИ!");
                $("#takePartForm-adventure .modal-body, #takePartForm-adventure .modal-footer").addClass("hidden");
            }
        });
        e.preventDefault();
    });
    // reload form
    $("#takePartForm-arctica").on("hidden.bs.modal", function () {
        $("#takePartForm-adventure .takepart_header").text("Заявка на получение рассылки");
        $("#takePartForm-adventure .takepart_descrip").html("Оставьте свои контактные данные<br />и мы будем сообщать вам самое интересное в мире путешествий");
        $("#takePartForm-adventure .modal-body").removeClass("hidden");
        $("#takePartForm-adventure .modal-footer").removeClass("hidden");
        $("#takePartForm-adventure .modal-footer").addClass("hidden");
        $("#takePartForm-adventure #name").val("");
        $("#takePartForm-adventure #phone").val("");
        $("#takePartForm-adventure #mail").val("");
    });

    
    
    
    // FOOTER SENT FORM
    // on click to footer form
    $('form.footer__sotial-form a.button').on('click', function(e){
        $(this).animate({opacity: 0}, 1000).css('display', 'none');
        $('form.footer__sotial-form .animate-wrap').css('display', 'inline-block').animate({opacity: 1}, 1000);
        $("footer").addClass("blur");
        e.preventDefault();
        return 0;
    });
    // sent form
    $('.footer__sotial-form').on("submit", function (e) {
        $.ajax({
            url: "data/formAction.php",
            type: "POST",
            data: $(this).serialize(),
            success: function () {
                $(".footer__sotial-form .animate-wrap").css('display', 'none');
                $(".footer__sotial-form .footer__sotial-thanks").css('display', 'block');
                setTimeout(function(){
                    $(".footer__sotial-form .footer__sotial-thanks").css('display', 'none');
                    $('form.footer__sotial-form a.button').css('display', 'inline-block').animate({opacity: 1}, 1000);
                }, 50000);
            }
        });
        e.preventDefault();
    });
    // hidden form on bind
    $(document).on("click", function (event) {
        if( !$(event.target).closest(".footer__sotial-form .animate-wrap").length && $(event.target).closest(".footer__sotial-form a.button").length){
            return;
        } else if ($(event.target).closest(".footer__sotial-form .animate-wrap").length){
            return 0;
        } else {
            console.log($(event.target).closest(".footer__sotial-form .animate-wrap").length);
            $(".footer__sotial-form .animate-wrap").css('display', 'none');
            $('form.footer__sotial-form a.button').animate({opacity: 1}, 1000).css('display', 'inline-block');
            $("footer").removeClass("blur");
            event.stopPropagation();
        }
        // event.preventDefault();
    });
    // reload form
    $("#takePartModal").on("hidden.bs.modal", function () {
        // $(".footer__sotial-form .animate-wrap").css('display', '');
        $("#takePartForm .takepart_header").text("Заявка на получение рассылки");
        $("#takePartForm .takepart_descrip").html("Оставьте свои контактные данные<br />и мы будем сообщать вам самое интересное в мире путешествий");
        $("#takePartForm .modal-body").removeClass("hidden");
        $("#takePartForm .modal-footer").removeClass("hidden");
        $("#takePartForm .modal-footer").addClass("hidden");
        $("#takePartForm #name").val("");
        $("#takePartForm #phone").val("");
        $("#takePartForm #mail").val("");
    });



    // CALENDAR FIX MANY MODAL
    $("#calendar-page").on('hidden.bs.modal', '.index_modal, #thankModal', function () {
        $('.index_modal:visible').length;
        $('#thankModal:visible').length;
        $('body').addClass('modal-open');
    });



    // CALENDAR MODAL FORM GET PROGRAM
    // sent form
    $('form.calendarModalGetForm').on("submit", function (e) {
        var funcThis = $(this);
        var tourName = $(this).parents(".modal-dialog").find("#calendar-modal-title").text();
        // console.log(tourName);
        $(this).find('input#tourname').attr('value', tourName);
        $.ajax({
            url: "data/formAction.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                $("#thankModal").modal("show");
                funcThis.find("input.form-control").val("");
            }
        });
        e.preventDefault();
    });
    


    // CALENDAR MODAL FORM ADD TO EXPEDITION BUTTON
    //open modal
    $(".calendar-modal-new button.add_to_expedition").on('click', function(){
        $("#takePartModal").modal("show");
        var tourName = $(this).parents(".modal-dialog").find("#calendar-modal-title").text();
        $("#takePartModal").find("input#Tour_Id").attr('value', 'Принять участие в экспедиции: ' + tourName);
        $("#takePartModal").find("input[type=submit]").attr('value', 'Отправить');
        $("#takePartForm .modal-footer").removeClass("hidden");
    });



    // CALENDAR MODAL FROM URL
    var currentUrl = document.URL;
    var isCalendar = currentUrl.indexOf('calendar');
    if (isCalendar != -1){
        var isModal = currentUrl.indexOf('#');
        isModal = currentUrl.substring(isModal);
        $(isModal).modal("show");
    }



    // $('form.calendarModalGetForm a.button').on('click', function(e){
    //     $(this).animate({opacity: 0}, 1000).css('display', 'none');
    //     $('form.footer__sotial-form .animate-wrap').css('display', 'inline-block').animate({opacity: 1}, 1000);
    //     e.preventDefault();
    //     return 0;
    // });


    //INDEX --- TAKE PART MODAL SOTIAL
    // function openTakePartModalsocial() {
    //     $("#takePartModalsocial").modal("show");
    // }
    //
    // $(".index_modal_sotial").on('click', function(){
    //     openTakePartModalsocial();
    // });
    //
    // $("#takePartFormsocial").on("submit", function (e) {
    //     $.ajax({
    //         url: "data/formAction.php",
    //         type: "POST",
    //         data: $(this).serialize(),
    //         success: function (data) {
    //             // console.log(data);
    //             $("#takePartFormsocial .takepart_header").text("ПОЗДРАВЛЯЕМ!");
    //             $("#takePartFormsocial .takepart_descrip").text("ТЕПЕРЬ ТВОЯ ЖИЗНЬ  НАПОЛНИТСЯ НЕОБЫКНОВЕННЫМИ ПУТЕШЕСТВИЯМИ И ЭМОЦИЯМИ!");
    //             $("#takePartFormsocial .modal-body, #takePartFormsocial .modal-footer").addClass("hidden");
    //         }
    //     });
    //     e.preventDefault();
    // });
    // $("#takePartModalsocial").on("hidden.bs.modal", function () {
    //     $("#takePartFormsocial .takepart_header").text("Присоединиться к сообществу");
    //     $("#takePartFormsocial .takepart_descrip").html("Оставьте свои контактные данные<br />и мы свяжемся с Вами в течение дня");
    //     $("#takePartFormsocial .modal-body").removeClass("hidden");
    //     $("#takePartFormsocial .modal-footer").removeClass("hidden");
    //     $("#takePartFormsocial #name").val("");
    //     $("#takePartFormsocial #phone").val("");
    //     $("#takePartFormsocial #mail").val("");
    // });


    // CALENDAR --- MODAL
    // $('.calendar_modal_sub').on('click', function () {
    //     // alert('test');
    //     openTakePartModal();
    // });
    // $(document).on('show.bs.modal' ,'.index_modal' , function () {
    //     // alert('test');
    //     var zIndex = 1040 + (10 * $('.index_modal:visible').length);
    //     $(this).css('z-index', zIndex);
    //     setTimeout(function() {
    //         $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
    //         $('body').addClass('modal-open');
    //     }, 0);
    // });


    /*--------SCRIPTS NEW END------------------------------------------*/



    /*--------SCRIPTS FROM INDEX.PHP START------------------------------------------*/


    //


    /*--------SCRIPTS FROM INDEX.PHP END------------------------------------------*/



    /*--------SCRIPTS FROM CALENDAR.PHP START------------------------------------------*/
    // function closeWindow(videoPlayer) {
    //     var v = $("#" + videoPlayer + " video")[0];
    //     v.pause();
    //     v.firstChild.nodeValue = 'Play';
    //     $("#" + videoPlayer).fadeOut('slow');
    //     $("body").css("overflow-y", "scroll");
    // }
    //
    // function openFullVideo(videoPlayer) {
    //     $("#" + videoPlayer).fadeIn('slow');
    //     var v = $("#" + videoPlayer + " video")[0];
    //     v.play();
    //     v.firstChild.nodeValue = 'Pause';
    //     $("body").css("overflow", "hidden");
    // }
    //

    //
    // function openTakePartModal(text) {
    //     $("#takePartModal").modal("show");
    //     ga('send', 'event', 'Страница тура', 'Нажата кнопка на странице', text);
    //     $("#takePartModal #analytic").val(text);
    // }
    //
    // function openTakePartModalsocial() {
    //     $("#takePartModalsocial").modal("show");
    // }
    //
    // function openTakePartModalsocial(text) {
    //     $("#takePartModalsocial").modal("show");
    //     ga('send', 'event', 'Страница тура', 'Нажата кнопка на странице', text);
    //     $("#takePartModalsocial #analytic").val(text);
    // }
    //
    // function openGetRecommendModal() {
    //     $("#getRecommendModal").modal("show");
    // }
    //
    // function openQuestionModal() {
    //     $("#questionModal").modal("show");
    // }
    //
    //
    // // $('#nav').affix({
    // //     offset: {
    // //         top: $('header').height()
    // //     }
    // // });
    //
    // // if (($(window).height() + 100) < $(document).height()) {
    // //     $('#top-link-block').removeClass('hidden').affix({
    // //         // how far to scroll down before link "slides" into view
    // //         offset: {top: 100}
    // //     });
    // // }
    //
    // function setHeight() {
    //     var h = $(window).height() - 90;
    //     if (h > $("#fullheight .container").height()) {
    //         $("#fullheight").css("height", h);
    //         var mt = (h - 520) / 2;
    //         if (mt > 0) {
    //             $("#fullheight .container").css("padding-top", mt);
    //         }
    //     }
    // }
    //
    //
    // function onScroll(event) {
    //     var scrollPos = $(document).scrollTop();
    //     $('#navbar-collapse-1 a').each(function () {
    //         var currLink = $(this);
    //         var refElement = $(currLink.attr("href"));
    //         if (refElement.position().top - 93 <= scrollPos && refElement.position().top - 93 + refElement.height() > scrollPos) {
    //             $('#navbar-collapse-1 ul li a').removeClass("activelink");
    //             currLink.addClass("activelink");
    //         }
    //         else {
    //             currLink.removeClass("activelink");
    //         }
    //     });
    // }
    //
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "zayavka.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "zayavka.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#getProgramForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "programma.php",
    //         type: "POST",
    //         data: {
    //             name: $("#getProgramForm #name").val(),
    //             phone: $("#getProgramForm #phone").val(),
    //             mail: $("#getProgramForm #mail").val(),
    //             tourname: $("#getProgramForm #tourname").val()
    //         },
    //         success: function (data) {
    //             $("#thankModal").modal("show");
    //             $("#getProgramForm #name").val("");
    //             $("#getProgramForm #phone").val("");
    //             $("#getProgramForm #mail").val("");
    //
    //         }
    //     });
    // });
    //
    //
    // $("#takePartModal").on("hidden.bs.modal", function () {
    //     $("#takePartForm .takepart_header").text("Заявка на участие");
    //     $("#takePartForm .takepart_descrip").html("Оставьте свои контактные данные<br />и мы свяжемся с Вами в течение дня<br />для обсуждения деталей путешествия");
    //     $("#takePartForm .modal-body").removeClass("hidden");
    //     $("#takePartForm .modal-footer input").removeClass("hidden");
    //     $("#takePartForm .modal-footer button").addClass("hidden");
    //     $("#takePartForm #name").val("");
    //     $("#takePartForm #phone").val("");
    //     $("#takePartForm #mail").val("");
    // })
    //
    // $("#takePartForm").on("submit", function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "zayavka.php",
    //         type: "POST",
    //         data: {
    //             name: $("#takePartForm #name").val(),
    //             phone: $("#takePartForm #phone").val(),
    //             mail: $("#takePartForm #mail").val(),
    //             tourname: $("#Tour_Id").val()
    //         },
    //         success: function (data) {
    //             $("#errorMsg").addClass("hidden");
    //             //$("#takePartModal").modal("hide");
    //             $("#takePartForm .takepart_header").text("Благодарим за заявку!");
    //             $("#takePartForm .takepart_descrip").text("Мы перезвоним Вам в течение рабочего дня.");
    //             $("#takePartForm .modal-body").addClass("hidden");
    //             $("#takePartForm .modal-footer input").addClass("hidden");
    //             $("#takePartForm .modal-footer button").removeClass("hidden");
    //         }
    //     });
    // });
    //
    //
    // var videos = document.getElementsByTagName('video');
    // for (var i = 0; i < videos.length; i++) {
    //     var v = videos[i];
    //     v.volume = 0.5;
    //     v.addEventListener('click', function () {
    //         if (v.paused == false) {
    //             v.pause();
    //             v.firstChild.nodeValue = 'Play';
    //         }
    //         else {
    //             v.play();
    //             v.firstChild.nodeValue = 'Pause';
    //         }
    //     });
    // }
    //
    //
    // $(window).resize(function () {
    //     setHeight();
    // })
    //
    //
    // setHeight();
    // $(document).on("scroll", onScroll);
    // //smoothscroll
    // $('#nav a[href^="#"]').on('click', function (e) {
    //     e.preventDefault();
    //     $(document).off("scroll");
    //
    //     $('a').each(function () {
    //         $(this).removeClass('activelink');
    //     })
    //     $(this).addClass('activelink');
    //
    //     var target = this.hash,
    //         menu = target;
    //     $target = $(target);
    //
    //     $('html, body').stop().animate({
    //         'scrollTop': $target.offset().top - 93
    //     }, 300, 'swing', function () {
    //         window.location.hash = target;
    //         $(document).on("scroll", onScroll);
    //     });
    // });



    /*--------SCRIPTS FROM CALENDAR.PHP END------------------------------------------*/


    /*--------SCRIPTS FROM FOOTER.PHP START------------------------------------------*/
    // var videos = document.getElementsByTagName('video');
    // for (var i = 0; i < videos.length; i++) {
    //     var v = videos[i];
    //     v.volume = 0.5;
    //     v.addEventListener('click', function () {
    //         if (v.paused == false) {
    //             v.pause();
    //             v.firstChild.nodeValue = 'Play';
    //         }
    //         else {
    //             v.play();
    //             v.firstChild.nodeValue = 'Pause';
    //         }
    //     });
    // }
    //
    // function closeWindow(videoPlayer) {
    //     var v = $("#" + videoPlayer + " video")[0];
    //     v.pause();
    //     v.firstChild.nodeValue = 'Play';
    //     $("#" + videoPlayer).fadeOut('slow');
    //     $("body").css("overflow-y", "scroll");
    // }
    //
    // function openFullVideo(videoPlayer) {
    //     $("#" + videoPlayer).fadeIn('slow');
    //     var v = $("#" + videoPlayer + " video")[0];
    //     v.play();
    //     v.firstChild.nodeValue = 'Pause';
    //     $("body").css("overflow", "hidden");
    // }
    //
    // function openTakePartModal() {
    //     $("#takePartModal").modal("show");
    // }
    //
    // function openTakePartModal(text) {
    //     $("#takePartModal").modal("show");
    //     ga('send', 'event', 'Страница тура', 'Нажата кнопка на странице', text);
    //     $("#takePartModal #analytic").val(text);
    // }
    //

    //
    // function openTakePartModalsocial(text) {
    //     $("#takePartModalsocial").modal("show");
    //     ga('send', 'event', 'Страница тура', 'Нажата кнопка на странице', text);
    //     $("#takePartModalsocial #analytic").val(text);
    // }
    //
    // function openGetRecommendModal() {
    //     $("#getRecommendModal").modal("show");
    // }
    //
    // function openQuestionModal() {
    //     $("#questionModal").modal("show");
    // }
    //
    // $('#nav').affix({
    //     offset: {
    //         top: $('header').height()
    //     }
    // });
    //
    // if (($(window).height() + 100) < $(document).height()) {
    //     $('#top-link-block').removeClass('hidden').affix({
    //         // how far to scroll down before link "slides" into view
    //         offset: { top: 100 }
    //     });
    // }
    //
    // if (($(window).height() + 100) < $(document).height()) {
    //     $('#top-link-mark').removeClass('hidden').affix({
    //         // how far to scroll down before link "slides" into view
    //         offset: { top: 100 }
    //     });
    // }
    //
    //
    // function setHeight() {
    //     var h = $(window).height() - 90;
    //     if (h > $("#fullheight .container").height()) {
    //         $("#fullheight").css("height", h);
    //         var mt = (h - 520) / 2;
    //         if (mt > 0) {
    //             $("#fullheight .container").css("padding-top", mt);
    //         }
    //     }
    // }
    //
    // $(function () {
    //     $(window).resize(function () {
    //         setHeight();
    //     })
    // })
    //
    // $(document).ready(function () {
    //     setHeight();
    //     $(document).on("scroll", onScroll);
    //     //smoothscroll
    //     $('#nav a[href^="#"]').on('click', function (e) {
    //         e.preventDefault();
    //         $(document).off("scroll");
    //
    //         $('a').each(function () {
    //             $(this).removeClass('activelink');
    //         })
    //         $(this).addClass('activelink');
    //
    //         var target = this.hash,
    //             menu = target;
    //         $target = $(target);
    //
    //         $('html, body').stop().animate({
    //             'scrollTop': $target.offset().top - 93
    //         }, 300, 'swing', function () {
    //             window.location.hash = target;
    //             $(document).on("scroll", onScroll);
    //         });
    //     });
    // });
    //
    // function onScroll(event) {
    //     var scrollPos = $(document).scrollTop();
    //     $('#navbar-collapse-1 a').each(function () {
    //         var currLink = $(this);
    //         var refElement = $(currLink.attr("href"));
    //         if (refElement.position().top - 93 <= scrollPos && refElement.position().top - 93 + refElement.height() > scrollPos) {
    //             $('#navbar-collapse-1 ul li a').removeClass("activelink");
    //             currLink.addClass("activelink");
    //         }
    //         else {
    //             currLink.removeClass("activelink");
    //         }
    //     });
    // }
    /*--------SCRIPTS FROM FOOTER.PHP END------------------------------------------*/

    







});
