<?php include_once "inc/db.php";?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FollowYourDream Admin</title>
  <?php include_once "inc/links-admin-lte.php";?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once "inc/header.php";?>
  <?php include_once "inc/sidebar.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Страница dreambus
      </h1>
    </section>
    <section class="content">
      <!-- form start -->
      <form class="index-header-form" role="form">
        <div class="row">
          <div class="col-md-3">
            <?php include_once "tmp-header.php";?>
          </div>
          <div class="col-md-3">
            <?php include_once "tmp-meta.php";?>
          </div>
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Main text</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                  <textarea class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: block;" placeholder="Place some text here">
                      <h3 class="red center first">
                        Арктика – это самое необычное путешествие в вашей жизни и невероятные северные красоты!
                      </h3>
                      <p>
                        <span>Почему Арктика?</span>
                        Гигантские айсберги, паковые льды, ледяные пещеры и водопады, лавовые поля, гейзеры, киты, моржи, белые
                        медведи, олени и северное сияние, белые ночи - ваши самые яркие впечатления.
                      </p>
                      <p>
                        <span>Шпицберген, Гренландия, Исландия – тройка must-have арктических  направлений.  </span>
                        Арктические туры безумно дорогие (чек путешествия в турфирмах стартует от 3000 евро), но мы смогли
                        сделать наши экспедиции доступными (от 1450 евро), так как мы создаем их сами, прорабатываем все нюансы
                        путешествия, готовим маршруты сотрудничая с местными лицензионными гидами.
                      </p>
                      <p>
                        <span>Наши экспедиции – это</span>
                        возможность за небольшой промежуток времени увидеть максимум самых впечатляющих мест, поучаствовать в
                        максимальном количестве активных приключений, попробовать самые необычные блюда местной арктической
                        кухни и все это в максимально возможных, как для Арктики, комфортных условиях (проживание в местном
                        отеле).
                      </p>
                      <p>
                        У нас для вас хорошая новость)) - мы не ночуем в палатках и не носим рюкзаки; для участия в наших
                        арктических экспедициях не нужна специальная физическая подготовка; у нас нет возрастных и других
                        ограничений. С нами путешествуют участники из разных стран мира.
                      </p>
                      <p>
                        Длительность наших экспедиций 8 - 10 дней. Участников в экспедиционной команде от 10 до 20 человек.
                        Для участия в экспедициях вам не понадобится специальное снаряжение, все что нужно мы вам предоставим на
                        месте во время приключений.
                      </p>
                      <p>Мы часто откладываем ЖИЗНЬ на ПОТОМ, а когда настанет это "потом" не знаем сами. Долго думаем и в конце
                        концов не решаемся... ХВАТИТ ДУМАТЬ - жизнь прекрасна и удивительна! </p>
                      <p>ПРИСОЕДИНЯЙТЕСЬ к необыкновенным арктическим ПРИКЛЮЧЕНИЯМ, где вы обязательно найдете ДРУЗЕЙ и
                        единомышленников, встяхнетесь и вернете ощущение радости и наполненности в свою жизнь! </p>
                      <p class="center">Присоединяйтесь! Жизнь невероятна и Арктика, тому яркое подтверждение!</p>
                      <p class="yellow center">Follow Your Dream и # Живи так, как ты хочешь!</p>

                      <div class="arctic-body-shpitsberg">
                        <h3 class="heading">ШПИЦБЕРГЕН</h3>
                        <h4 class="under-h3">Дальше только Северный Полюс!</h4>
                        <img class="arctic-body-img" src="img/arctic/8.jpg" alt="">
                        <p>Шпицберген - уникальный полярный архипелаг, за ним только бесконечные льды и Северный Полюс! </p>
                        <p>Тут на самом Краю Света вы откроете для себя не только необыкновенный мир уникальной северной
                          природы, но и обретете внутреннюю свободу и множество новых друзей, ведь на Шпицберген слетаются
                          путешественники со всей планеты (мы гарантируем интернациональные посиделки с вином и вкусным ужином
                          в большой гостинной отеля).</p>
                        <p>Шпицберген - это БЕЛЫЕ МЕДВЕДИ (которых там в 3!! раза больше чем людей), МОРЖИ, КИТЫ, уникальная
                          арктическая природа, паковые льды, олени и звенящая тишина крайнего севера! </p>
                        <p>
                          <span>Все экспедиции на Северный Полюс начинаются именно отсюда, так как до Точки Мира всего 1 час лета!</span>
                          Шпицберген – одно из лучших мест на планете для наблюдения за Северным Сиянием и место базировки
                          «Хранилища судного дня» (все семена планеты хранятся именно тут).
                        </p>
                        <img src="img/arctic/13.jpg" alt="" class="arctic-body-img">
                        <ul class="arctic-body-shpitsberg-ul">
                          <h3>На Шпицбергене вас ждут захватывающие приключения:</h3>
                          <li>морское сафари к лежбищам моржей</li>
                          <li>сафари на снегоходах и квадроциклах</li>
                          <li>путешествие по арктической долине в собачьих упряжках</li>
                          <li>ледяные пещеры и Северное Сияние</li>
                          <li>гигантские айсберги и паковые льды</li>
                          <li>арктический трекинг и каякинг</li>
                          <li>возможность увидеть китов, белых медведей, северных оленей, моржей, морских котиков в
                            естественной среде обитания.
                          </li>
                        </ul>
                      </div>
                      <div class="arctic-body-grenland">
                        <h3 class="heading">ГРЕНЛАНДИЯ</h3>
                        <h4 class="under-h3">Грандиозные айсберги и киты!</h4>
                        <img src="img/arctic/4.jpg" alt="" class="arctic-body-img">
                        <p>
                          <span>ГРЕНЛАНДИЯ - must have 2017 в вашем списке невероятных приключений года, а может быть и всей жизни!</span>
                          <span>Гигантские айсберги (невероятных форм и размеров), киты, которых можно будет увидеть совсем близко, уникальная северная флора и фауна. ТАКОГО - вы не увидите нигде!</span>
                          <span>Гренландия - это просто невероятно!</span>
                        </p>
                        <p>
                          <span>Мы часто отклыдываем ЖИЗНЬ на ПОТОМ, а когда настанет это "потом" не знаем сами. Долго думаем и вконце концов не решаемся... ХВАТИТ ДУМАТЬ - жизнь прекрасна и удивительна! </span>
                          <span>ПРИСОЕДИНЯЙТЕСЬ к необыкновенному и веселому ПРИКЛЮЧЕНИЮ, где вы обязательно найдете ДРУЗЕЙ и единомышленников, встяхнетесь и вернете ощущение радости и наполненности в свою жизнь! </span>
                          <img src="img/arctic/5.jpg" alt="" class="arctic-body-img">
                        </p><p>Гренландия – настоящая мекка любителей Севера и путешественников со всего мира. Не упустите
                          возможность увидеть эти потрясающие красоты своими глазами.</p>
                        <p></p>
                      </div>
                      <div class="arctic-body-iceland">
                        <h3 class="heading">ИСЛАНДИЯ</h3>
                        <h4 class="under-h3">Потрясающие вулканы, гейзеры, водопады и льды!</h4>
                        <p>Исландия – это потрясающий контраст впечатлений: невероятные гейзеры, ледяные лагуны, вулканы, сотни
                          водопадов и потрясающие закаты.</p>
                        <p>
                          <span>Контрастная и суровая природа этой страны каким-то чудом осталась почти или полностью нетронутой. Кажется, что время здесь остановилось, а по земле никогда не ступала нога человека.</span>
                          Вот почему Исландия — это настоящая мечта фотографов и путешественников, которых влечет шанс
                          запечатлеть первозданную, мистическую силу и красоту северной природы. Да и таких захватывающих
                          пейжазей, пожалуй, не встретишь больше на Земле.
                        </p>
                        <img src="img/arctic/9.jpg" alt="" class="arctic-body-img">
                        <p>Наши экспедиции в Исландию – это «выжимка» самых красивых туристических мест, а так же самые
                          неожиданные и нетуристические достопримечательности, о которых не прочтешь в модных
                          путеводителях. </p>
                        <p>Ну и конечно – самая положительная компания увлеченных путешественников, которые разделят вашу
                          страсть к приключениям.</p>

                        <p class="center">Присоединяйтесь!</p>

                        <img src="img/arctic/10.jpg" alt="" class="arctic-body-img">
                        <p class="center final yellow">Даже если вы никогда не мечтали попасть в Арктику – рискните и это будет
                          одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</p>
                      </div>
                      <div class="arctic-how">
                        <div class="row">
                          <div class="col-lg-6">
                            <h3>Как присоединиться</h3>
                            <div class="arctic-how__img-wrap">
                              <img src="img/arctic/arctic-join.png" alt="" class="">
                            </div>
                            <p>Выбирайте направление в Календаре путешествий или в Ближайших экспедициях. Отправляйте заявку
                              на участие и мы вам перезвоним для уточнения всех деталей или кликате на скайп или вайбер
                              колл внизу страницы и совершите бесплатный звонок из любой точки мира.</p>
                            <p>Мы рады каждому из вас! Честно))</p>
                          </div>
                          <div class="col-lg-6">
                            <h3>Как формируется команда</h3>
                            <div class="arctic-how__img-wrap">
                              <img src="img/arctic/arctic-team.png" alt="" class="">
                            </div>
                            <p>Наши участники – это увлеченные путешествиями люди, которые любят жизнь во всех ее
                              проявлениях. С нами путешествуют участники от 7 до 69 лет, ведь нет предела желанию видеть
                              самые бесподобные места планеты в компании интересных и искренних людей.</p>
                            <p>Жизнь – необыкновенное приключение! Присоединяйтесь!</p>
                          </div>
                        </div>
                      </div>
                  </textarea>
                <input type="hidden" name="_wysihtml5_mode" value="1">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <?php include_once "tmp-howJoin.php";?>
          </div>
          <div class="col-md-12">
            <?php include_once "tmp-upcoming.php";?>
          </div>
          <div class="col-md-12">
            <?php include_once "tmp-carousel.php";?>
          </div>
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- / form -->

    </section>

  </div>
  <!-- /.content-wrapper -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include_once "inc/scripts-admin-lte.php";?>
</body>
</html>
