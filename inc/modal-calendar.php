<?php include_once "doctype.php"; ?>
<?php include_once "../db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM modalData");
$db_row_number = mysql_num_rows($db_query);
//                die;

?>


<!-- modal-calendar START tay-kambodga -->
<?php while($db_arr = mysql_fetch_assoc($db_query)):?>
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
<?php endwhile; ?>
<!-- modal-calendar END tay-kambodga -->


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























