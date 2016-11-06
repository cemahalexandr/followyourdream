<?php include_once "db.php";?>
<?php
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM indexHeader WHERE id=1");
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


    <title><?php echo $db_arr['headerTitle'];?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php echo $db_arr['headerTitle'];?>">

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