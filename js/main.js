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



    /*--------SCRIPTS FROM CALENDAR.PHP START------------------------------------------*/
    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });

    
    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "zayavka.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "zayavka.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#getProgramForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "programma.php",
            type: "POST",
            data: {
                name: $("#getProgramForm #name").val(),
                phone: $("#getProgramForm #phone").val(),
                mail: $("#getProgramForm #mail").val(),
                tourname: $("#getProgramForm #tourname").val()
            },
            success: function (data) {
                $("#thankModal").modal("show");
                $("#getProgramForm #name").val("");
                $("#getProgramForm #phone").val("");
                $("#getProgramForm #mail").val("");

            }
        });
    });


    $("#takePartModal").on("hidden.bs.modal", function () {
        $("#takePartForm .takepart_header").text("Заявка на участие");
        $("#takePartForm .takepart_descrip").html("Оставьте свои контактные данные<br />и мы свяжемся с Вами в течение дня<br />для обсуждения деталей путешествия");
        $("#takePartForm .modal-body").removeClass("hidden");
        $("#takePartForm .modal-footer input").removeClass("hidden");
        $("#takePartForm .modal-footer button").addClass("hidden");
        $("#takePartForm #name").val("");
        $("#takePartForm #phone").val("");
        $("#takePartForm #mail").val("");
    })

    $("#takePartForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "zayavka.php",
            type: "POST",
            data: {
                name: $("#takePartForm #name").val(),
                phone: $("#takePartForm #phone").val(),
                mail: $("#takePartForm #mail").val(),
                tourname: $("#Tour_Id").val()
            },
            success: function (data) {
                $("#errorMsg").addClass("hidden");
                //$("#takePartModal").modal("hide");
                $("#takePartForm .takepart_header").text("Благодарим за заявку!");
                $("#takePartForm .takepart_descrip").text("Мы перезвоним Вам в течение рабочего дня.");
                $("#takePartForm .modal-body").addClass("hidden");
                $("#takePartForm .modal-footer input").addClass("hidden");
                $("#takePartForm .modal-footer button").removeClass("hidden");
            }
        });
    });


    var videos = document.getElementsByTagName('video');
    for (var i = 0; i < videos.length; i++) {
        var v = videos[i];
        v.volume = 0.5;
        v.addEventListener('click', function () {
            if (v.paused == false) {
                v.pause();
                v.firstChild.nodeValue = 'Play';
            }
            else {
                v.play();
                v.firstChild.nodeValue = 'Pause';
            }
        });
    }

    function closeWindow(videoPlayer) {
        var v = $("#" + videoPlayer + " video")[0];
        v.pause();
        v.firstChild.nodeValue = 'Play';
        $("#" + videoPlayer).fadeOut('slow');
        $("body").css("overflow-y", "scroll");
    }

    function openFullVideo(videoPlayer) {
        $("#" + videoPlayer).fadeIn('slow');
        var v = $("#" + videoPlayer + " video")[0];
        v.play();
        v.firstChild.nodeValue = 'Pause';
        $("body").css("overflow", "hidden");
    }

    function openTakePartModal() {
        $("#takePartModal").modal("show");
    }

    function openTakePartModal(text) {
        $("#takePartModal").modal("show");
        ga('send', 'event', 'Страница тура', 'Нажата кнопка на странице', text);
        $("#takePartModal #analytic").val(text);
    }

    function openTakePartModalsocial() {
        $("#takePartModalsocial").modal("show");
    }

    function openTakePartModalsocial(text) {
        $("#takePartModalsocial").modal("show");
        ga('send', 'event', 'Страница тура', 'Нажата кнопка на странице', text);
        $("#takePartModalsocial #analytic").val(text);
    }

    function openGetRecommendModal() {
        $("#getRecommendModal").modal("show");
    }

    function openQuestionModal() {
        $("#questionModal").modal("show");
    }

    $('#nav').affix({
        offset: {
            top: $('header').height()
        }
    });

    if (($(window).height() + 100) < $(document).height()) {
        $('#top-link-block').removeClass('hidden').affix({
            // how far to scroll down before link "slides" into view
            offset: {top: 100}
        });
    }

    if (($(window).height() + 100) < $(document).height()) {
        $('#top-link-mark').removeClass('hidden').affix({
            // how far to scroll down before link "slides" into view
            offset: {top: 100}
        });
    }


    function setHeight() {
        var h = $(window).height() - 90;
        if (h > $("#fullheight .container").height()) {
            $("#fullheight").css("height", h);
            var mt = (h - 520) / 2;
            if (mt > 0) {
                $("#fullheight .container").css("padding-top", mt);
            }
        }
    }

    $(function () {
        $(window).resize(function () {
            setHeight();
        })
    })

    $(document).ready(function () {
        setHeight();
        $(document).on("scroll", onScroll);
        //smoothscroll
        $('#nav a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('activelink');
            })
            $(this).addClass('activelink');

            var target = this.hash,
                menu = target;
            $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 93
            }, 300, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('#navbar-collapse-1 a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top - 93 <= scrollPos && refElement.position().top - 93 + refElement.height() > scrollPos) {
                $('#navbar-collapse-1 ul li a').removeClass("activelink");
                currLink.addClass("activelink");
            }
            else {
                currLink.removeClass("activelink");
            }
        });
    }
    /*--------SCRIPTS FROM CALENDAR.PHP END------------------------------------------*/
    








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
