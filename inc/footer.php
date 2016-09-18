<footer id="contacts">
    <img src="img/logo-header.png" alt="" class="footer-logo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <ul class="footer-messager">
                    <li class="footer-messager__viber"><a href="viber://add?number=+380678502107">followyourdream</a></li>
                    <li class="footer-messager__skype"><a href="skype:anna_skibun?chat">followyourdream</a></li>
                    <li class="footer-messager__email"><a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-center">
                <a class="button white">
                                    <button class="tour_btn_takepart_blue tour_btn_witout_marginbottom" onclick="openTakePartModalsocial()">Присоединиться к сообществу</button>
                </a>
                <div class="footer-sotial">
                    <h4>Мы в соц.сетях</h4>
                    <ul>
                        <li class="footer-sotial__facebook"><a href="https://www.facebook.com/FollowYourDREAM2015" target="_blank"><img src="img/sotial-facebook.png" alt=""></a></li>
                        <li class="footer-sotial__instagram"><a href="https://www.instagram.com/follow_your_dream_kiev" target="_blank"><img src="img/sotial-instargam.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="footer-phones">
                    <ul>
                        <li><a href="tel:+380678502107">+38 067 850 21 07</a></li>
                        <li><a href="tel:+380443605328">+38 044 360 53 28</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



<div id="takePartModalsocial" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="takePartFormsocial">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title takepart_header" style="color: #3F51B5;">Присоединиться к сообществу</h4>
                    <p class="takepart_descrip">Оставьте свои контактные данные<br />и мы свяжемся с Вами в течение дня</p>
                    <div id="errorMsg" class="alert alert-danger hidden ptsans">Произошла ошибка, попробуйте еще раз</div>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="analytic"/>
                    <input type="hidden" id="Tour_Id" valus="ПРИСОЕДЕНИЛИСЬ К СООБЩЕСТВУ!" />
                    <div class="form-group text-align-left">
                        <label for="name" class="takepart_input">Ваше имя и фамилия</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group text-align-left">
                        <label for="phone" class="takepart_input">Ваш телефон</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="form-group text-align-left">
                        <label for="mail" class="takepart_input">Ваша почта</label>
                        <input type="email" class="form-control" id="mail" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <input type="submit" class="btn_submitform tour_btn_takepart_blue tour_btn_witout_marginbottom" value="Отправить заявку" style="margin-top: 0px;font-size: 24px;margin-bottom: 0px;" />
                        <button type="button" class="btn_submitform hidden" data-dismiss="modal" aria-label="Close">Закрыть</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<script type="text/javascript">

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
            offset: { top: 100 }
        });
    }

    if (($(window).height() + 100) < $(document).height()) {
        $('#top-link-mark').removeClass('hidden').affix({
            // how far to scroll down before link "slides" into view
            offset: { top: 100 }
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

</script>    



</footer>