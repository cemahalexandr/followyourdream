<?php include_once "doctype.php"; ?>
<?php include_once "db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM modalData WHERE id='1'");
$db_arr = mysql_fetch_array($db_query);
$db_row_number = mysql_num_rows($db_query);
//                die;

?>
<?php //while($db_arr = mysql_fetch_assoc($db_query)):?>
<!--  <tr>-->
<!--    <td>--><?php //echo $db_arr['id'];?><!--</td>-->
<!--    <td>--><?php //echo $db_arr['generalMonth'];?><!--</td>-->
<!--    <td>--><?php //echo $db_arr['header'];?><!--</td>-->
<!--    <td>-->
<!--      <a href="modal-edit.php?id=--><?php //echo $db_arr['id'];?><!--"><button type="button" class="btn btn-success"><span class="fa fa-edit"></span></button></a>-->
<!--      <a href="modal-del.php?id=--><?php //echo $db_arr['id'];?><!--"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>-->
<!--    </td>-->
<!--  </tr>-->
<?php //endwhile; ?>

<?php for ($i = 0; $i < 1; $i++): ?>
  <!-- modal-calendar START tay-kambodga -->
  <div class="modal fade calendar-modal calendar-modal-new" id="<?php echo $db_arr['generalId'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-header-close-991">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-dialog template-page" role="document">
      <div class="modal-content">
        <div class="modal-header modal-header__first">
          <img src="img/01.jpg" alt="" class="modal-header-bg-img">
          <div class="modal-header__content template-header-text">
            <h3 class="modal-title modal-header__content-place" id="calendar-modal-title">Тай + Камбоджа <?php echo "test";?></h3>
            <h4 class="modal-header__content-short-info">Дальше только СЕВЕРНЫЙ ПОЛЮС!</h4>
            </br>
            <h4 class="modal-header__content-short-info date">05 - 11 июня 2017<br></h4>
          </div>
        </div>
        <section class="arctic-body template-body">
          <div class="modal-body">
            <section class="row modal-body__icon-info">
              <div class="col-lg-10 col-lg-push-1 col-md-12 col-md-push-0 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0" style="border-bottom: 2px dotted #333;padding-bottom: 40px;">
                <div class="row modal-body__icon-row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="modal-body__icon-info-item">
                      <img src="img/calendar_white.png" alt="">
                      <h4>СРОКИ</h4>
                      <p>04 - 18 января 2016</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="modal-body__icon-info-item">
                      <img src="img/modal-icon-check.png" alt="">
                      <h4>ВАЖНО</h4>
                      <p>Размер группы до 30 человек. </p>
                      <p>Осталось 4 места.</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="modal-body__icon-info-item">
                      <img src="img/modal-icon-money.png" alt="">
                      <h4>СТОИМОСТЬ</h4>
                      <p>2090 евро/чел (включая все трансферы и внутренние перелеты) ВАЖНО: в программенет никаких скрытых платежей - во время путешествия включено ВСЁ, кромесувениров и некоторых обедов/ужинов на ваш вкус.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <h3 class="center first">В самый неизведанный туристами регион</h3>
            <div class="col-sm-12 col-xs-12 calendar-modal__short-info">
              <ul class="arctic-body-shpitsberg-ul">
                <li>Мы летим за Полярный Круг!</li>
                <li>ШПИЦБЕРГЕН – это завораживающий океан, ЛЕДНИКИ и АЙСБЕРГИ, БЕЛЫЕ МЕДВЕДИ, арктические МОРЖИ, трофи на снегоходах и в собачьих упряжках, СЕВЕРНОЕ СИЯНИЕ, КИТЫ, невероятные арктические пейзажи и даже цветы! </li>
                <li>Ни одна турфирма не предложит вам такого НАСЫЩЕННОГО ВПЕЧАТЛЕНИЯМИ экспедиционного тура по такой НИЗКОЙ ЦЕНЕ </li>
                <li>9 уникальных АРКТИЧЕСКИХ ПРИКЛЮЧЕНИЙ, комфортное проживание, продуманная логистика (маршрут) – ВСЕГО за 1780 евро!!! (туры тур операторов стартуют от 3000 евро). И все потому что, мы создаем свои экспедиции сами! Круче и дешевле – просто не существует!</li>
                <li>Мы поможем с визой при необходимости (Норвегия, Шенген)</li>
                <li>С нами ОЧЕНЬ весело и легко, так как собирается только положительная и искренняя компания –присоединяйся!</li>
              </ul>
              <p class="title22gray">
                ШПИЦБЕРГЕН с нами – это ЛУЧШЕЕ ПУТЕШЕСТВИЕ в твоей ЖИЗНИ – звони и регистрируйся!
                <br>
                <br>
                <a href="tel: 0678502107">+38 (067) 850 21 07</a>
              </p>
            </div>
            <div class="modal-body-top-button">
              <a class="button calendar_modal_sub">
                <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom" style="margin: 10px;">ПРИНЯТЬ УЧАСТИЕ В ЭКСПЕДИЦИИ</button>
              </a>
            </div>
            <section class="modal-body__travel-program">
              <h2 class="travel-program-first">Карта маршрута</h2>
              <p>Шпицберген - внушительных размеров полярный островной архипелаг, лежащий на просторах западной части Северного Ледовитого океана. Все экспедиции на Северный Полюс начинаются именно отсюда, так как до Точки Мира всего 1 час лета! </p>
              <p>Архипелаг включает три крупных острова: Эдж, Северо-Восточная Земля, Западный Шпицберген и семь менее значительных, которые изрезаны причудливыми фьердами и покрыты снежными шапками ледников.</p>
              <p>Шпицберген - это БЕЛЫЕ МЕДВЕДИ (которых там в 3!! раза больше чем людей), МОРЖИ, уникальная арктическая природа, ПАКОВЫЕ ЛЬДЫ, ОЛЕНИ и звенящая тишина крайнего севера!</p>
              <p>Уникальная геолокация и природные ресурсы создают исключительные условия для проведения всех видов экспедиционных туров Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН – рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</p>
            </section>
            <div class="container w87">
              <div class="col-xs-12 col-sm-8 col-md-8  col-lg-8">
                <img src="img/2.1.jpg" width="100%">
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img class="w87__img-h" src="img/2.2.jpg" width="105%">
              </div>
            </div>
            <section class="modal-body__travel-program">
              <div class="section_header">
                <span>Программа</span>
              </div>
              <h2 class="travel-program__h2-first">Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН - рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</h2>
              <img src="img/2.png">
              <h4>День 1 / 10 августа</h4>
              <p>Сбор в аэропорту Борисполь группы, которая летит из Киева. С остальными участниками мы встречаемся в Осло. Отправляемся в самое непредсказуемое приключение в своей жизни, в страну вечных льдов и белых медведей, за Полярный Круг!</p>
              <p>Перелет на Шпицберген через Осло. Прогулка по Осло между перелетами.</p>
              <img src="img/program/0.png">
              <div class="clearfix"></div>
              <p>Осло - самый древний город северной Европы основанный в 1048 году, находится целиком в окружении лесов, горных вершин и холмов.</p>
              <p>В Осло сосредоточены главные культурные достопримечательности страны и самые необычные музеи. Футуристическое здание Норвежской оперы спускается прямо во фьорд, а любоваться красотами природы можно просто прогуливаясь по крыше оперного театра, как это любят делать местные жители, а значит сможем и мы!</p>
              <p>21.30 Вылет в Лонгйир – столицу архипелага ШПИЦБЕРГЕН.</p>
              <img src="img/program/3.jpg">
              <p>Еще только подлетая к Лонгйиру - самому северном в мире городу, расположенному в высоких широтах норвежской части Арктики, перед нами откроются суровые и прекрасные пейзажи полярного архипелага. Населенный пункт назван в честь американского предпринимателя Джона Манро Лонгйира (1860—1922), который основал город.</p>
              <p>За пределы города выходить без сопровождения и оружия опасно, ведь БЕЛЫХ МЕДВЕДЕЙ на архипелаге в три! раза больше чем людей.</p>
              <img src="img/program/4.jpg">
              <div class="clearfix"></div>
              <p>00:30 Прибытие в Лонгйир и поселение в отель (двухместные номера с удобставами на этаже или поселение в отеле со всеми удобствами)</p>
              <h4>День 2 / 11 августа</h4>
              <p>Завтрак подается в четырех звездочном отеле (ОЧЕНЬ разнообразный и вкусный) и ПРИКЛЮЧЕНИЯ начинаются!</p>
              <p>Нас ожидает КВАДРО-трофи в невероятную Арктику.</p>
              <p>Квадроциклы Am Outlander ATV самый удобный транспорт для летних приключений в дикую природу Шпицбергена. Мы обязательно увидим северных оленей в долине Адвентдален, а так же лис и возможно встретим царя Арктики – БЕЛОГО МЕДВЕДЯ.</p>
              <img src="img/program/den2-1.jpg">
              <p>На вершине горных хребтов находится Кьелл Хенриксен – одна из самых больших обсерваторий в мире для исследования СЕВЕРНОГО СИЯНИЯ. Здесь мы остановимся, чтобы насладиться удивительным видом Адвентдален. На нашем пути вниз мы посетим Trappers станцию Basecamp в Bolterdalen. Там мы выпьем вкуснейшего кофе и отведаем печенья с ягодами, а так же пожарим зефир на костре. И все это за Полярным Кругом!</p>
              <img src="img/program/den2-2.jpg">
              <div class="clearfix"></div>
              <p>Вся специальная экипировка выдается на месте.</p>
              <h4>День 3 / 12 августа</h4>
              <p>Если вы никогда не мечтали увидеть МОРЖЕЙ, КИТОВ, белых МЕДВЕДЕЙ и их детенышей, а так же морских КОТИКОВ - пора начинать! Потому, что - то, что вы увидите в этот день – ни с чем не сравнится! В этот день мы совершим выход в море на специальной закрытой лодке в поисках этих уникальных животных и проведем день среди гигантских айсбергов и паковых льдов.</p>
              <img src="img/program/7.jpg">
              <p>Увидим, как откалываются айсберги от высоченных белых стен и с леденящим треском падают в океан! Только ради ТАКИХ ВПЕЧАТЛЕНИЙ стоит ехать за Полярный Круг! А если нам повезет – мы отснимем САМЫЕ КРУТЫЕ ФОТО в вашей жизни!</p>
              <img src="img/program/den3-1.jpg">
              <p>Если повезет с погодой – мы совершим уникальную высадку на одном из островов архипелага (Принц Карл), что бы понаблюдать за лежбищем арктических МОРЖЕЙ. Они проводят в этом районе большую часть времени и любят «загорать» на пляже. Так же нас ждет арктический ланч и много ОБАЛДЕННЫХ ФОТО!</p>
              <img src="img/program/den3-2.jpg">
              <div class="clearfix"></div>
              <h4>День 4 / 13 августа</h4>
              <p>Просто фантастические впечатления ждут нас в этот день – мы совершим переход в СОБАЧЬИХ УПРЯЖКАХ на колесах!! Такого вы еще точно не пробовали!</p>
              <img src="img/program/den4-4.jpg">
              <p>В каждую упряжку запрягают по 6-8 собак специальной породы. Хаски выносливые и веселые, они точно знают маршрут и способны добраться домой даже если вы потеряетесь. Сначала мы поднимемся круто в горы. Потом пронесемся по</p>
              <img src="img/program/den4-3.jpg">
              <p>арктической пустыне и остановимся для ланча и фото на самой высокой точке ферда - около 2100 футов над уровнем моря. Этот ПОТРЯСАЮЩИЙ ВИД на горную арктическую долину и Северный Ледовитый океан будет одним из самых захватывающих в ВАШЕЙ ЖИЗНИ! </p>
              <h4>День 5 / 14 августа</h4>
              <p>Это день – приключения на выбор. Согласно нашей сегодняшней программы вы можете отправиться на велосипедах в несложное, но очень красивое путешествие к птичьей долине или совершить пешую прогулку с гидом по Лонгийру, посетить арктический музей поваляться с интересной книгой на оленьих шкурах с видом на заснеженные горы.</p>
              <img class="pb10" src="img/program/den5-1.jpg">
              <img src="img/program/den5-2.jpg">
              <p>В этот день вы можете так же отдохнуть или совершить дополнительное приключение (факультативно), которое мы забронируем специально для вас:</p>
              <p>1. Экспедиционный выезд на небольшом ледоколе к заброшенному городу Пирамиден или Баренцбург (по пути можно встретить КИТОВ и морских котиков)</p>
              <p>2. Экскурсия в заброшенную угольную шахту</p>
              <p>3. Пешее путешествие к всемирному хранилищу семян (Ноев ковчег)</p>
              <p>4. Лакшери путешествие с ночевкой на Ист Ферде</p>
              <img src="img/program/den5-6.jpg">
              <h4>День 6 / 15 августа</h4>
              <p>Согласно рейтингам National Geografic - природа – долины и горы Шпицбергена входят в пятерку самых впечатляющих в мире!</p>
              <p>Острова этого архипелага – одно из немногих мест на земле, сохранивших первозданную природу. Это суровый, но красивый пейзаж: острые высокие горы, длинные хребты, изумительно чистые прозрачные и бурные речки, мрачное темное море с величественными белыми айсбергами, заснеженные равнины, ледяные просторы Арктики. </p>
              <img src="img/program/13.jpg">
              <p>Мы совершим незабываемый трекинг по молчаливым сопкам, вдоль рек и долин, увидим уникальную флору и фауну островов. Возможно, даже встретим царя Арктики – БЕЛОГО МЕДВЕДЯ, а так же получим археологическое свидетельство того, что раньше на этих «землях» были субтропические леса! </p>
              <img src="img/program/11.jpg">
              <p>Для нашей безопасности трекинг будет проходить в сопровождении гида со специальной винтовкой и спасательным сигналом, который используются для отпугивания диких животных при их агрессивном поведении. </p>
              <h4>День 7 / 16 августа</h4>
              <p>Нереальный арктический каякинг)). Эмоции зашкаливают! ЮХУУУУУУУ! Жизнь - офигенная штука, как не крути)))). </p>
              <img src="img/program/den7-1.jpg">
              <p>5 часов экстремального приключения с высадкой на другой стороне ферда, наблюдением за дикой природой и настоящий туристический ланч! Вы просто не можете это пропустить! </p>
              <img class="pb10" src="img/program/den7-3.jpg">
              <img src="img/program/den7-4.jpg">
              <h4>День 8 / 18 августа</h4>
              <p>После отдыха и вылетаем в Осло. Шпицберген – самый быстрый способ заболеть Арктикой, поэтому обещаем вернуться, но уже за Северным Сиянием! </p>
              <p>В 5:55 приземляемся в аэропорту Осло. </p>
              <div class="container w100">
                <p class="title33gray">Получить развернутую программу</p>
                <div class="col-md-6 col-md-offset-3">
                  <form id="getProgramForm" _lpchecked="1" class="calendarModalGetForm">
                    <input type="hidden" name="tourname" id="tourname" value="">
                    <input type="hidden" name="form-id" value="calendar-modal-get-program" />
                    <div class="form-group">
                      <input  name="name" type="text" class="form-control input_getprogram" id="name" placeholder="Ваше имя и фамилия" required="">
                    </div>
                    <div class="form-group">
                      <input name="phone"  type="tel" class="form-control input_getprogram" id="phone" placeholder="Ваш телефон" required="">
                    </div>
                    <div class="form-group">
                      <input name="mail" type="email" class="form-control input_getprogram" id="mail" placeholder="Ваша почта" required="">
                    </div>
                  </form>
                  <br>
                  <br>
                  <div class="modal-body-top-button">
                    <a href="" class="button ">
                      <button type="submit" form="getProgramForm" value="Submit">Получить </button>
                    </a>
                  </div>
                </div>
              </div>
              <h2 class="travel-program__h2-second">
                Не откладывай ЖИЗНЬ на потом -
                <a target="_blank" href="https://www.facebook.com/FollowYourDREAM2015/">#Живи_так_как_ты_хочешь</a>
                <br>
                Присоединяйся к САМОМУ КРУТОМУ ПРИКЛЮЧЕНИЮ в твоей ЖИЗНИ!
              </h2>
            </section>
            <div class="cover_block container750">
              <div class="container">
                <br>
                <div class="modal-body-top-button">
                  <a class="button">
                    <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom">ПРИНЯТЬ УЧАСТИЕ В ЭКСПЕДИЦИИ</button>
                  </a>
                </div>
              </div>
            </div>
            <div id="home" class="tour_section">
              <div class="container">
                <div class="section_header">
                  <span>Где будем жить</span>
                </div>
                <p class="title22gray">
                  Отель Хоген пансион
                  <br>
                  (двухместные номера удобства на 2 номера)
                </p>
                <div id="links" class="tour_section__links">
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img src="img/live/live1-1.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img src="img/live/live1-2.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img src="img/live/live1-3.jpg">
                  </div>
                </div>
              </div>
              <div class="container p30_0">
                <p class="title22gray">Дополнительные варианты проживания (бронируются отдельно):
                  <br>
                  Отель Хотел энд Лодж со всеми удобствами
                </p>
                <div id="links" class="tour_section__links">
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img src="img/live/1.1.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img src="img/live/1.2.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img src="img/live/1.3.jpg">
                  </div>
                </div>
              </div>
              <div class="container">
                <p class="title22gray">Уникальный исторический отель комфорт класса (общая ванная комната)</p>
                <div id="links" class="tour_section__links">
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img  src="img/live/2.1.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.2.jpg"
                       data-gallery="stay_gallery">
                    <img src="img/live/2.2.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.3.jpg"
                       data-gallery="stay_gallery">
                    <img src="img/live/2.3.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div id="price" class="tour_section">
              <div class="container">
                <div class="section_header">
                  <span>Стоимость экспедиции</span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 price_discount">1780 евро</div>
                <div class="row m0_10">
                  <div class="col-sm-6 col-xs-12">
                    <h4 class="block_title">
                      <img src="img/trip/check_circle.png">
                      В стоимость включено:
                    </h4>
                    <ul class="tour_included">
                      <li>Трансфер из/в аэропорт в Лонгйире</li>
                      <li>Проживание на Шпицбергене 6 ночей</li>
                      <li>Питание – завтраки + ланчи (перекусы) во время приключений</li>
                      <li>Приключение на квадроциках + ланч-перекус + экипировка</li>
                      <li>Приключение На собачьих упряжках за полярным солнцем + ланч-перекус</li>
                      <li>Морское приключение с высадкой на островах к лежбищу моржей, киты, котики +ланч-перекус</li>
                      <li>Захватывающий трекинг в дикую природу Шпицбергена + ланч-перекус</li>
                      <li>Арктический каякинг</li>
                      <li>Сопровождение русскоязычным и англоязычным гидами</li>
                      <li>Фирменная ветровка или другой подарок</li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <h4 class="block_title">
                      <img src="img/trip/plus_circle.png">
                      Дополнительные расходы:
                    </h4>
                    <ul class="tour_features">
                      <li>Виза (Норвегия/шенген). Поможем с визой.</li>
                      <li>Перелет Киев-Осло-Киев от 200 евро; Перелет Осло-Лонгйир-Осло 250 евро (выкупленный блок) </li>
                      <li>Дополнительные услуги не включенные в программу</li>
                    </ul>
                  </div>
                </div>
                <div class="hidden-xs">
                  <h3 class="heading">Как присоединиться к экспедиции</h3>
                  <div class="modal-body-top-button">
                    <a class="button ">
                      <button class="add_to_expedition tour_btn_takepart_orange tour_btn_witout_marginbottom">Подать заявку</button>
                    </a>
                  </div>
                  <ul class="timeline">
                    <li>
                      <div class="timeline-badge">1</div>
                      <div class="timeline-panel">
                        <div class="timeline-body">
                          <p>Мы принимаем заявку и перезваниваем Вам для обсуждения деталей</p>
                          <div class="timeline-icon">
                            <img src="img/trip/phone_icon.png">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted">
                      <div class="timeline-badge">2</div>
                      <div class="timeline-panel">
                        <div class="timeline-body">
                          <p>Отправляем Вам на почту анкету участника и инструкции по оплате тура</p>
                          <div class="timeline-icon">
                            <img src="img/trip/mail_icon.png">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-badge">3</div>
                      <div class="timeline-panel">
                        <div class="timeline-body">
                          <p>Принимаем оплату (для жесткой бронировки - предоплата в размере 800 евро)в офисе или переводом на карту</p>
                          <div class="timeline-icon">
                            <img src="img/trip/money_icon.png">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted">
                      <div class="timeline-badge">4</div>
                      <div class="timeline-panel">
                        <div class="timeline-body">
                          <p>Помогаем решить вопрос с визой и бронируем перелет в Осло из Киева (принеобходимости)</p>
                          <div class="timeline-icon">
                            <img src="img/trip/doc_icon.png">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-li">
                      <div class="timeline-badge">5</div>
                      <div class="timeline-panel">
                        <div class="timeline-body">
                          <p>Расскажем, что с собой нужно взять и отправляемся в САМОЕ КРУТОЕПРИКЛЮЧЕНИЕ в вашей ЖИЗНИ! В Арктику! За Полярный Круг!</p>
                          <div class="timeline-icon">
                            <img src="img/trip/prepare_icon.png">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="modal-footer__orginizer">
              <ul>
                <li>
                  <div class="modal-footer__orginizer-img-wrapper">
                    <img src="img/review__human-2.png" alt="">
                  </div>
                  <h4>Анна Скибун</h4>
                  <h5>Организатор</h5>
                  <ul class="modal-footer__orginizer-contacts">
                    <li class="contact-fb">
                      <a href="https://www.facebook.com/anna.skibun" target="_blank">anna.skibun</a>
                    </li>
                    <li class="contact-skype">
                      <a href="skype:anna_skibun?chat">skype</a>
                    </li>
                    <li class="footer-messager__viber">
                      <a href="viber://add?number=+380678502107">followyourdream</a>
                    </li>
                    <li class="contact-mail">
                      <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                    </li>
                    <li class="contact-phones">
                      <a href="tel:+380678502107">+38 067 850 21 07</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="modal-footer__orginizer-img-wrapper">
                    <img src="img/Vlad.jpg" alt="">
                  </div>
                  <h4>Владислав Бондарь</h4>
                  <h5>Клиент-менеджер</h5>
                  <ul class="modal-footer__orginizer-contacts">
                    <li class="contact-fb">
                      <a href="https://www.facebook.com/bondar.vlad" target="_blank">bondar.vlad</a>
                    </li>
                    <li class="contact-skype">
                      <a href="skype:anna_skibun?chat">skype</a>
                    </li>
                    <li class="footer-messager__viber">
                      <a href="viber://add?number=+380678502107">followyourdream</a>
                    </li>
                    <li class="contact-mail">
                      <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                    </li>
                    <li class="contact-phones">
                      <a href="tel:+380443605328">+38 044 360 53 28</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- modal-calendar END tay-kambodga -->
<?php endfor;?>






























<!-- modal-calendar START shpicbergen-severnoe -->
<div class="modal fade calendar-modal calendar-modal-new" id="shpicbergen-severnoe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-header-close-991">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  <div class="modal-dialog template-page" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header__first">
        <img src="img/01.jpg" alt="" class="modal-header-bg-img">
        <div class="modal-header__content template-header-text">
          <h3 class="modal-title modal-header__content-place" id="calendar-modal-title">ШПИЦБЕРГЕН Северное
            Сияние</h3>
          <h4 class="modal-header__content-short-info">Дальше только СЕВЕРНЫЙ ПОЛЮС!</h4>
          </br>
          <h4 class="modal-header__content-short-info date">05 - 11 июня 2017<br></h4>
        </div>
      </div>
      <section class="arctic-body template-body">
        <div class="modal-body">
          <section class="row modal-body__icon-info">
            <div class="col-lg-10 col-lg-push-1 col-md-12 col-md-push-0 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0" style="border-bottom: 2px dotted #333;padding-bottom: 40px;">
              <div class="row modal-body__icon-row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/calendar_white.png" alt="">
                    <h4>СРОКИ</h4>
                    <p>04 - 18 января 2016</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/modal-icon-check.png" alt="">
                    <h4>ВАЖНО</h4>
                    <p>Размер группы до 30 человек. </p>
                    <p>Осталось 4 места.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/modal-icon-money.png" alt="">
                    <h4>СТОИМОСТЬ</h4>
                    <p>2090 евро/чел (включая все трансферы и внутренние перелеты) ВАЖНО: в программенет никаких скрытых платежей - во время путешествия включено ВСЁ, кромесувениров и некоторых обедов/ужинов на ваш вкус.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <h3 class="center first">В самый неизведанный туристами регион</h3>
          <div class="col-sm-12 col-xs-12 calendar-modal__short-info">
            <ul class="arctic-body-shpitsberg-ul">
              <li>Мы летим за Полярный Круг!</li>
              <li>ШПИЦБЕРГЕН – это завораживающий океан, ЛЕДНИКИ и АЙСБЕРГИ, БЕЛЫЕ МЕДВЕДИ, арктические МОРЖИ, трофи на снегоходах и в собачьих упряжках, СЕВЕРНОЕ СИЯНИЕ, КИТЫ, невероятные арктические пейзажи и даже цветы! </li>
              <li>Ни одна турфирма не предложит вам такого НАСЫЩЕННОГО ВПЕЧАТЛЕНИЯМИ экспедиционного тура по такой НИЗКОЙ ЦЕНЕ </li>
              <li>9 уникальных АРКТИЧЕСКИХ ПРИКЛЮЧЕНИЙ, комфортное проживание, продуманная логистика (маршрут) – ВСЕГО за 1780 евро!!! (туры тур операторов стартуют от 3000 евро). И все потому что, мы создаем свои экспедиции сами! Круче и дешевле – просто не существует!</li>
              <li>Мы поможем с визой при необходимости (Норвегия, Шенген)</li>
              <li>С нами ОЧЕНЬ весело и легко, так как собирается только положительная и искренняя компания –присоединяйся!</li>
            </ul>
            <p class="title22gray">
              ШПИЦБЕРГЕН с нами – это ЛУЧШЕЕ ПУТЕШЕСТВИЕ в твоей ЖИЗНИ – звони и регистрируйся!
              <br>
              <br>
              <a href="tel: 0678502107">+38 (067) 850 21 07</a>
            </p>
          </div>
          <div class="modal-body-top-button">
            <a class="button calendar_modal_sub">
              <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom" style="margin: 10px;">ПРИНЯТЬ УЧАСТИЕ В ЭКСПЕДИЦИИ</button>
            </a>
          </div>
          <section class="modal-body__travel-program">
            <h2 class="travel-program-first">Карта маршрута</h2>
            <p>Шпицберген - внушительных размеров полярный островной архипелаг, лежащий на просторах западной части Северного Ледовитого океана. Все экспедиции на Северный Полюс начинаются именно отсюда, так как до Точки Мира всего 1 час лета! </p>
            <p>Архипелаг включает три крупных острова: Эдж, Северо-Восточная Земля, Западный Шпицберген и семь менее значительных, которые изрезаны причудливыми фьердами и покрыты снежными шапками ледников.</p>
            <p>Шпицберген - это БЕЛЫЕ МЕДВЕДИ (которых там в 3!! раза больше чем людей), МОРЖИ, уникальная арктическая природа, ПАКОВЫЕ ЛЬДЫ, ОЛЕНИ и звенящая тишина крайнего севера!</p>
            <p>Уникальная геолокация и природные ресурсы создают исключительные условия для проведения всех видов экспедиционных туров Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН – рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</p>
          </section>
          <div class="container w87">
            <div class="col-xs-12 col-sm-8 col-md-8  col-lg-8">
              <img src="img/2.1.jpg" width="100%">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <img class="w87__img-h" src="img/2.2.jpg" width="105%">
            </div>
          </div>
          <section class="modal-body__travel-program">
            <div class="section_header">
              <span>Программа</span>
            </div>
            <h2 class="travel-program__h2-first">Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН - рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</h2>
            <img src="img/2.png">
            <h4>День 1 / 10 августа</h4>
            <p>Сбор в аэропорту Борисполь группы, которая летит из Киева. С остальными участниками мы встречаемся в Осло. Отправляемся в самое непредсказуемое приключение в своей жизни, в страну вечных льдов и белых медведей, за Полярный Круг!</p>
            <p>Перелет на Шпицберген через Осло. Прогулка по Осло между перелетами.</p>
            <img src="img/program/0.png">
            <div class="clearfix"></div>
            <p>Осло - самый древний город северной Европы основанный в 1048 году, находится целиком в окружении лесов, горных вершин и холмов.</p>
            <p>В Осло сосредоточены главные культурные достопримечательности страны и самые необычные музеи. Футуристическое здание Норвежской оперы спускается прямо во фьорд, а любоваться красотами природы можно просто прогуливаясь по крыше оперного театра, как это любят делать местные жители, а значит сможем и мы!</p>
            <p>21.30 Вылет в Лонгйир – столицу архипелага ШПИЦБЕРГЕН.</p>
            <img src="img/program/3.jpg">
            <p>Еще только подлетая к Лонгйиру - самому северном в мире городу, расположенному в высоких широтах норвежской части Арктики, перед нами откроются суровые и прекрасные пейзажи полярного архипелага. Населенный пункт назван в честь американского предпринимателя Джона Манро Лонгйира (1860—1922), который основал город.</p>
            <p>За пределы города выходить без сопровождения и оружия опасно, ведь БЕЛЫХ МЕДВЕДЕЙ на архипелаге в три! раза больше чем людей.</p>
            <img src="img/program/4.jpg">
            <div class="clearfix"></div>
            <p>00:30 Прибытие в Лонгйир и поселение в отель (двухместные номера с удобставами на этаже или поселение в отеле со всеми удобствами)</p>
            <h4>День 2 / 11 августа</h4>
            <p>Завтрак подается в четырех звездочном отеле (ОЧЕНЬ разнообразный и вкусный) и ПРИКЛЮЧЕНИЯ начинаются!</p>
            <p>Нас ожидает КВАДРО-трофи в невероятную Арктику.</p>
            <p>Квадроциклы Am Outlander ATV самый удобный транспорт для летних приключений в дикую природу Шпицбергена. Мы обязательно увидим северных оленей в долине Адвентдален, а так же лис и возможно встретим царя Арктики – БЕЛОГО МЕДВЕДЯ.</p>
            <img src="img/program/den2-1.jpg">
            <p>На вершине горных хребтов находится Кьелл Хенриксен – одна из самых больших обсерваторий в мире для исследования СЕВЕРНОГО СИЯНИЯ. Здесь мы остановимся, чтобы насладиться удивительным видом Адвентдален. На нашем пути вниз мы посетим Trappers станцию Basecamp в Bolterdalen. Там мы выпьем вкуснейшего кофе и отведаем печенья с ягодами, а так же пожарим зефир на костре. И все это за Полярным Кругом!</p>
            <img src="img/program/den2-2.jpg">
            <div class="clearfix"></div>
            <p>Вся специальная экипировка выдается на месте.</p>
            <h4>День 3 / 12 августа</h4>
            <p>Если вы никогда не мечтали увидеть МОРЖЕЙ, КИТОВ, белых МЕДВЕДЕЙ и их детенышей, а так же морских КОТИКОВ - пора начинать! Потому, что - то, что вы увидите в этот день – ни с чем не сравнится! В этот день мы совершим выход в море на специальной закрытой лодке в поисках этих уникальных животных и проведем день среди гигантских айсбергов и паковых льдов.</p>
            <img src="img/program/7.jpg">
            <p>Увидим, как откалываются айсберги от высоченных белых стен и с леденящим треском падают в океан! Только ради ТАКИХ ВПЕЧАТЛЕНИЙ стоит ехать за Полярный Круг! А если нам повезет – мы отснимем САМЫЕ КРУТЫЕ ФОТО в вашей жизни!</p>
            <img src="img/program/den3-1.jpg">
            <p>Если повезет с погодой – мы совершим уникальную высадку на одном из островов архипелага (Принц Карл), что бы понаблюдать за лежбищем арктических МОРЖЕЙ. Они проводят в этом районе большую часть времени и любят «загорать» на пляже. Так же нас ждет арктический ланч и много ОБАЛДЕННЫХ ФОТО!</p>
            <img src="img/program/den3-2.jpg">
            <div class="clearfix"></div>
            <h4>День 4 / 13 августа</h4>
            <p>Просто фантастические впечатления ждут нас в этот день – мы совершим переход в СОБАЧЬИХ УПРЯЖКАХ на колесах!! Такого вы еще точно не пробовали!</p>
            <img src="img/program/den4-4.jpg">
            <p>В каждую упряжку запрягают по 6-8 собак специальной породы. Хаски выносливые и веселые, они точно знают маршрут и способны добраться домой даже если вы потеряетесь. Сначала мы поднимемся круто в горы. Потом пронесемся по</p>
            <img src="img/program/den4-3.jpg">
            <p>арктической пустыне и остановимся для ланча и фото на самой высокой точке ферда - около 2100 футов над уровнем моря. Этот ПОТРЯСАЮЩИЙ ВИД на горную арктическую долину и Северный Ледовитый океан будет одним из самых захватывающих в ВАШЕЙ ЖИЗНИ! </p>
            <h4>День 5 / 14 августа</h4>
            <p>Это день – приключения на выбор. Согласно нашей сегодняшней программы вы можете отправиться на велосипедах в несложное, но очень красивое путешествие к птичьей долине или совершить пешую прогулку с гидом по Лонгийру, посетить арктический музей поваляться с интересной книгой на оленьих шкурах с видом на заснеженные горы.</p>
            <img class="pb10" src="img/program/den5-1.jpg">
            <img src="img/program/den5-2.jpg">
            <p>В этот день вы можете так же отдохнуть или совершить дополнительное приключение (факультативно), которое мы забронируем специально для вас:</p>
            <p>1. Экспедиционный выезд на небольшом ледоколе к заброшенному городу Пирамиден или Баренцбург (по пути можно встретить КИТОВ и морских котиков)</p>
            <p>2. Экскурсия в заброшенную угольную шахту</p>
            <p>3. Пешее путешествие к всемирному хранилищу семян (Ноев ковчег)</p>
            <p>4. Лакшери путешествие с ночевкой на Ист Ферде</p>
            <img src="img/program/den5-6.jpg">
            <h4>День 6 / 15 августа</h4>
            <p>Согласно рейтингам National Geografic - природа – долины и горы Шпицбергена входят в пятерку самых впечатляющих в мире!</p>
            <p>Острова этого архипелага – одно из немногих мест на земле, сохранивших первозданную природу. Это суровый, но красивый пейзаж: острые высокие горы, длинные хребты, изумительно чистые прозрачные и бурные речки, мрачное темное море с величественными белыми айсбергами, заснеженные равнины, ледяные просторы Арктики. </p>
            <img src="img/program/13.jpg">
            <p>Мы совершим незабываемый трекинг по молчаливым сопкам, вдоль рек и долин, увидим уникальную флору и фауну островов. Возможно, даже встретим царя Арктики – БЕЛОГО МЕДВЕДЯ, а так же получим археологическое свидетельство того, что раньше на этих «землях» были субтропические леса! </p>
            <img src="img/program/11.jpg">
            <p>Для нашей безопасности трекинг будет проходить в сопровождении гида со специальной винтовкой и спасательным сигналом, который используются для отпугивания диких животных при их агрессивном поведении. </p>
            <h4>День 7 / 16 августа</h4>
            <p>Нереальный арктический каякинг)). Эмоции зашкаливают! ЮХУУУУУУУ! Жизнь - офигенная штука, как не крути)))). </p>
            <img src="img/program/den7-1.jpg">
            <p>5 часов экстремального приключения с высадкой на другой стороне ферда, наблюдением за дикой природой и настоящий туристический ланч! Вы просто не можете это пропустить! </p>
            <img class="pb10" src="img/program/den7-3.jpg">
            <img src="img/program/den7-4.jpg">
            <h4>День 8 / 18 августа</h4>
            <p>После отдыха и вылетаем в Осло. Шпицберген – самый быстрый способ заболеть Арктикой, поэтому обещаем вернуться, но уже за Северным Сиянием! </p>
            <p>В 5:55 приземляемся в аэропорту Осло. </p>
            <div class="container w100">
              <p class="title33gray">Получить развернутую программу</p>
              <div class="col-md-6 col-md-offset-3">
                <form id="getProgramForm" _lpchecked="1" class="calendarModalGetForm">
                  <input type="hidden" name="tourname" id="tourname" value="">
                  <input type="hidden" name="form-id" value="calendar-modal-get-program" />
                  <div class="form-group">
                    <input  name="name" type="text" class="form-control input_getprogram" id="name" placeholder="Ваше имя и фамилия" required="">
                  </div>
                  <div class="form-group">
                    <input name="phone"  type="tel" class="form-control input_getprogram" id="phone" placeholder="Ваш телефон" required="">
                  </div>
                  <div class="form-group">
                    <input name="mail" type="email" class="form-control input_getprogram" id="mail" placeholder="Ваша почта" required="">
                  </div>
                </form>
                <br>
                <br>
                <div class="modal-body-top-button">
                  <a href="" class="button ">
                    <button type="submit" form="getProgramForm" value="Submit">Получить </button>
                  </a>
                </div>
              </div>
            </div>
            <h2 class="travel-program__h2-second">
              Не откладывай ЖИЗНЬ на потом -
              <a target="_blank" href="https://www.facebook.com/FollowYourDREAM2015/">#Живи_так_как_ты_хочешь</a>
              <br>
              Присоединяйся к САМОМУ КРУТОМУ ПРИКЛЮЧЕНИЮ в твоей ЖИЗНИ!
            </h2>
          </section>
          <div class="cover_block container750">
            <div class="container">
              <br>
              <div class="modal-body-top-button">
                <a class="button">
                  <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom">ПРИНЯТЬ УЧАСТИЕ В ЭКСПЕДИЦИИ</button>
                </a>
              </div>
            </div>
          </div>
          <div id="home" class="tour_section">
            <div class="container">
              <div class="section_header">
                <span>Где будем жить</span>
              </div>
              <p class="title22gray">
                Отель Хоген пансион
                <br>
                (двухместные номера удобства на 2 номера)
              </p>
              <div id="links" class="tour_section__links">
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/live1-1.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/live1-2.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/live1-3.jpg">
                </div>
              </div>
            </div>
            <div class="container p30_0">
              <p class="title22gray">Дополнительные варианты проживания (бронируются отдельно):
                <br>
                Отель Хотел энд Лодж со всеми удобствами
              </p>
              <div id="links" class="tour_section__links">
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/1.1.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/1.2.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/1.3.jpg">
                </div>
              </div>
            </div>
            <div class="container">
              <p class="title22gray">Уникальный исторический отель комфорт класса (общая ванная комната)</p>
              <div id="links" class="tour_section__links">
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img  src="img/live/2.1.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.2.jpg"
                     data-gallery="stay_gallery">
                  <img src="img/live/2.2.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.3.jpg"
                     data-gallery="stay_gallery">
                  <img src="img/live/2.3.jpg">
                </div>
              </div>
            </div>
          </div>
          <div id="price" class="tour_section">
            <div class="container">
              <div class="section_header">
                <span>Стоимость экспедиции</span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 price_discount">1780 евро</div>
              <div class="row m0_10">
                <div class="col-sm-6 col-xs-12">
                  <h4 class="block_title">
                    <img src="img/trip/check_circle.png">
                    В стоимость включено:
                  </h4>
                  <ul class="tour_included">
                    <li>Трансфер из/в аэропорт в Лонгйире</li>
                    <li>Проживание на Шпицбергене 6 ночей</li>
                    <li>Питание – завтраки + ланчи (перекусы) во время приключений</li>
                    <li>Приключение на квадроциках + ланч-перекус + экипировка</li>
                    <li>Приключение На собачьих упряжках за полярным солнцем + ланч-перекус</li>
                    <li>Морское приключение с высадкой на островах к лежбищу моржей, киты, котики +ланч-перекус</li>
                    <li>Захватывающий трекинг в дикую природу Шпицбергена + ланч-перекус</li>
                    <li>Арктический каякинг</li>
                    <li>Сопровождение русскоязычным и англоязычным гидами</li>
                    <li>Фирменная ветровка или другой подарок</li>
                  </ul>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <h4 class="block_title">
                    <img src="img/trip/plus_circle.png">
                    Дополнительные расходы:
                  </h4>
                  <ul class="tour_features">
                    <li>Виза (Норвегия/шенген). Поможем с визой.</li>
                    <li>Перелет Киев-Осло-Киев от 200 евро; Перелет Осло-Лонгйир-Осло 250 евро (выкупленный блок) </li>
                    <li>Дополнительные услуги не включенные в программу</li>
                  </ul>
                </div>
              </div>
              <div class="hidden-xs">
                <h3 class="heading">Как присоединиться к экспедиции</h3>
                <div class="modal-body-top-button">
                  <a class="button ">
                    <button class="add_to_expedition tour_btn_takepart_orange tour_btn_witout_marginbottom">Подать заявку</button>
                  </a>
                </div>
                <ul class="timeline">
                  <li>
                    <div class="timeline-badge">1</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Мы принимаем заявку и перезваниваем Вам для обсуждения деталей</p>
                        <div class="timeline-icon">
                          <img src="img/trip/phone_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge">2</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Отправляем Вам на почту анкету участника и инструкции по оплате тура</p>
                        <div class="timeline-icon">
                          <img src="img/trip/mail_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge">3</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Принимаем оплату (для жесткой бронировки - предоплата в размере 800 евро)в офисе или переводом на карту</p>
                        <div class="timeline-icon">
                          <img src="img/trip/money_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge">4</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Помогаем решить вопрос с визой и бронируем перелет в Осло из Киева (принеобходимости)</p>
                        <div class="timeline-icon">
                          <img src="img/trip/doc_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-li">
                    <div class="timeline-badge">5</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Расскажем, что с собой нужно взять и отправляемся в САМОЕ КРУТОЕПРИКЛЮЧЕНИЕ в вашей ЖИЗНИ! В Арктику! За Полярный Круг!</p>
                        <div class="timeline-icon">
                          <img src="img/trip/prepare_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="modal-footer__orginizer">
            <ul>
              <li>
                <div class="modal-footer__orginizer-img-wrapper">
                  <img src="img/review__human-2.png" alt="">
                </div>
                <h4>Анна Скибун</h4>
                <h5>Организатор</h5>
                <ul class="modal-footer__orginizer-contacts">
                  <li class="contact-fb">
                    <a href="https://www.facebook.com/anna.skibun" target="_blank">anna.skibun</a>
                  </li>
                  <li class="contact-skype">
                    <a href="skype:anna_skibun?chat">skype</a>
                  </li>
                  <li class="footer-messager__viber">
                    <a href="viber://add?number=+380678502107">followyourdream</a>
                  </li>
                  <li class="contact-mail">
                    <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                  </li>
                  <li class="contact-phones">
                    <a href="tel:+380678502107">+38 067 850 21 07</a>
                  </li>
                </ul>
              </li>
              <li>
                <div class="modal-footer__orginizer-img-wrapper">
                  <img src="img/Vlad.jpg" alt="">
                </div>
                <h4>Владислав Бондарь</h4>
                <h5>Клиент-менеджер</h5>
                <ul class="modal-footer__orginizer-contacts">
                  <li class="contact-fb">
                    <a href="https://www.facebook.com/bondar.vlad" target="_blank">bondar.vlad</a>
                  </li>
                  <li class="contact-skype">
                    <a href="skype:anna_skibun?chat">skype</a>
                  </li>
                  <li class="footer-messager__viber">
                    <a href="viber://add?number=+380678502107">followyourdream</a>
                  </li>
                  <li class="contact-mail">
                    <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                  </li>
                  <li class="contact-phones">
                    <a href="tel:+380443605328">+38 044 360 53 28</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- modal-calendar END shpicbergen-severnoe -->













<!-- modal-calendar START tay-kambodga-->
<div class="modal fade calendar-modal calendar-modal-new" id="tay-kambodga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-header-close-991">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  <div class="modal-dialog template-page" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header__first">
        <img src="img/01.jpg" alt="" class="modal-header-bg-img">
        <div class="modal-header__content template-header-text">
          <h3 class="modal-title modal-header__content-place" id="calendar-modal-title">Тай + Камбоджа</h3>
          <h4 class="modal-header__content-short-info">Дальше только СЕВЕРНЫЙ ПОЛЮС!</h4>
          </br>
          <h4 class="modal-header__content-short-info date">05 - 11 июня 2017<br></h4>
        </div>
      </div>
      <section class="arctic-body template-body">
        <div class="modal-body">
          <section class="row modal-body__icon-info">
            <div class="col-lg-10 col-lg-push-1 col-md-12 col-md-push-0 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0" style="border-bottom: 2px dotted #333;padding-bottom: 40px;">
              <div class="row modal-body__icon-row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/calendar_white.png" alt="">
                    <h4>СРОКИ</h4>
                    <p>04 - 18 января 2016</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/modal-icon-check.png" alt="">
                    <h4>ВАЖНО</h4>
                    <p>Размер группы до 30 человек. </p>
                    <p>Осталось 4 места.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/modal-icon-money.png" alt="">
                    <h4>СТОИМОСТЬ</h4>
                    <p>2090 евро/чел (включая все трансферы и внутренние перелеты) ВАЖНО: в программенет никаких скрытых платежей - во время путешествия включено ВСЁ, кромесувениров и некоторых обедов/ужинов на ваш вкус.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <h3 class="center first">В самый неизведанный туристами регион</h3>
          <div class="col-sm-12 col-xs-12 calendar-modal__short-info">
            <ul class="arctic-body-shpitsberg-ul">
              <li>Мы летим за Полярный Круг!</li>
              <li>ШПИЦБЕРГЕН – это завораживающий океан, ЛЕДНИКИ и АЙСБЕРГИ, БЕЛЫЕ МЕДВЕДИ, арктические МОРЖИ, трофи на снегоходах и в собачьих упряжках, СЕВЕРНОЕ СИЯНИЕ, КИТЫ, невероятные арктические пейзажи и даже цветы! </li>
              <li>Ни одна турфирма не предложит вам такого НАСЫЩЕННОГО ВПЕЧАТЛЕНИЯМИ экспедиционного тура по такой НИЗКОЙ ЦЕНЕ </li>
              <li>9 уникальных АРКТИЧЕСКИХ ПРИКЛЮЧЕНИЙ, комфортное проживание, продуманная логистика (маршрут) – ВСЕГО за 1780 евро!!! (туры тур операторов стартуют от 3000 евро). И все потому что, мы создаем свои экспедиции сами! Круче и дешевле – просто не существует!</li>
              <li>Мы поможем с визой при необходимости (Норвегия, Шенген)</li>
              <li>С нами ОЧЕНЬ весело и легко, так как собирается только положительная и искренняя компания –присоединяйся!</li>
            </ul>
            <p class="title22gray">
              ШПИЦБЕРГЕН с нами – это ЛУЧШЕЕ ПУТЕШЕСТВИЕ в твоей ЖИЗНИ – звони и регистрируйся!
              <br>
              <br>
              <a href="tel: 0678502107">+38 (067) 850 21 07</a>
            </p>
          </div>
          <div class="modal-body-top-button">
            <a class="button calendar_modal_sub">
              <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom" style="margin: 10px;">ПРИНЯТЬ УЧАСТИЕ В ЭКСПЕДИЦИИ</button>
            </a>
          </div>
          <section class="modal-body__travel-program">
            <h2 class="travel-program-first">Карта маршрута</h2>
            <p>Шпицберген - внушительных размеров полярный островной архипелаг, лежащий на просторах западной части Северного Ледовитого океана. Все экспедиции на Северный Полюс начинаются именно отсюда, так как до Точки Мира всего 1 час лета! </p>
            <p>Архипелаг включает три крупных острова: Эдж, Северо-Восточная Земля, Западный Шпицберген и семь менее значительных, которые изрезаны причудливыми фьердами и покрыты снежными шапками ледников.</p>
            <p>Шпицберген - это БЕЛЫЕ МЕДВЕДИ (которых там в 3!! раза больше чем людей), МОРЖИ, уникальная арктическая природа, ПАКОВЫЕ ЛЬДЫ, ОЛЕНИ и звенящая тишина крайнего севера!</p>
            <p>Уникальная геолокация и природные ресурсы создают исключительные условия для проведения всех видов экспедиционных туров Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН – рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</p>
          </section>
          <div class="container w87">
            <div class="col-xs-12 col-sm-8 col-md-8  col-lg-8">
              <img src="img/2.1.jpg" width="100%">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <img class="w87__img-h" src="img/2.2.jpg" width="105%">
            </div>
          </div>
          <section class="modal-body__travel-program">
            <div class="section_header">
              <span>Программа</span>
            </div>
            <h2 class="travel-program__h2-first">Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН - рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</h2>
            <img src="img/2.png">
            <h4>День 1 / 10 августа</h4>
            <p>Сбор в аэропорту Борисполь группы, которая летит из Киева. С остальными участниками мы встречаемся в Осло. Отправляемся в самое непредсказуемое приключение в своей жизни, в страну вечных льдов и белых медведей, за Полярный Круг!</p>
            <p>Перелет на Шпицберген через Осло. Прогулка по Осло между перелетами.</p>
            <img src="img/program/0.png">
            <div class="clearfix"></div>
            <p>Осло - самый древний город северной Европы основанный в 1048 году, находится целиком в окружении лесов, горных вершин и холмов.</p>
            <p>В Осло сосредоточены главные культурные достопримечательности страны и самые необычные музеи. Футуристическое здание Норвежской оперы спускается прямо во фьорд, а любоваться красотами природы можно просто прогуливаясь по крыше оперного театра, как это любят делать местные жители, а значит сможем и мы!</p>
            <p>21.30 Вылет в Лонгйир – столицу архипелага ШПИЦБЕРГЕН.</p>
            <img src="img/program/3.jpg">
            <p>Еще только подлетая к Лонгйиру - самому северном в мире городу, расположенному в высоких широтах норвежской части Арктики, перед нами откроются суровые и прекрасные пейзажи полярного архипелага. Населенный пункт назван в честь американского предпринимателя Джона Манро Лонгйира (1860—1922), который основал город.</p>
            <p>За пределы города выходить без сопровождения и оружия опасно, ведь БЕЛЫХ МЕДВЕДЕЙ на архипелаге в три! раза больше чем людей.</p>
            <img src="img/program/4.jpg">
            <div class="clearfix"></div>
            <p>00:30 Прибытие в Лонгйир и поселение в отель (двухместные номера с удобставами на этаже или поселение в отеле со всеми удобствами)</p>
            <h4>День 2 / 11 августа</h4>
            <p>Завтрак подается в четырех звездочном отеле (ОЧЕНЬ разнообразный и вкусный) и ПРИКЛЮЧЕНИЯ начинаются!</p>
            <p>Нас ожидает КВАДРО-трофи в невероятную Арктику.</p>
            <p>Квадроциклы Am Outlander ATV самый удобный транспорт для летних приключений в дикую природу Шпицбергена. Мы обязательно увидим северных оленей в долине Адвентдален, а так же лис и возможно встретим царя Арктики – БЕЛОГО МЕДВЕДЯ.</p>
            <img src="img/program/den2-1.jpg">
            <p>На вершине горных хребтов находится Кьелл Хенриксен – одна из самых больших обсерваторий в мире для исследования СЕВЕРНОГО СИЯНИЯ. Здесь мы остановимся, чтобы насладиться удивительным видом Адвентдален. На нашем пути вниз мы посетим Trappers станцию Basecamp в Bolterdalen. Там мы выпьем вкуснейшего кофе и отведаем печенья с ягодами, а так же пожарим зефир на костре. И все это за Полярным Кругом!</p>
            <img src="img/program/den2-2.jpg">
            <div class="clearfix"></div>
            <p>Вся специальная экипировка выдается на месте.</p>
            <h4>День 3 / 12 августа</h4>
            <p>Если вы никогда не мечтали увидеть МОРЖЕЙ, КИТОВ, белых МЕДВЕДЕЙ и их детенышей, а так же морских КОТИКОВ - пора начинать! Потому, что - то, что вы увидите в этот день – ни с чем не сравнится! В этот день мы совершим выход в море на специальной закрытой лодке в поисках этих уникальных животных и проведем день среди гигантских айсбергов и паковых льдов.</p>
            <img src="img/program/7.jpg">
            <p>Увидим, как откалываются айсберги от высоченных белых стен и с леденящим треском падают в океан! Только ради ТАКИХ ВПЕЧАТЛЕНИЙ стоит ехать за Полярный Круг! А если нам повезет – мы отснимем САМЫЕ КРУТЫЕ ФОТО в вашей жизни!</p>
            <img src="img/program/den3-1.jpg">
            <p>Если повезет с погодой – мы совершим уникальную высадку на одном из островов архипелага (Принц Карл), что бы понаблюдать за лежбищем арктических МОРЖЕЙ. Они проводят в этом районе большую часть времени и любят «загорать» на пляже. Так же нас ждет арктический ланч и много ОБАЛДЕННЫХ ФОТО!</p>
            <img src="img/program/den3-2.jpg">
            <div class="clearfix"></div>
            <h4>День 4 / 13 августа</h4>
            <p>Просто фантастические впечатления ждут нас в этот день – мы совершим переход в СОБАЧЬИХ УПРЯЖКАХ на колесах!! Такого вы еще точно не пробовали!</p>
            <img src="img/program/den4-4.jpg">
            <p>В каждую упряжку запрягают по 6-8 собак специальной породы. Хаски выносливые и веселые, они точно знают маршрут и способны добраться домой даже если вы потеряетесь. Сначала мы поднимемся круто в горы. Потом пронесемся по</p>
            <img src="img/program/den4-3.jpg">
            <p>арктической пустыне и остановимся для ланча и фото на самой высокой точке ферда - около 2100 футов над уровнем моря. Этот ПОТРЯСАЮЩИЙ ВИД на горную арктическую долину и Северный Ледовитый океан будет одним из самых захватывающих в ВАШЕЙ ЖИЗНИ! </p>
            <h4>День 5 / 14 августа</h4>
            <p>Это день – приключения на выбор. Согласно нашей сегодняшней программы вы можете отправиться на велосипедах в несложное, но очень красивое путешествие к птичьей долине или совершить пешую прогулку с гидом по Лонгийру, посетить арктический музей поваляться с интересной книгой на оленьих шкурах с видом на заснеженные горы.</p>
            <img class="pb10" src="img/program/den5-1.jpg">
            <img src="img/program/den5-2.jpg">
            <p>В этот день вы можете так же отдохнуть или совершить дополнительное приключение (факультативно), которое мы забронируем специально для вас:</p>
            <p>1. Экспедиционный выезд на небольшом ледоколе к заброшенному городу Пирамиден или Баренцбург (по пути можно встретить КИТОВ и морских котиков)</p>
            <p>2. Экскурсия в заброшенную угольную шахту</p>
            <p>3. Пешее путешествие к всемирному хранилищу семян (Ноев ковчег)</p>
            <p>4. Лакшери путешествие с ночевкой на Ист Ферде</p>
            <img src="img/program/den5-6.jpg">
            <h4>День 6 / 15 августа</h4>
            <p>Согласно рейтингам National Geografic - природа – долины и горы Шпицбергена входят в пятерку самых впечатляющих в мире!</p>
            <p>Острова этого архипелага – одно из немногих мест на земле, сохранивших первозданную природу. Это суровый, но красивый пейзаж: острые высокие горы, длинные хребты, изумительно чистые прозрачные и бурные речки, мрачное темное море с величественными белыми айсбергами, заснеженные равнины, ледяные просторы Арктики. </p>
            <img src="img/program/13.jpg">
            <p>Мы совершим незабываемый трекинг по молчаливым сопкам, вдоль рек и долин, увидим уникальную флору и фауну островов. Возможно, даже встретим царя Арктики – БЕЛОГО МЕДВЕДЯ, а так же получим археологическое свидетельство того, что раньше на этих «землях» были субтропические леса! </p>
            <img src="img/program/11.jpg">
            <p>Для нашей безопасности трекинг будет проходить в сопровождении гида со специальной винтовкой и спасательным сигналом, который используются для отпугивания диких животных при их агрессивном поведении. </p>
            <h4>День 7 / 16 августа</h4>
            <p>Нереальный арктический каякинг)). Эмоции зашкаливают! ЮХУУУУУУУ! Жизнь - офигенная штука, как не крути)))). </p>
            <img src="img/program/den7-1.jpg">
            <p>5 часов экстремального приключения с высадкой на другой стороне ферда, наблюдением за дикой природой и настоящий туристический ланч! Вы просто не можете это пропустить! </p>
            <img class="pb10" src="img/program/den7-3.jpg">
            <img src="img/program/den7-4.jpg">
            <h4>День 8 / 18 августа</h4>
            <p>После отдыха и вылетаем в Осло. Шпицберген – самый быстрый способ заболеть Арктикой, поэтому обещаем вернуться, но уже за Северным Сиянием! </p>
            <p>В 5:55 приземляемся в аэропорту Осло. </p>
            <div class="container w100">
              <p class="title33gray">Получить развернутую программу</p>
              <div class="col-md-6 col-md-offset-3">
                <form id="getProgramForm" _lpchecked="1" class="calendarModalGetForm">
                  <input type="hidden" name="tourname" id="tourname" value="">
                  <input type="hidden" name="form-id" value="calendar-modal-get-program" />
                  <div class="form-group">
                    <input  name="name" type="text" class="form-control input_getprogram" id="name" placeholder="Ваше имя и фамилия" required="">
                  </div>
                  <div class="form-group">
                    <input name="phone"  type="tel" class="form-control input_getprogram" id="phone" placeholder="Ваш телефон" required="">
                  </div>
                  <div class="form-group">
                    <input name="mail" type="email" class="form-control input_getprogram" id="mail" placeholder="Ваша почта" required="">
                  </div>
                </form>
                <br>
                <br>
                <div class="modal-body-top-button">
                  <a href="" class="button ">
                    <button type="submit" form="getProgramForm" value="Submit">Получить </button>
                  </a>
                </div>
              </div>
            </div>
            <h2 class="travel-program__h2-second">
              Не откладывай ЖИЗНЬ на потом -
              <a target="_blank" href="https://www.facebook.com/FollowYourDREAM2015/">#Живи_так_как_ты_хочешь</a>
              <br>
              Присоединяйся к САМОМУ КРУТОМУ ПРИКЛЮЧЕНИЮ в твоей ЖИЗНИ!
            </h2>
          </section>
          <div class="cover_block container750">
            <div class="container">
              <br>
              <div class="modal-body-top-button">
                <a class="button">
                  <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom">ПРИНЯТЬ УЧАСТИЕ В ЭКСПЕДИЦИИ</button>
                </a>
              </div>
            </div>
          </div>
          <div id="home" class="tour_section">
            <div class="container">
              <div class="section_header">
                <span>Где будем жить</span>
              </div>
              <p class="title22gray">
                Отель Хоген пансион
                <br>
                (двухместные номера удобства на 2 номера)
              </p>
              <div id="links" class="tour_section__links">
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/live1-1.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/live1-2.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/live1-3.jpg">
                </div>
              </div>
            </div>
            <div class="container p30_0">
              <p class="title22gray">Дополнительные варианты проживания (бронируются отдельно):
                <br>
                Отель Хотел энд Лодж со всеми удобствами
              </p>
              <div id="links" class="tour_section__links">
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/1.1.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/1.2.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/live/1.3.jpg">
                </div>
              </div>
            </div>
            <div class="container">
              <p class="title22gray">Уникальный исторический отель комфорт класса (общая ванная комната)</p>
              <div id="links" class="tour_section__links">
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img  src="img/live/2.1.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.2.jpg"
                     data-gallery="stay_gallery">
                  <img src="img/live/2.2.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.3.jpg"
                     data-gallery="stay_gallery">
                  <img src="img/live/2.3.jpg">
                </div>
              </div>
            </div>
          </div>
          <div id="price" class="tour_section">
            <div class="container">
              <div class="section_header">
                <span>Стоимость экспедиции</span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 price_discount">1780 евро</div>
              <div class="row m0_10">
                <div class="col-sm-6 col-xs-12">
                  <h4 class="block_title">
                    <img src="img/trip/check_circle.png">
                    В стоимость включено:
                  </h4>
                  <ul class="tour_included">
                    <li>Трансфер из/в аэропорт в Лонгйире</li>
                    <li>Проживание на Шпицбергене 6 ночей</li>
                    <li>Питание – завтраки + ланчи (перекусы) во время приключений</li>
                    <li>Приключение на квадроциках + ланч-перекус + экипировка</li>
                    <li>Приключение На собачьих упряжках за полярным солнцем + ланч-перекус</li>
                    <li>Морское приключение с высадкой на островах к лежбищу моржей, киты, котики +ланч-перекус</li>
                    <li>Захватывающий трекинг в дикую природу Шпицбергена + ланч-перекус</li>
                    <li>Арктический каякинг</li>
                    <li>Сопровождение русскоязычным и англоязычным гидами</li>
                    <li>Фирменная ветровка или другой подарок</li>
                  </ul>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <h4 class="block_title">
                    <img src="img/trip/plus_circle.png">
                    Дополнительные расходы:
                  </h4>
                  <ul class="tour_features">
                    <li>Виза (Норвегия/шенген). Поможем с визой.</li>
                    <li>Перелет Киев-Осло-Киев от 200 евро; Перелет Осло-Лонгйир-Осло 250 евро (выкупленный блок) </li>
                    <li>Дополнительные услуги не включенные в программу</li>
                  </ul>
                </div>
              </div>
              <div class="hidden-xs">
                <h3 class="heading">Как присоединиться к экспедиции</h3>
                <div class="modal-body-top-button">
                  <a class="button ">
                    <button class="add_to_expedition tour_btn_takepart_orange tour_btn_witout_marginbottom">Подать заявку</button>
                  </a>
                </div>
                <ul class="timeline">
                  <li>
                    <div class="timeline-badge">1</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Мы принимаем заявку и перезваниваем Вам для обсуждения деталей</p>
                        <div class="timeline-icon">
                          <img src="img/trip/phone_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge">2</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Отправляем Вам на почту анкету участника и инструкции по оплате тура</p>
                        <div class="timeline-icon">
                          <img src="img/trip/mail_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge">3</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Принимаем оплату (для жесткой бронировки - предоплата в размере 800 евро)в офисе или переводом на карту</p>
                        <div class="timeline-icon">
                          <img src="img/trip/money_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge">4</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Помогаем решить вопрос с визой и бронируем перелет в Осло из Киева (принеобходимости)</p>
                        <div class="timeline-icon">
                          <img src="img/trip/doc_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-li">
                    <div class="timeline-badge">5</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Расскажем, что с собой нужно взять и отправляемся в САМОЕ КРУТОЕПРИКЛЮЧЕНИЕ в вашей ЖИЗНИ! В Арктику! За Полярный Круг!</p>
                        <div class="timeline-icon">
                          <img src="img/trip/prepare_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="modal-footer__orginizer">
            <ul>
              <li>
                <div class="modal-footer__orginizer-img-wrapper">
                  <img src="img/review__human-2.png" alt="">
                </div>
                <h4>Анна Скибун</h4>
                <h5>Организатор</h5>
                <ul class="modal-footer__orginizer-contacts">
                  <li class="contact-fb">
                    <a href="https://www.facebook.com/anna.skibun" target="_blank">anna.skibun</a>
                  </li>
                  <li class="contact-skype">
                    <a href="skype:anna_skibun?chat">skype</a>
                  </li>
                  <li class="footer-messager__viber">
                    <a href="viber://add?number=+380678502107">followyourdream</a>
                  </li>
                  <li class="contact-mail">
                    <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                  </li>
                  <li class="contact-phones">
                    <a href="tel:+380678502107">+38 067 850 21 07</a>
                  </li>
                </ul>
              </li>
              <li>
                <div class="modal-footer__orginizer-img-wrapper">
                  <img src="img/Vlad.jpg" alt="">
                </div>
                <h4>Владислав Бондарь</h4>
                <h5>Клиент-менеджер</h5>
                <ul class="modal-footer__orginizer-contacts">
                  <li class="contact-fb">
                    <a href="https://www.facebook.com/bondar.vlad" target="_blank">bondar.vlad</a>
                  </li>
                  <li class="contact-skype">
                    <a href="skype:anna_skibun?chat">skype</a>
                  </li>
                  <li class="footer-messager__viber">
                    <a href="viber://add?number=+380678502107">followyourdream</a>
                  </li>
                  <li class="contact-mail">
                    <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                  </li>
                  <li class="contact-phones">
                    <a href="tel:+380443605328">+38 044 360 53 28</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- modal-calendar END tay-kambodga -->



























<!-- modal-calendar START greece-modal -->
<div class="modal fade calendar-modal calendar-modal-new" id="greece-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-header-close-991">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  <div class="modal-dialog template-page" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header__first">
        <img src="img/calendar/apr_2016.jpg" alt="" class="modal-header-bg-img">
        <div class="modal-header__content template-header-text">
          <h3 class="modal-title modal-header__content-place" id="calendar-modal-title">ОКТЯБРЬ, ГРЕЦИЯ, ЯХТЫ!!</h3>
          <h4 class="modal-header__content-short-info">Мечта готова стать реальностью!</h4>
          </br>
          <h4 class="modal-header__content-short-info date">22 – 29 октября 2016<br></h4>
        </div>
      </div>
      <section class="arctic-body template-body">
        <div class="modal-body">
          <section class="row modal-body__icon-info">
            <div class="col-lg-10 col-lg-push-1 col-md-12 col-md-push-0 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0" style="border-bottom: 2px dotted #333;padding-bottom: 40px;">
              <div class="row modal-body__icon-row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/calendar_white.png" alt="">
                    <h4>СРОКИ</h4>
                    <p>22-29 октября 2016</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/modal-icon-check.png" alt="">
                    <h4>ВАЖНО</h4>
                    <p>Перелет от 100 евро</p>
                    <p>Присоединиться к нам можно из любой точки мира</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/modal-icon-money.png" alt="">
                    <h4>СТОИМОСТЬ</h4>
                    <p>780 евро/чел в двухместной каюте</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--  <h3 class="center first">В самый неизведанный туристами регион</h3> -->
          <div class="col-sm-12 col-xs-12 calendar-modal__short-info">
            <ul class="arctic-body-shpitsberg-ul">
              <li>ОКТЯБРЬ, ГРЕЦИЯ, ЯХТЫ!! – лучший выбор, когда хочется и моря и пляжа и приключений и активного отдыха и ужина с бокалом белого под звездами с видом на ТОЛЬКО ВАШЕ МОРЕ!</li>
              <li>Греция на яхтах – это не просто путешествие, это МЕЧТА, которая готова стать РЕАЛЬНОСТЬЮ.</li>
              <li>А теперь представьте себя на БЕЛОСНЕЖНОЙ ЯХТЕ (в купальнике последней модели:) - бирюзовые бухты островов, бесподобные безлюдные пляжи, скалы и оливковые рощи, уютные городки, вечерние прогулки и ОЧЕНЬ вкусная еда.</li>
              <li>В этой стране надо просто РАССЛАБИТЬСЯ и НАСЛАЖДАТЬСЯ.</li>
              <li>7 НЕЗАБЫВАЕМЫХ ДНЕЙ, наполненных морскими приключениями, вечеринками под звездами, новыми знакомствами и драйвом.  Не об этом ли вы мечтали в душном мегаполисе?</li>
              <li>Запомните эти даты: <b>22 – 29 октября 2016. Это будет ваше лучшее  путешествие 2016!</b></li>
            </ul>
            <p class="title22gray">
              Стоимость такого бесподобного путешествия всего – 780 евро/чел! Это не цена – это просто скандал))! </p>
            <br>
            <p class="p-calendar">И как бонус – чрезвычайно низкие цены на авиаперелет (от 100 евро). Не упустите свой шанс!</p>
            <br>
            <!-- <p class="title22gray">
               <a href="tel: 0678502107">+38 (067) 850 21 07</a>
             </p> -->
            <p class="p-calendar yellow center">Присоединяйтесь к самому теплому приключению на яхтах в Греции!</p>
          </div>
          <div class="modal-body-top-button">
            <a class="button calendar_modal_sub">
              <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom" style="margin: 10px;">ПРИНЯТЬ УЧАСТИЕ</button>
            </a>
          </div>
          <!--  <section class="modal-body__travel-program">
              <h2 class="travel-program-first">Карта маршрута</h2>
              <p>Шпицберген - внушительных размеров полярный островной архипелаг, лежащий на просторах западной части Северного Ледовитого океана. Все экспедиции на Северный Полюс начинаются именно отсюда, так как до Точки Мира всего 1 час лета! </p>
              <p>Архипелаг включает три крупных острова: Эдж, Северо-Восточная Земля, Западный Шпицберген и семь менее значительных, которые изрезаны причудливыми фьердами и покрыты снежными шапками ледников.</p>
              <p>Шпицберген - это БЕЛЫЕ МЕДВЕДИ (которых там в 3!! раза больше чем людей), МОРЖИ, уникальная арктическая природа, ПАКОВЫЕ ЛЬДЫ, ОЛЕНИ и звенящая тишина крайнего севера!</p>
              <p>Уникальная геолокация и природные ресурсы создают исключительные условия для проведения всех видов экспедиционных туров Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН – рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</p>
            </section> 
            <div class="container w87">
              <div class="col-xs-12 col-sm-8 col-md-8  col-lg-8">
                <img src="img/2.1.jpg" width="100%">
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img class="w87__img-h" src="img/2.2.jpg" width="105%">
              </div>
            </div> -->
          <section class="modal-body__travel-program">
            <div class="section_header">
              <span>Программа</span>
            </div>
            <h4>День 1 - Cуббота </h4>
            <p>Вылет из Киева и других городов мира.</p>
            <p>Сбор группы в Афинах до 14.00.</p>

            <img src="img/foto-programa-greciya/31635.jpg">
            <!-- <h2 class="travel-program__h2-first">Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН - рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</h2> -->

            <div class="clearfix"></div>
            <p><b>Трансфер в марину в г. Лефкас на остров Лефкада</b> - один из самых прекрасных островов Греции, увитый виноградниками и покрытый буйной зеленью оливковых зарослей, среди изумрудных волн Ионического моря.</p>
            <img src="img/foto-programa-greciya/i.porto-katsiki-lefkada-20140415.jpg">

            <p>Поселение на яхту. Знакомство с экипажем. Брифинг по безопасности.</p>
            <p>Ознакомление с программой круиза. Приветственный ужин в местной таверне.</p>
            <img src="img/foto-programa-greciya/fiskardo-.jpg">

            <h4>День 2 - Воскресенье</h4>
            <p><b>Морской переход : Lefkas Marina остров Лефкада -  Фискардо остров Кефалоня</b></p>
            <p>Переход  к рыбацкому  поселку  Фискардо, где можно купить самые свежие и вкусные морепродукты на острове.</p>
            <img src="img/foto-programa-greciya/Sailing-in-the-Aegean.jpg">

            <p>Все постройки Фискардо представляют собой настоящую архитектуру Ионических островов, дома отреставрированы и используются как гостиницы, на первых этажах - сплошь магазины сувениров и таверны. </p>
            <img src="img/foto-programa-greciya/Day2_3.jpg">

            <div class="clearfix"></div>
            <p>А какая необыкновенно вкусная еда - столики гостеприимно накрыты на набережной у самой воды, а вдоль всего поселка бесконечные яхты.  Во время перехода – зайдем на Petani beash острова Кефалония – отдых, купание, фотосессии.</p>
            <img src="img/foto-programa-greciya/Petani-Beach.jpg">

            <div class="clearfix"></div>
            <p>Ночь в марине.</p>


            <h4>День 3 – Понедельник</h4>
            <p><b>Морской переход  в порт  Sami, остров  Кефалония</b></p>
            <p>Второй порт Кефалонии, новый город с прекрасной набережной. Современные виллы выросли поблизости от древнего города. </p>
            <img src="img/foto-programa-greciya/000039-firskado-kefalonia.jpeg">

            <p>Ещё у Гомера можно обнаружить упоминания о могущественном и процветающем Сами. Рядом находятся античные  развалины Сами и акрополя. </p>
            <p>Всего в 2 км  от  набережной Сами находится редкое геологическое  явление, глубинная пещера с озером — Мелиссана. Экскурсии в пещере проводятся  на небольшой лодке, под аккомпанемент местного экскурсовода.   До нее можно легко добраться на велосипеде взятом напрокат  ( прокат 5 евро в сутки). А еще в г.Сами очень много сувенирных лавочек, предлагающих широкий выбор сувениров. </p>
            <img src="img/foto-programa-greciya/1.jpg">
            <div class="clearfix"></div>

            <h4>День 4 - Вторник</h4>
            <p><b>Морской переход:  Port of Sami, остров  Кефалония - Port  St.Nicholas остров Закинф</b></p>
            <p>Вас ожидает купание в  одной из самых красивых морских бухт мира – Бухта Навагио  или пляж кораблекрушения.
              Здесь, на белоснежном песке, находится корабль контрабандистов, выброшенный на берег во время сильного шторма. </p>
            <img src="img/foto-programa-greciya/1467023396_navagio-beach-bay-4.jpg">

            <p>Доступ к самому фантастическому пляжу мира существует только со стороны моря. Кристально чистая вода голубого цвета и возвышающиеся скалы с изумрудной мантией - виды на пляже завораживают и поражают своей красотой. Постановка на якорь, купание, фотосессия. </p>
            <img src="img/foto-programa-greciya/2.jpg">

            <p>Далее  переход в Port  St.Nicholas – небольшой красивый порт, расположенный в северной части острова. В километре от порта  Николаос раскинулся фантастической красоты каменный заповедник Аскос (Askos Stone Park). На территории заповедника можно увидеть редчайшие виды животных и растений со всей планеты. Внушительные каменные строения, резервуары для воды и композиции из дерева гармонично сливаются в едином танце с нетронутым величием природных богатств Закинфа. Главной достопримечательностью Каменного парка Аскос  является небольшой зоопарк, в  котором содержатся олени, еноты-полоскуны, черепахи, белки, кролики, шиншиллы, голуби, утки, павлины, цесарки. Для комфортного отдыха каждого туриста обеспечивают бутилированной питьевой водой, также разрешена свободная фото- и видеосъемка. </p>


            <h4>День 5 - Среда</h4>
            <p><b>Морской переход :  Port  St.Nicholas остров Закинф  -  остров Итака г. Вати</b></p>
            <img class="pb10" src="img/foto-programa-greciya/3.jpg">

            <p>Итака является маленьким островком с гористым рельефом с удобными бухтами, похожими на земной рай. Остров весь покрыт густыми лесами и является уникальным по живописности. Из-за большого количества прекрасных бухточек и заливов здесь в большом количестве располагаются яхты. Берега острова очень красивы, здесь лазурная ласковая вода, чистейшие роскошные  пляжи с мелким песком. Столицей острова Итака является город Вати (его еще так и называют Итака-Город), расположенный на берегу залива с прекрасным портом.</p>

            <img src="img/foto-programa-greciya/Eq7bXUVwI6mIC0kKb0s8giIjUPk.jpg">
            <p>В 3 километрах от Вати находится деревня  Пиликата, где британские  археологи раскопали поселение эпохи бронзового века наиболее вероятное местоположение столицы Одиссея. Согласно описанию Гомера дворец Одиссея находился в том месте, откуда было видно все “три моря” Итаки. Это место единственное на острове, откуда модно увидеть западный, восточный и северный берег острова. </p>


            <h4>День 6 – Четверг</h4>
            <p><b>Морской переход: остров Итака г. Вати (Вафи)– остров Меганиси</b></p>
            <p>Делая переход к о.Меганиси, зайдем на о.Каламнос. Здесь находится одноименная  деревня Каламнос с уютной гаванью для стоянки яхт. Многие яхтсмены приходят сюда, чтобы насладиться тишиной и бесподобным сыром с оливками и свежей жареной рыбкой, которую подают здесь во множестве таверн.</p>
            <p>Меганиси, живописный остров Ионического моря, находится в 4 морских милях юго-восточнее Острова Лефкада.
              Традиционная архитектура его жилищ, гостеприимный народ, размеренная жизнь, разнообразие ландшафтов, живописные гавани, </p>
            <img src="img/foto-programa-greciya/333.jpg">


            <p>богатая зелень и кристально чистое море – все это создает идиллическое окружение для отдыха. Если успеем, то сможем посетить пещеры Папаниколиса и Джованни, куда доступ возможен только с моря. </p>
            <img src="img/foto-programa-greciya/sailing-charter-greece.jpg">


            <h4>День 7 - Пятница </h4>
            <p><b>Морской переход: остров Меганиси - Lefkas Marina остров Лефкада</b></p>
            <p>10 морских миль – 2 ч</p>

            <p>Переход в  марину Lefkas Marina, остров Лефкада. Природа острова завораживает: морская вода бирюзового цвета, холмистая местность, горы, обильная растительность и множество пляжей. Лефкада никого не оставит равнодушным. Именно поэтому  его любят по-особенному, выделяя среди всей  палитры  островов Греции.  Красота белых отвесных скал, одновременно пугающих и чарующих, раскинувшихся по западной стороне острова покоряет. Благодаря этому остров  получил такое пленяющее название - Лефкада (с греческого - «белый»). </p>
            <p>Нам есть чем вас удивить  -  мы сделаем две высадки  у живописного побережья Porto Katsiki и  Kathisma beash – уникальный пляж с водой необыкновенно бирюзового цвета. Вы только посмотрите на эти бесподобные волны!</p>
            <img src="img/foto-programa-greciya/plyazh-katizma-v-grecii-1.jpg">

            <p>По прибытию в Лефкас вы сможете взять на прокат машину, мотороллер или даже велосипед и совершить небольшое путешествие по острову. Поверьте, вы не будете разочарованы!</p>

            <img class="pb10" src="img/foto-programa-greciya/9306061ee3582ac7313a454f1db660ea.jpg">
            <p>Венецианская крепость Св. Мавры, руины доисторического города, церковь Св. Иоанна Антузи, церковь Святителя Спиридона и Святителя Николая, монастырь Пресвятой Богородицы Фанеромеи, узкие улочки городков с традиционными разноцветными домами, уютные недорогие ресторанчики.</p>

            <img src="img/foto-programa-greciya/kos.jpg">
            <p>Прощальный ужин на выбор:  в местной таверне или на борту.</p>

            <h4>День 8. Суббота.</h4>
            <p>До 9-00 час покидаем  яхты, выезжаем в аэропорт Афины. Вылет.</p>
            <p>Если вы хотите  посмотреть Афины можно продлить путешествие на один или несколько дней. </p>
            <p>Греция оставит самые теплые воспоминания и подарит только положительные эмоции, которых нам так порой не хватает в повседневной жизни!</p>

            <!--   <div class="container w100">
                 <p class="title33gray">Получить развернутую программу</p>
                 <div class="col-md-6 col-md-offset-3">
                   <form id="getProgramForm" _lpchecked="1" class="calendarModalGetForm">
                     <input type="hidden" name="tourname" id="tourname" value="">
                     <input type="hidden" name="form-id" value="calendar-modal-get-program" />
                     <div class="form-group">
                       <input  name="name" type="text" class="form-control input_getprogram" id="name" placeholder="Ваше имя и фамилия" required="">
                     </div>
                     <div class="form-group">
                       <input name="phone"  type="tel" class="form-control input_getprogram" id="phone" placeholder="Ваш телефон" required="">
                     </div>
                     <div class="form-group">
                       <input name="mail" type="email" class="form-control input_getprogram" id="mail" placeholder="Ваша почта" required="">
                     </div>
                   </form>
                   <br>
                   <br>
                   <div class="modal-body-top-button">
                     <a href="" class="button ">
                       <button type="submit" form="getProgramForm" value="Submit">Получить </button>
                     </a>
                   </div>
                 </div>
               </div> -->


            <!-- <h2 class="travel-program__h2-second">
              Не откладывай ЖИЗНЬ на потом -
              <a target="_blank" href="https://www.facebook.com/FollowYourDREAM2015/">#Живи_так_как_ты_хочешь</a>
              <br>
              Присоединяйся к САМОМУ КРУТОМУ ПРИКЛЮЧЕНИЮ в твоей ЖИЗНИ!
            </h2> -->

            <h4 style="font-size: 18px;">Присоединяйтесь! Не откладывайте свою жизнь на потом!</h4>

          </section>


          <!-- <div class="cover_block container750">
            <div class="container">
              <br>
              <div class="modal-body-top-button">
                <a class="button">
                  <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom">ПРИНЯТЬ УЧАСТИЕ В ЭКСПЕДИЦИИ</button>
                </a>
              </div>
            </div>
          </div> -->


          <div id="home" class="tour_section" style="margin-top: -25px;">
            <div class="container">
              <div class="section_header">
                <span>Наши яхты</span>
              </div>
              <p class="title22gray">
                <b>Все яхты не старше 2008 г/выпуска, 4х каютные, 2 санузла, каюткомпания</b>
              </p>
              <div id="links" class="tour_section__links">
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/foto-programa-greciya/plan1.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/foto-programa-greciya/plan2.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/foto-programa-greciya/plan3.jpg">
                </div>
              </div>
            </div>
            <!-- <div class="container p30_0">
               <p class="title22gray">Дополнительные варианты проживания (бронируются отдельно):
                 <br>
                 Отель Хотел энд Лодж со всеми удобствами
               </p>
               <div id="links" class="tour_section__links">
                 <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                   <img src="img/live/1.1.jpg">
                 </div>
                 <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                   <img src="img/live/1.2.jpg">
                 </div>
                 <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                   <img src="img/live/1.3.jpg">
                 </div>
               </div>
             </div> -->
            <!--  <div class="container">
                <p class="title22gray">Уникальный исторический отель комфорт класса (общая ванная комната)</p>
                <div id="links" class="tour_section__links">
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img  src="img/live/2.1.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.2.jpg"
                       data-gallery="stay_gallery">
                    <img src="img/live/2.2.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.3.jpg"
                       data-gallery="stay_gallery">
                    <img src="img/live/2.3.jpg">
                  </div>
                </div>
              </div> -->
          </div>



          <div id="price" class="tour_section">
            <div class="container">
              <div class="section_header">
                <span>Стоимость яхт-путешествия</span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 price_discount">всего 780 евро</div>
              <div class="row m0_10">
                <div class="col-sm-6 col-xs-12">
                  <h4 class="block_title">
                    <img src="img/trip/check_circle.png">
                    В стоимость включено:
                  </h4>
                  <ul class="tour_included">
                    <li>Семь роскошных дней проживания на яхте</li>
                    <li>Услуги профессионального шкипера</li>
                    <li>Топливо</li>
                    <li>Стоянки в маринах</li>
                    <li>Финальная уборка</li>
                    <li>Постельное белье</li>
                    <li>Услуги гида</li>
                    <li>Фотоотчет</li>
                    <li>Фирменная ветровка</li>
                  </ul>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <h4 class="block_title">
                    <img src="img/trip/plus_circle.png">
                    Дополнительные расходы:
                  </h4>
                  <ul class="tour_features">
                    <li>Авиаперелет  от 100 евро</li>
                    <li>Питание на борту  -  80 евро/чел в неделю</li>
                    <li>Трансфер в Левкас – 40 евро</li>
                  </ul>
                </div>
              </div>
              <div class="hidden-xs">
                <h3 class="heading">Как присоединиться к экспедиции</h3>
                <div class="modal-body-top-button">
                  <a class="button ">
                    <button class="add_to_expedition tour_btn_takepart_orange tour_btn_witout_marginbottom">Подать заявку</button>
                  </a>
                </div>
                <ul class="timeline">
                  <li>
                    <div class="timeline-badge">1</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Мы принимаем заявку и перезваниваем Вам для обсуждения деталей</p>
                        <div class="timeline-icon">
                          <img src="img/trip/phone_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge">2</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Отправляем Вам на почту анкету участника и инструкции по оплате тура</p>
                        <div class="timeline-icon">
                          <img src="img/trip/mail_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge">3</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Принимаем оплату (для жесткой бронировки - предоплата в размере 600 евро) в офисе или переводом. Остаток оплату не позднее чем за 10 рабочих дней до начала путешествия (до 10.10.16)</p>
                        <div class="timeline-icon">
                          <img src="img/trip/money_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge">4</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Помогаем решить вопрос с визой (предоставляем приглашение) и перелетом перелет (при необходимости)</p>
                        <div class="timeline-icon">
                          <img src="img/trip/doc_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-li">
                    <div class="timeline-badge">5</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Расскажем, что с собой нужно взять и отправляемся в самое теплое путешествие уходящего года!</p>
                        <div class="timeline-icon">
                          <img src="img/trip/prepare_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="modal-footer__orginizer">
            <ul>
              <li>
                <div class="modal-footer__orginizer-img-wrapper">
                  <img src="img/review__human-2.png" alt="">
                </div>
                <h4>Анна Скибун</h4>
                <h5>Организатор</h5>
                <ul class="modal-footer__orginizer-contacts">
                  <li class="contact-fb">
                    <a href="https://www.facebook.com/anna.skibun" target="_blank">anna.skibun</a>
                  </li>
                  <li class="contact-skype">
                    <a href="skype:anna_skibun?chat">skype</a>
                  </li>
                  <li class="footer-messager__viber">
                    <a href="viber://add?number=+380678502107">followyourdream</a>
                  </li>
                  <li class="contact-mail">
                    <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                  </li>
                  <li class="contact-phones">
                    <a href="tel:+380678502107">+38 067 850 21 07</a>
                  </li>
                </ul>
              </li>
              <li>
                <div class="modal-footer__orginizer-img-wrapper">
                  <img src="img/Vlad.jpg" alt="">
                </div>
                <h4>Владислав Бондарь</h4>
                <h5>Клиент-менеджер</h5>
                <ul class="modal-footer__orginizer-contacts">
                  <li class="contact-fb">
                    <a href="https://www.facebook.com/bondar.vlad" target="_blank">bondar.vlad</a>
                  </li>
                  <li class="contact-skype">
                    <a href="skype:anna_skibun?chat">skype</a>
                  </li>
                  <li class="footer-messager__viber">
                    <a href="viber://add?number=+380678502107">followyourdream</a>
                  </li>
                  <li class="contact-mail">
                    <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                  </li>
                  <li class="contact-phones">
                    <a href="tel:+380443605328">+38 044 360 53 28</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- modal-calendar END greece-modal -->





















<!-- modal-calendar START kanaru-yahting-vylkan -->
<div class="modal fade calendar-modal calendar-modal-new" id="kanaru-yahting-vylkan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-header-close-991">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  <div class="modal-dialog template-page" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header__first">
        <img src="img/calendar/apr_2016.jpg" alt="" class="modal-header-bg-img">
        <div class="modal-header__content template-header-text">
          <h3 class="modal-title modal-header__content-place" id="calendar-modal-title">КАНАРЫ ЯХТИНГ – ВУЛКАН ТЕЙДЕ!!</h3>
          <h4 class="modal-header__content-short-info">Невероятное летнее приключение среди зимы!</h4>
          </br>
          <h4 class="modal-header__content-short-info date">07 – 14 января 2017<br></h4>
        </div>
      </div>
      <section class="arctic-body template-body">
        <div class="modal-body">
          <section class="row modal-body__icon-info">
            <div class="col-lg-10 col-lg-push-1 col-md-12 col-md-push-0 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0" style="border-bottom: 2px dotted #333;padding-bottom: 40px;">
              <div class="row modal-body__icon-row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/calendar_white.png" alt="">
                    <h4>СРОКИ</h4>
                    <p>07-14 января 2017</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/modal-icon-check.png" alt="">
                    <h4>ВАЖНО</h4>
                    <p>Перелет от 280 евро</p>
                    <p>Присоединиться к нам можно из любой точки мира</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="modal-body__icon-info-item">
                    <img src="img/modal-icon-money.png" alt="">
                    <h4>СТОИМОСТЬ</h4>
                    <p>1100 евро/чел в двухместной каюте</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--  <h3 class="center first">В самый неизведанный туристами регион</h3> -->
          <div class="col-sm-12 col-xs-12 calendar-modal__short-info">
            <p class="p-calendar">Зима, холодно и промозгло… и вдруг -  ЛЕТО, КАНАРЫ, ЯХТА и ОКЕАН!</p>
            <p class="p-calendar">Когда все новогодние хлопоты позади, подарки подарены, дела доделаны – можно со спокойной душой наконец-то позволить себе окунуться с головой в ПРИКЛЮЧЕНИЯ, ведь КАНАРЫ – самый желанный и самый необычный архипелаг Атлантического Океана.</p>
            <p class="p-calendar">В одном путешествии - два самых КРАСИВЫХ острова - Тенерифе и Гран-Канария, трекинг в уникальном ущелье Маска, ВУЛКАНЫ, белоснежные и черные (лавовые) пляжи, ПАЛЬМЫ и двухметровые кактусы, снежная вершина вулкана Тейде и знойные дюны  Маспаломас, СЕРФИНГ и НЕВЕРОЯТНОЙ синевы ОКЕАН…</p>
            <p class="p-calendar">Канары – это ЛЮБОВЬ с первого взгляда и НЕОБЫКНОВЕННЫЕ впечатления, которые останутся с вами НА ВСЮ ЖИЗНЬ!</p>
            <p class="p-calendar">8 НЕЗАБЫВАЕМЫХ ДНЕЙ, наполненных солнцем, приключениями, вечеринками под звездами, новыми знакомствами и драйвом.  Не об этом ли вы мечтали в холодном мегаполисе?</p>
            <p class="p-calendar">Во время путешествия вас ждет:</p>
            <ul class="arctic-body-shpitsberg-ul">

              <li>Неделя на прекрасной яхте в океане – лето посреди зимы!</li>
              <li>2  самых красивых и впечатляющих острова Канарского Архипелага</li>
              <li>Покорение третьего по высоте в мире вулкана Тейде 3718 м</li>
              <li>Океанская РЫБАЛКА на голубого МАРЛИНА и тунца</li>
              <li>Возможность постоять «На Краю Света» Лос Гигантес</li>
              <li>Уникальные дюны Маспаломас</li>
              <li>Треккинг по впечатляющему ущелью Маска</li>
              <li>Серфинг на прекрасном пляже Гран-Канарии </li>
              <li>Возможность увидеть китов в естественной среде обитания</li>
              <li>Двухметровые кактусы (и джем из их плодов), морепродукты, пальмы и океан</li>
              <li>Прекрасная компания, вечеринка на пляже, новые друзья и потрясающий драйв насыщенной и интересной жизни!</li>
            </ul>
            <p class="title22gray">Стоимость такого бесподобного путешествия всего – 1100 евро/чел!</p>
            <br>
            <p class="p-calendar">И как бонус – чрезвычайно низкие цены на авиаперелет от 280 евро. Не упустите свой шанс!</p>
            <br>
            <!-- <p class="title22gray">
               <a href="tel: 0678502107">+38 (067) 850 21 07</a>
             </p> -->
            <p class="p-calendar yellow center">Присоединяйтесь к самому летнему  приключению на яхтах среди зимы!</p>
          </div>
          <div class="modal-body-top-button">
            <a class="button calendar_modal_sub">
              <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom" style="margin: 10px;">ПРИНЯТЬ УЧАСТИЕ</button>
            </a>
          </div>
          <!--  <section class="modal-body__travel-program">
              <h2 class="travel-program-first">Карта маршрута</h2>
              <p>Шпицберген - внушительных размеров полярный островной архипелаг, лежащий на просторах западной части Северного Ледовитого океана. Все экспедиции на Северный Полюс начинаются именно отсюда, так как до Точки Мира всего 1 час лета! </p>
              <p>Архипелаг включает три крупных острова: Эдж, Северо-Восточная Земля, Западный Шпицберген и семь менее значительных, которые изрезаны причудливыми фьердами и покрыты снежными шапками ледников.</p>
              <p>Шпицберген - это БЕЛЫЕ МЕДВЕДИ (которых там в 3!! раза больше чем людей), МОРЖИ, уникальная арктическая природа, ПАКОВЫЕ ЛЬДЫ, ОЛЕНИ и звенящая тишина крайнего севера!</p>
              <p>Уникальная геолокация и природные ресурсы создают исключительные условия для проведения всех видов экспедиционных туров Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН – рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</p>
            </section> 
            <div class="container w87">
              <div class="col-xs-12 col-sm-8 col-md-8  col-lg-8">
                <img src="img/2.1.jpg" width="100%">
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img class="w87__img-h" src="img/2.2.jpg" width="105%">
              </div>
            </div> -->
          <section class="modal-body__travel-program">
            <div class="section_header">
              <span>Программа</span>
            </div>
            <h4>День 1 - Cуббота </h4>
            <p>Вылет основной группы из Киева, вылет других участников из других городов мира.</p>
            <p>Сбор  в аэропорту Тенерифе. Трансфер в марину Санта-Круз.</p>

            <img src="img/kanaru/6.jpg">
            <!-- <h2 class="travel-program__h2-first">Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН - рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</h2> -->

            <div class="clearfix"></div>
            <p>Тенерифе – бесподобной красоты остров с бесконечными пляжами и пальмами, вулканами и оазисами, увитый розовыми  лианами бугенвилий.  Остров находится всего в 300 км от Сахары, поэтому здесь круглый год тепло.  Как правило,  температура не падает ниже 23 градусов зимой и не превышает 35 летом. Его еще называют "Островом вечной весны". Вода круглый год 22-24 градуса.</p>

            <p>Тенерифе поразит вас своим контрастом и необыкновенным шармом уютных марин, местными рыбными ресторанчиками и извилистыми улочками с множеством магазинчиков, которые продают прекрасное и совсем недорогое вино и джем из кактусов.</p>

            <p>Заселение на яхты в марине Санта-Круз, закупка, брифинг по безопасности и  велком-пати с вином и местной едой.</p>

            <img src="img/kanaru/14.jpg">

            <p>Вечерние пейзажи на Тенерифе завораживают. Не откажите себе в удовольствии посидеть на палубе своей яхты и  насладиться панорамой и огромными звездами – ведь вы на Краю земли!! (до плавания Колумба считалось, то Канарские острова – это Край Света и дальше только Океан).</p>
            <img src="img/kanaru/14.jpg">

            <h4>День 2 - Воскресенье</h4>
            <p>Утром выходим на юг острова Гран-Канария. В начале пути остановка на  уютном безлюдном пляже  для купания и снокерлинга.</p>
            <img src="img/kanaru/20.jpg">

            <p>По пути к Гран-Канарии нам могут встретиться киты и дельфины, которых тут достаточно много. Так же  желающих ждет – океанская рыбалка на голубого марлина и тунца (троллинг) для новичков. Если вы рыбак с опытом – берите свои профессиональные снасти с собой.</p>

            <p>На закате мы прийдем в красивую и очень уютную марину  Пуэрто-Моган.  </p>
            <img src="img/kanaru/5.jpg">

            <div class="clearfix"></div>
            <p>Гран-Канария – это целый континент в миниатюре,  на котором каждый день будет не похожим на предыдущий.  Пляжи с золотистым песком на побережье протяжённостью 236 км,  солнце, которое никогда не прячется за тучи,  удивительные вулканические пейзажи, макронезийская флора и даже  песчаные дюны с выходом в океан. Необыкновенное райское место, где будете отдыхать именно вы!</p>

            <p>Пуэрто Моган – поразит вас своей самобытностью и очень вкусными морепродуктами. Вам останется только выбрать ресторан или купить свежих морепродуктов и приготовить их самостоятельно на яхте.</p>
            <img src="img/kanaru/10.jpg">


            <h4>День 3 – Понедельник</h4>
            <p>Берем машины и отправляемся к необыкновенным дюнам Маспаломаса - речь идёт об одной из главных достопримечательностей острова. Необыкновенное сочетание высоченных барханов и дюн на фоне бесподобно синих вод океана. Это уникальное по своей красоте место занесено в список наследия ЮНЕСКО.</p>
            <img src="img/kanaru/12.jpg">

            <p>Так же в этот день нас ждет купание в океане,  возможность побродить по дюнам и отснять самые необычные фото и/или  присоединиться к группе серферов и позаниматься серфингом на пляже или отправиться на машине в горные районы острова, что бы купить местного вина, сыра и пальмового меда.</p>
            <img src="img/kanaru/15.jpg">
            <div class="clearfix"></div>
            <p>Ночь в марине Пуэрто Моган.</p>

            <h4>День 4 - Вторник</h4>
            <p>Переход на юг Тенерифе  в марину Сан Мигель. Наблюдение за BALLENAS (морскими млекопитающими), ведь юго-западное побережье острова – лучшее место, чтобы наблюдать за китами и дельфинами на свободе. Недалеко от берега можно встретить до 26 разновидностей китообразных: полосатиков, дельфинов, косаток и даже синих китов. Юхуу!</p>
            <img src="img/kanaru/11.jpg">

            <p>Ночь в марине.</p>


            <h4>День 5 - Среда</h4>
            <p>Арендуем машины и отправляемся покорять третий по высоте в мире действующий (спящий) вулкан Тейде, высотой 3718 м над уровнем моря.</p>

            <p>Для эксремалов – подъем от подножья вулкана. Более простой вариант – подняться фуникулером до отметки 3200 м. и от туда пройти пешком к вершине кратера вулкана. Что бы попасть на вершину у нас будет специальный пермит.</p>
            <img src="img/kanaru/18.jpg">

            <p>Панорама  впечатляет!  А если повезет,  у нас будет возможность походить по облакам, которые предшествуют вершине.</p>
            <p>По пути мы можем  увидеть очень древний цветок высота соцветия которого достигает 3х метров!</p>

            <img src="img/kanaru/21.jpg">
            <p>Для тех, кто не захочет подниматься – отдых на яхте,  купание и бесподобное солнце Канар.</p>
            <p>Вечером/ночью переход вдоль Южного побережья Тенерифе  в город Лос Гигантес.  Ночь в марине Лос Гигантес..</p>


            <h4>День 6 – Четверг</h4>
            <p>Сегодня мы покидаем яхту для того, что бы увидеть одно из красивейших мест на Канарах – ущелье Маска.</p>
            <img src="img/kanaru/16.jpg">

            <p>Несколько километров по горному серпантину  и мы окажемся в крохотной и чрезвычайно фотогеничной деревушке Маска (Masca). До 60-хх годов прошлого столетия немногочисленные местные жители выбирались в свет из своей глуши исключительно пешим ходом через хребты и овраги, тут не было дорог. Такая вековая оторванность от внешнего мира породила легенды о приюте пиратов и спрятанных здесь несметных сокровищах.</p>

            <p>В деревне начинается наш треккинг- маршрут, который ведет по узкому ущелью вниз к океану.</p>
            <img src="img/kanaru/17.jpg">

            <p>Острые шпили скал, причудливой формы гроты, звенящая тишина и необыкновенной красоты природа.</p>
            <p>Спуск длится около 3-4х часов, а после купания на диком пляже (куда выходит ущелье) – нас заберут наши яхты.</p>
            <img src="img/kanaru/13.jpg">

            <p>Ночь в марине Лос Гигантес. </p>


            <h4>День 7 - Пятница</h4>
            <p>Ранний выход в обратном направлении в марину Санта-Круз. </p>

            <p>По пути морская рыбалка – на голубого марлина и тунца  (троллинг) для новичков. Если вы рыбак с опытом – берите свои профессиональные снасти с собой.</p>

            <p>Для тех, кто хочет провести время на пляже, занимаясь серфингом или кайтингом – будет такая возможность. Вы сможете взять машину (факультативно) в Лос Гигантес и отправиться на один из множества спотов для серферов и кайтеров.</p>

            <img src="img/kanaru/2.jpg">

            <p>Ночь в марине Санта–Круз</p>

            <img src="img/kanaru/1.jpg">

            <h4>День 8 - Суббота</h4>
            <p>Завтракаем и освобождаем яхты до 10 утра. </p>

            <!--   <div class="container w100">
                 <p class="title33gray">Получить развернутую программу</p>
                 <div class="col-md-6 col-md-offset-3">
                   <form id="getProgramForm" _lpchecked="1" class="calendarModalGetForm">
                     <input type="hidden" name="tourname" id="tourname" value="">
                     <input type="hidden" name="form-id" value="calendar-modal-get-program" />
                     <div class="form-group">
                       <input  name="name" type="text" class="form-control input_getprogram" id="name" placeholder="Ваше имя и фамилия" required="">
                     </div>
                     <div class="form-group">
                       <input name="phone"  type="tel" class="form-control input_getprogram" id="phone" placeholder="Ваш телефон" required="">
                     </div>
                     <div class="form-group">
                       <input name="mail" type="email" class="form-control input_getprogram" id="mail" placeholder="Ваша почта" required="">
                     </div>
                   </form>
                   <br>
                   <br>
                   <div class="modal-body-top-button">
                     <a href="" class="button ">
                       <button type="submit" form="getProgramForm" value="Submit">Получить </button>
                     </a>
                   </div>
                 </div>
               </div> -->


            <!-- <h2 class="travel-program__h2-second">
              Не откладывай ЖИЗНЬ на потом -
              <a target="_blank" href="https://www.facebook.com/FollowYourDREAM2015/">#Живи_так_как_ты_хочешь</a>
              <br>
              Присоединяйся к САМОМУ КРУТОМУ ПРИКЛЮЧЕНИЮ в твоей ЖИЗНИ!
            </h2> -->

            <h4 style="font-size: 18px;">Присоединяйтесь! Не откладывайте свою жизнь на потом!</h4>

          </section>


          <!-- <div class="cover_block container750">
            <div class="container">
              <br>
              <div class="modal-body-top-button">
                <a class="button">
                  <button class="add_to_expedition button tour_btn_takepart_orange tour_btn_witout_marginbottom">ПРИНЯТЬ УЧАСТИЕ В ЭКСПЕДИЦИИ</button>
                </a>
              </div>
            </div>
          </div> -->


          <div id="home" class="tour_section" style="margin-top: -25px;">
            <div class="container">
              <div class="section_header">
                <span>Наши яхты</span>
              </div>
              <p class="title22gray">
                <b>Все яхты не старше 2008 г/выпуска, 4х каютные, 2 санузла, каюткомпания</b>
              </p>
              <div id="links" class="tour_section__links">
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/foto-programa-greciya/plan1.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/foto-programa-greciya/plan2.jpg">
                </div>
                <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                  <img src="img/foto-programa-greciya/plan3.jpg">
                </div>
              </div>
            </div>
            <!-- <div class="container p30_0">
               <p class="title22gray">Дополнительные варианты проживания (бронируются отдельно):
                 <br>
                 Отель Хотел энд Лодж со всеми удобствами
               </p>
               <div id="links" class="tour_section__links">
                 <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                   <img src="img/live/1.1.jpg">
                 </div>
                 <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                   <img src="img/live/1.2.jpg">
                 </div>
                 <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                   <img src="img/live/1.3.jpg">
                 </div>
               </div>
             </div> -->
            <!--  <div class="container">
                <p class="title22gray">Уникальный исторический отель комфорт класса (общая ванная комната)</p>
                <div id="links" class="tour_section__links">
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="" data-gallery="stay_gallery">
                    <img  src="img/live/2.1.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.2.jpg"
                       data-gallery="stay_gallery">
                    <img src="img/live/2.2.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-4 gallery_preview" href="images/live/2.3.jpg"
                       data-gallery="stay_gallery">
                    <img src="img/live/2.3.jpg">
                  </div>
                </div>
              </div> -->
          </div>



          <div id="price" class="tour_section">
            <div class="container">
              <div class="section_header">
                <span>Стоимость яхт-путешествия</span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 price_discount">всего 1100 евро</div>
              <div class="row m0_10">
                <div class="col-sm-6 col-xs-12">
                  <h4 class="block_title">
                    <img src="img/trip/check_circle.png">
                    В стоимость включено:
                  </h4>
                  <ul class="tour_included">
                    <li>Неделя на прекрасной яхте в океане с посещением 2х  самых впечатляющих островов Канарского Архипелага (размещение 1/2DBL)</li>
                    <li>Аренда машин и трансферов по маршруту</li>
                    <li>Восхождение на вулкан Тейде 3718 м </li>
                    <li>Треккинг по впечатляющему ущелью Маска</li>
                    <li>Посещение  дюн Маспаломас</li>
                    <li>Пермиты в национальные парки</li>
                    <li>Билеты в нац. парки и на фуникулер</li>
                    <li>Океанская РЫБАЛКА на голубого МАРЛИНА и тунца (троллинг/ уровень «новичок»)</li>
                    <li>Услуги профессионального шкипера</li>
                    <li>Топливо</li>
                    <li>Стоянки в маринах</li>
                    <li>Финальная уборка</li>
                    <li>Постельное белье</li>
                    <li>Услуги гида и сопровождающего</li>
                    <li>Фотоотчет</li>
                    <li>Фирменная футболка</li>

                  </ul>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <h4 class="block_title">
                    <img src="img/trip/plus_circle.png">
                    Дополнительные расходы:
                  </h4>
                  <ul class="tour_features">
                    <li>Авиаперелет от 280 евро</li>
                    <li>Визовый сбор 35 евро (Шенген – предоставляем официальное приглашение от судовладельцев)</li>
                    <li>Питание на борту - 80 евро/чел в неделю</li>
                    <li>Серфинг от 25 евро/занятие</li>

                  </ul>
                </div>
              </div>
              <div class="hidden-xs">
                <h3 class="heading">Как присоединиться к экспедиции</h3>
                <div class="modal-body-top-button">
                  <a class="button ">
                    <button class="add_to_expedition tour_btn_takepart_orange tour_btn_witout_marginbottom">Подать заявку</button>
                  </a>
                </div>
                <ul class="timeline">
                  <li>
                    <div class="timeline-badge">1</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Мы принимаем заявку и перезваниваем Вам для обсуждения деталей</p>
                        <div class="timeline-icon">
                          <img src="img/trip/phone_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge">2</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Отправляем Вам на почту анкету участника и инструкции по оплате тура</p>
                        <div class="timeline-icon">
                          <img src="img/trip/mail_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge">3</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Принимаем оплату (для жесткой бронировки - предоплата в размере 600 евро) в офисе или переводом. Остаток оплату не позднее чем за 10 рабочих дней до начала путешествия (до 26.12.16)</p>
                        <div class="timeline-icon">
                          <img src="img/trip/money_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge">4</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Помогаем решить вопрос с визой (предоставляем приглашение) и перелетом перелет (при необходимости)</p>
                        <div class="timeline-icon">
                          <img src="img/trip/doc_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-li">
                    <div class="timeline-badge">5</div>
                    <div class="timeline-panel">
                      <div class="timeline-body">
                        <p>Расскажем, что с собой нужно взять и отправляемся в самое теплое путешествие уходящего года!</p>
                        <div class="timeline-icon">
                          <img src="img/trip/prepare_icon.png">
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <div class="modal-footer__orginizer">
            <ul>
              <li>
                <div class="modal-footer__orginizer-img-wrapper">
                  <img src="img/review__human-2.png" alt="">
                </div>
                <h4>Анна Скибун</h4>
                <h5>Организатор</h5>
                <ul class="modal-footer__orginizer-contacts">
                  <li class="contact-fb">
                    <a href="https://www.facebook.com/anna.skibun" target="_blank">anna.skibun</a>
                  </li>
                  <li class="contact-skype">
                    <a href="skype:anna_skibun?chat">skype</a>
                  </li>
                  <li class="footer-messager__viber">
                    <a href="viber://add?number=+380678502107">followyourdream</a>
                  </li>
                  <li class="contact-mail">
                    <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                  </li>
                  <li class="contact-phones">
                    <a href="tel:+380678502107">+38 067 850 21 07</a>
                  </li>
                </ul>
              </li>
              <li>
                <div class="modal-footer__orginizer-img-wrapper">
                  <img src="img/Vlad.jpg" alt="">
                </div>
                <h4>Владислав Бондарь</h4>
                <h5>Клиент-менеджер</h5>
                <ul class="modal-footer__orginizer-contacts">
                  <li class="contact-fb">
                    <a href="https://www.facebook.com/bondar.vlad" target="_blank">bondar.vlad</a>
                  </li>
                  <li class="contact-skype">
                    <a href="skype:anna_skibun?chat">skype</a>
                  </li>
                  <li class="footer-messager__viber">
                    <a href="viber://add?number=+380678502107">followyourdream</a>
                  </li>
                  <li class="contact-mail">
                    <a href="mailto:info@dreamlifeexpeditions.com">info@dreamlifeexpeditions.com</a>
                  </li>
                  <li class="contact-phones">
                    <a href="tel:+380443605328">+38 044 360 53 28</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- modal-calendar END kanaru-yahting-vylkan -->










<!--    thank-calendar-modal START -->
<div id="thankModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title takepart_header">Благодарим за заявку!</h4>
      </div>
      <div class="modal-body">
        <p class="takepart_descrip">Мы отправим Вам программу тура в течение
          рабочего дня.</p>
      </div>
      <div class="modal-footer">
        <div class="text-center">
          <button type="button" class="btn_submitform " data-dismiss="modal" aria-label="Close">Закрыть</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--    thank-calendar-modal END -->

















