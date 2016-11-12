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
    $db_query = mysql_query("SELECT * FROM tmpHeader WHERE tmpGeneralId='$generalId'");
    $db_arr = mysql_fetch_array($db_query);
    ?>
    <header>
        <div class="container-fluid">
            <div class="row ">
                <img src="<?php echo $db_arr['tmpHeaderBgUrl'];?>" class="img-responsive">
                <div class="template-header-text">
                    <h3><?php echo $db_arr['tmpHeaderText'];?></h3>
                    <h4><?php echo $db_arr['tmpSubHeaderText'];?></h4>
                </div>
                <div class="header-button">
                    <a class="button"> <button class="index_modal_adventure button tour_btn_takepart_orange tour_btn_witout_marginbottom"><?php echo $db_arr['tmpBtnText'];?></button> </a>
                </div>
            </div>
        </div>
    </header>
    <section class="arctic-body template-body">
        <div class="container">
            <div class="arctic-body-shpitsberg">
                <?php echo $db_arr['tmpContent'];?>
            </div>

            <p class="center final yellow">Присоединяйтесь!   Жизнь слишком коротка, что бы тратить ее впустую!</p>

            <p class="center final yellow">Follow Your Dream и # Живи так, как ты хочешь!</p>


            <div class="arctic-how">
                <div class="row">
                    <?php
                    $db_table = "followyourdream";
                    $db_select = mysql_select_db($db_table);
                    $db_query = mysql_query("SELECT * FROM tmpHowJoin WHERE tmpGeneralId='$generalId'");
                    $db_arr = mysql_fetch_array($db_query);
                    ?>
                    <div class="col-lg-6">
                        <h3><?php echo $db_arr['tmpJoinLeftHeader'];?></h3>
                        <div class="arctic-how__img-wrap">
                            <img src="<?php echo $db_arr['tmpJoinLeftImgSrc'];?>" alt="" class="">
                        </div>
                        <p><?php echo $db_arr['tmpJoinLeftText'];?></p>
                    </div>
                    <div class="col-lg-6">
                        <h3><?php echo $db_arr['tmpJoinRightHeader'];?></h3>
                        <div class="arctic-how__img-wrap">
                            <img src="img/arctic/arctic-team.png" alt="" class="">
                        </div>
                        <p><?php echo $db_arr['tmpJoinRightText'];?></p>
                    </div>
                </div>
            </div>
        </div>

        <section class="upcoming-event">
            <h3 class="heading">БЛИЖАЙШИЕ ПРИКЛЮЧЕНИЯ EXPEDITIONS</h3>
            <div class="container-fluid">

                <div class="row">
                    <?
                    //данные по базе данных
                    $db_table = "followyourdream";
                    $db_select = mysql_select_db($db_table);
                    $db_query = mysql_query("SELECT * FROM tmpUpcoming WHERE tmpGeneralId='$generalId'");
                    $number_class = 0;
                    ?>
                    <?php while ($db_arr = mysql_fetch_array($db_query)):?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 upcoming-event__item ">
                            <div class="upcoming-event__item-img-wrapper">
                                <img src="<?php echo $db_arr['tmpImgSrc'];?>" alt="">
                            </div>
                            <div class="upcoming-event__item-hover-substrate"></div>
                            <div class="upcoming-event__item-hover">
                                <ul>
                                    <li class="upcoming-event__item-hover__place"><?php echo $db_arr['tmpCheckpoint'];?></li>
                                    <li class="upcoming-event__item-hover__date"><?php echo $db_arr['tmpDate'];?></li>
                                    <li class="upcoming-event__item-hover__money"><?php echo $db_arr['tmpPrice'];?></li>
                                </ul>
                                <div class="upcoming-event__item-hover_btn">
                                    <a href="<?php echo $db_arr['tmpLink'];?>" class="button yellow">
                                        <button>Подробнее</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </section>


        <?
        //данные по базе данных
        $db_table = "followyourdream";
        $db_select = mysql_select_db($db_table);
        $db_query = mysql_query("SELECT * FROM tmpUpcomingCalendar WHERE generalId='$generalId'");
        $db_arr = mysql_fetch_array($db_query);
        ?>
        <section class="our-travels" >
            <div class="our-travels__wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="our-travels__wrapper-calendar" style="background: url('<?php echo $db_arr['tmpCalendarBgImg'];?>');">
                                <a href="<?php echo $db_arr['tmpCalendarLink'];?>">
                                    <img src="img/our-travel__img-calendar-icon.png" alt="">
                                    <p><?php echo $db_arr['tmpCalendarTitle'];?></p>
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
                        <?
                        //данные по базе данных
                        $db_table = "followyourdream";
                        $db_select = mysql_select_db($db_table);
                        $db_query = mysql_query("SELECT * FROM tmpCarousel WHERE generalId='$generalId'");
                        $db_arr = mysql_fetch_array($db_query);
                        ?>
                        <? $arr_item = explode(",", $db_arr['tmpCarouselSrc']); ?>
                        <div class="temp-slider-wrap">
                            <?for ($i = 0; $i < 8; $i++):?>
                                <?php if($arr_item[$i] != ""):?>
                                    <div><img src="<?php echo $arr_item[$i];?>" alt=""></div>
                                <?php endif;?>
                            <?endfor;?>
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
