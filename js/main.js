$(document).ready(function() {

    /*--------*/
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



    /*--------*/
    //video img to background
    $('.our-video__wrapper').each(function(){
        var imgSrc = $(this).attr('data-image');
        $(this).children("a").css("background-image", "url(../" + imgSrc + ")");//local
        // $(this).children("a").css("background-image", "url(../followyourdream/" + imgSrc + ")"); // server
    });



    /*--------*/
    // БЛОК БЛИЖАЙШИЕ СОБЫТИЕ регулировка картинок по высоте
    $('.upcoming-event__item').each(function(){
        var upcomingWrapper = $(this).find(".upcoming-event__item-img-wrapper");
        var upcomingImg = $(this).find(".upcoming-event__item-img-wrapper img");
        // alert(upcomingImg.attr('src'));
        if (upcomingWrapper.height() > upcomingImg.height()){
            upcomingImg.addClass("height");
        }
    });



    /*--------*/
    // arctic/template header background
    var arcticHeaderImg = $('.arctic header img').attr('src');
    $('.arctic header').css('background-image', 'url(../'+ arcticHeaderImg +')');



    /*--------*/
    // template header background
    var tempHeaderImg = $('.template-page header img').attr('src');
    $('.template-page header').css('background-image', 'url(../'+ tempHeaderImg +')');



    /*--------*/
    // change li on scroll
    $(function() {
        $('#navbar a[href*=#]:not([href=#])').click(function() {
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
        $('.header-button a.button').click(function () {
            var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });
    });



    /*--------*/
    // img on modal to bg
    //var calendarModalHeaderBg = $('#calendar-modal .modal-header-bg-img').attr('src');
    // local
    //$('.calendar-modal .modal-header').css('background-image', "url(), url(../" + calendarModalHeaderBg + ")");
    //server
    // $('#calendar-modal .modal-header').css('background-image', "url(../followyourdream/img/modal-header-bg.png), url(../" + calendarModalHeaderBg + ")");
    // ../img/modal-header-bg.png



    /*--------*/
    // $('#takePartModal button.close').click(function () {
    //     $('#takePartModal').removeClass('in').css({'display' : 'none'});
    //     return false;
    // });



    $(document).on('show.bs.modal', '.modal', function () {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            $('document.body.body-calendar').addClass('modal-open');
        }, 0);
    });
    // убираем проблему со скролом
    $(document).on('hidden.bs.modal', '.modal', function () {
        $('.modal:visible').length;
        $('body.body-calendar').addClass('modal-open');
    });


    /*--------*/
    // opacity 1 after load page
    $("body").animate({opacity: 1}, 1500);








    /*--------------------------------------------------*/

    // parallax footer server
    // $('footer').parallax({imageSrc: '../followyourdream/img/footer__bg.jpg'});

    // parallax footer local
    // $('footer').parallax({imageSrc: '../img/footer__bg.jpg'});



    // carousels
    // $(".whyNeed__carousel").owlCarousel({
    //     autoPlay: 3000,
    //     items : 4,
    //     itemsDesktop : [1199,3],
    //     itemsDesktopSmall : [979,3],
    //     navigation: true
    // });
    // $(".whyWe__carousel").owlCarousel({
    //     navigation : true,
    //     slideSpeed : 300,
    //     paginationSpeed : 400,
    //     singleItem:true
    // });
    // $(".reviews__carousel").owlCarousel({
    //     //autoPlay: 3000,
    //     items : 3,
    //     itemsDesktop : [1199,3],
    //     itemsDesktopSmall : [979,3],
    //     navigation: true
    // });




    // parallax
    // $('header').parallax({imageSrc: '../img/header-bg.jpg'});
    // $('section.whyWe').parallax({imageSrc: '../img/whyWe-bg.jpg'});
    // $('section.reviews').parallax({imageSrc: '../img/price-bg.jpg'});

    



    /*-------------------обработчики--------------*/

    // Плавная прокрутка
    // $("a").click(function() {
    //     $("html, body").animate({
    //         scrollTop: $($(this).attr("href")).offset().top + "px"
    //     }, {
    //         duration: 500,
    //         easing: "swing"
    //     });
    //     return false;
    // });


    //feelback
    // $( ".feedback-header" ).click(function() {
    //     $( ".feedback-body" ).toggle( "fast", function() {});
    // });
    // $( ".feedback-close" ).click(function() {
    //     $( ".feedback-body" ).hide( "fast");
    //     $( ".feedback-callback" ).hide( "fast");
    // });
    //
    // $( ".feedback-form" ).submit(function( event ) {
    //     $.ajax({
    //         url: 'formdata.php',
    //         type: 'POST',
    //         data: $(this).serialize(),
    //         success: function(res){
    //             var successText = "Спасибо! Данные отправленны! В скором времени мы с Вами свяжемся!";
    //
    //             $( ".feedback-body").hide(500, function(){
    //                 $( ".feedback-callback").html(successText).show(500, function(){
    //                     setTimeout(function() {
    //                         $( ".feedback-callback").hide(500);
    //                     }, 2000);
    //                 });
    //             });
    //
    //
    //         },
    //         error: function(){
    //             alert("Error!");
    //         }
    //     });
    //     event.preventDefault();
    // });

    // modal whyNeed
    // $('#whyNeed__modal').on('show.bs.modal', function (event) {
    //     var button = $(event.relatedTarget);
    //     var whatever = button.data('whatever');
    //     var modal = $(this);
    //     $.ajax({
    //         url: 'data/whyNeed.php',
    //         type: 'POST',
    //         data: {key: whatever},
    //         dataType: 'json',
    //         success: function(res){
    //             console.log(res);
    //             modal.find('.modal-title').html(res['title']);
    //             modal.find('.modal-body').html(res['desc']);
    //         },
    //         error: function(){
    //             alert("Error!");
    //         }
    //     });
    // });


    // modal details
    // $('#whyNeed__modal').on('show.bs.modal', function (event) {
    //     var button = $(event.relatedTarget);
    //     var whatever = button.data('whatever');
    //     var modal = $(this);
    //     $.ajax({
    //         url: 'data/whyNeed.php',
    //         type: 'POST',
    //         data: {key: whatever},
    //         dataType: 'json',
    //         success: function(res){
    //             console.log(res);
    //             modal.find('.modal-title').html(res['title']);
    //             modal.find('.modal-body').html(res['desc']);
    //         },
    //         error: function(){
    //             alert("Error!");
    //         }
    //     });
    // });

    /*! Smooth Scrolling http://css-tricks.com/snippets/jquery/smooth-scrolling/ */
    //$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);if(t=t.length?t:$("[name="+this.hash.slice(1)+"]"),t.length)return $("html,body").animate({scrollTop:t.offset().top-50},1000),!1}})});


});
// убираем проблему с фоном
