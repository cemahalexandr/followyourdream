<?php include_once "db.php";?>
<?php
$generalId = 'adventure';

$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM tmpHeader WHERE tmpGeneralId='$generalId'");
$db_arr = mysql_fetch_array($db_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    libs-->
    <link href="libs/animate/animate.min.css" rel="stylesheet">
    <link href="libs/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="libs/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.less" rel="stylesheet/less">
    <link href="css/timeline.css" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/tourblock.css" rel="stylesheet" />

    <link href="css/dev.css" rel="stylesheet" />

    <link rel="shortcut icon" href="img/favicon.ico">


    <title><?php echo $db_arr['tmpMetaTitle'];?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php echo $db_arr['tmpMetaDescription'];?>">

    <meta name="keywords" content="Шпицберген, экспедиция, арктика, впечатления, тур, путешествие в арктику, поездка в арктику, туры на шпицберген, туры в гринландию, экспедиция в арктику, экспедиция на северный полюс, туры на северный полюс, туры в исландию, из Украины">

    <meta property="og:image" content="http://my.cml.pp.ua/img/soc.png">

    <meta property="og:image:width" content="400">
    <!-- <meta property="og:image:height" content="300" /> -->

    <meta property="og:title" content="Follow Your Dream">

    <meta property="og:description" content="Для нас нет границ и возраста. Мы не заставим Вас слушать монотонные экскурсии или скучать на пляже. Все наши путешествия насыщены впечатлениями, яркими эмоциями, незабываемыми приключениями и при этом абсолютно доступны. Жизнь слишком коротка, что бы тратить ее на глупости!">

    <meta property="og:site_name" content="#Живи так, как ты хочешь">

    <meta property="og:type" content="website">

    <meta property="og:url" content="/">


    <!-- Yandex.Metrika counter --> <!-- /Yandex.Metrika counter -->

    <!-- GoogleAnalytics --> <!-- END GoogleAnalytics -->

    <!-- VK retargeting --> <!-- END VK retargeting -->

    <!-- Facebook Pixel Code --> <!-- End Facebook Pixel Code -->

    <!-- takecallback --> <!-- End takecallback -->

    <!-- jivosite --> <!-- End tjivosite  -->



    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="arctic" class="arctic template-page">
    <?php include_once "inc/nav.php";?>

    <?php
    $db_table = "followyourdream";
    $db_select = mysql_select_db($db_table);
    $db_query = mysql_query("SELECT * FROM indexHeader WHERE id=1");
    $db_arr = mysql_fetch_array($db_query);
    ?>
    <header>
        <div class="container-fluid">
            <div class="row ">
                <img src="img/adventure/1.png" class="img-responsive">
                <div class="template-header-text">
                    <h3>ПРИКЛЮЧЕНИЯ</h3>
                    <h4>Отправься  в самые необыкновенные<br /> места нашей планеты!</h4>
                </div>
                <div class="header-button">
                    <a class="button"> <button class="index_modal_adventure button tour_btn_takepart_orange tour_btn_witout_marginbottom">ПРИСОЕДИНЯЙСЯ</button> </a>
                </div>
            </div>
        </div>
    </header>
    <section class="arctic-body template-body">
        <div class="container">
            <div class="arctic-body-shpitsberg">
            <h3 class="red center first">Путешествия, которые заставят тебя заново</br> влюбиться в жизнь!</h3>

            <p>Если вы мечтаете о восхождении на вулканы, о рассвете в джунглях,  о путешествиях в самые необыкновенные места планеты – то нам однозначно по пути!   Походить по небу в Боливии, обнять баобаб на Мадагаскаре, проехать по заснеженной долине на верблюде в Монголии,  познать Бога в Тибете или в одном из ашрамов Индии,  промчаться на джипах по оранжевым барханам Сахары в Морокко. И это только тысячная доля того, что нам предстоит с вами увидеть.</p>
            <img class="arctic-body-img" src="img/adventure/2.png" alt="">
            
            <p>Наши  экспедиции мы разрабатываем сами, заранее продумываем все нюансы маршрута и логистику таким образом, что бы вы не просто отметили точку на карте, а  максимально погрузились в страну по которой путешествуете.  Ведь проще показать основные туристические достопримечательности и «незаморачиваться» поиском необычных и уникальных мест. Но наши экспедиции не похожи на обычные путешествия. Драйв, местный колорит и необыкновенно веселая компания!</p>
            <p>Путешествия и экспедиции в самые отдаленные и интересные места нашей планеты – наполнят вашу жизнь приключениями и смыслом.</p>

            <img class="arctic-body-img" src="img/adventure/3.png" alt="">

            <p>Мы не прибегаем к помощи посредников и сами формируем цену экспедиций, именно поэтому стоимость наших путешествий абсолютно доступна, а ваши впечатления уникальны. </p>
            <p>С нами путешествуют участники разных возрастов. Это увлеченные путешествиями люди, которые любят жизнь во всех ее проявления, ведь нет предела желанию видеть самые бесподобные места планеты.</p>

            <img class="arctic-body-img" src="img/adventure/4.png" alt="">

            <p>Наши экспедиции – это возможность за небольшой промежуток времени увидеть максимум самых впечатляющих мест, поучаствовать в максимальном количестве активных приключений и попробовать самые необычные блюда местной кухни.</p>
            <p>Для участия в наших  экспедициях не нужна специальная физическая подготовка; у нас нет возрастных и других ограничений. С нами путешествуют участники из разных стран мира.</p>
            <p>Длительность наших экспедиций 8 - 14 дней. Участников в экспедиционной команде от 10 до 20 человек. Для участия в экспедициях вам не понадобится специальное снаряжение, все что нужно мы вам предоставим на месте во время приключений.</p>

            <img class="arctic-body-img" src="img/adventure/5.png" alt="">

            <p>Мы часто откладываем ЖИЗНЬ на ПОТОМ, а когда настанет это "потом" не знаем сами. Долго думаем и в конце концов не решаемся... ХВАТИТ ДУМАТЬ - жизнь прекрасна и удивительна!</p>
            <p>ПРИСОЕДИНЯЙТЕСЬ к необыкновенным экспедициям и ПРИКЛЮЧЕНИЯМ, где вы обязательно найдете ДРУЗЕЙ и единомышленников, встяхнетесь и вернете ощущение радости и наполненности в свою жизнь!</p>

            </div>

            <p class="center final yellow">Присоединяйтесь!   Жизнь слишком коротка, что бы тратить ее впустую!</p>

            <p class="center final yellow">Follow Your Dream и # Живи так, как ты хочешь!</p>


            <div class="arctic-how">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Как присоединиться</h3>
                        <div class="arctic-how__img-wrap">
                            <img src="img/arctic/arctic-join.png" alt="" class="">
                        </div>
                        <p>Выбирайте направление в Календаре путешествий или в Ближайших экспедициях.   Отправляйте заявку на участие и мы вам перезвоним для уточнения всех деталей или  кликате на скайп или вайбер колл внизу страницы и совершите бесплатный звонок из любой точки мира.</p>
                        <p>Мы рады каждому из вас! Честно))</p>
                    </div>
                    <div class="col-lg-6">
                        <h3>Как формируется команда</h3>
                        <div class="arctic-how__img-wrap">
                            <img src="img/arctic/arctic-team.png" alt="" class="">
                        </div>
                        <p>Наши участники – это увлеченные путешествиями люди, которые любят жизнь во всех ее проявлениях.  С нами путешествуют участники от 7 до 69 лет, ведь нет предела желанию видеть самые бесподобные места планеты в компании интересных и искренних людей.</p>
                        <p>Жизнь – необыкновенное приключение! Присоединяйтесь!</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="upcoming-event">
            <h3 class="heading">БЛИЖАЙШИЕ ПРИКЛЮЧЕНИЯ EXPEDITIONS</h3>
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 upcoming-event__item ">
                        <div class="upcoming-event__item-img-wrapper">
                          <!-- <img src="img/upcoming-event__img-1.jpg" alt=""> -->
                          <img src="img/foto-dly-kalendary-2/foto-dly-blocka-blishayshie-priklucheniya/Январь.jpg" alt="">
                        </div>
                        <div class="upcoming-event__item-hover-substrate"></div>
                        <div class="upcoming-event__item-hover">
                          <ul>
                            <li class="upcoming-event__item-hover__place">Тайланд + затеряные миры Камбоджи</li>
                            <li class="upcoming-event__item-hover__date">2-14 января 2017</li>
                            <li class="upcoming-event__item-hover__money">1799 евро</li>
                          </ul>
                          <div class="upcoming-event__item-hover_btn">
                            <a href="#" class="button yellow">
                              <button>Подробнее</button>
                            </a>
                          </div>
                        </div>
                      </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 upcoming-event__item">
                        <div class="upcoming-event__item-img-wrapper">
                          <img src="img/foto-dly-kalendary-2/foto-dly-blocka-blishayshie-priklucheniya/март.jpg" alt="">
                        </div>
                        <div class="upcoming-event__item-hover-substrate"></div>
                        <div class="upcoming-event__item-hover">
                          <ul>
                            <li class="upcoming-event__item-hover__place">Марокко – океан, пустыня Гоби и Атласские горы</li>
                            <li class="upcoming-event__item-hover__date">20-31 марта 2017</li>
                            <li class="upcoming-event__item-hover__money">1450 евро</li>
                          </ul>
                          <div class="upcoming-event__item-hover_btn">
                            <a href="#" class="button yellow">
                              <button>Подробнее</button>
                            </a>
                          </div>
                        </div>
                      </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 upcoming-event__item">
                            <div class="upcoming-event__item-img-wrapper">
                              <img src="img/foto-dly-kalendary-2/foto-dly-blocka-blishayshie-priklucheniya/май.jpg" alt="">
                            </div>
                            <div class="upcoming-event__item-hover-substrate"></div>
                            <div class="upcoming-event__item-hover">
                              <ul>
                                <li class="upcoming-event__item-hover__place">Исландия джиппинг – все самое грандиозное в одном путешествии</li>
                                <li class="upcoming-event__item-hover__date">14 - 21 мая 2017</li>
                                <li class="upcoming-event__item-hover__money">1650 евро</li>
                              </ul>
                              <div class="upcoming-event__item-hover_btn">
                                <a href="#" class="button yellow">
                                  <button>Подробнее</button>
                                </a>
                              </div>
                            </div>
                          </div>

                </div>

            </div>
        </section>
        <section class="our-travels">
            <div class="our-travels__wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="our-travels__wrapper-calendar">
                                <a href="calendar.php">
                                    <img src="img/our-travel__img-calendar-icon.png" alt="">
                                    <p>календарь путешествий</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="template-archive-slider">
            <h3 class="heading">ФОТО НАШИХ ПУТЕШЕСТВИЙ</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-8 col-xs-push-2">
                        <div class="temp-slider-wrap">
                            <div><img src="img/yachting/slider/1.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/2.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/3.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/4.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/7.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/8.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/9.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/11.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/12.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/13.jpg" alt=""></div>
                            <div><img src="img/yachting/slider/14.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    <?php include_once "inc/footer.php";?>
        <?php
        $goal = "ЗАЯВКА СО СТРАНИЦЫ ПРИКЛЮЧЕНИЯ!";
        include_once "inc/modal-index.php";
        ?>
</div>
<?php include_once "inc/scripts.php";?>


</body>
</html>
