<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM indexFooter WHERE id=1");
$db_arr = mysql_fetch_array($db_query);
?>
<footer id="contacts" style="background-image: url('../<?php echo $db_arr['indexFooterBgImg']; ?>');">

    <img src="<?php echo $db_arr['indexFooterLogoLink'];?>" alt="" class="footer-logo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="footer-messager">
                    <li class="footer-messager__viber"><a href="tel:<?php echo $db_arr['indexFooterSotialViber'];?>">followyourdream</a></li>
                    <li class="footer-messager__skype"><a href="skype:<?php echo $db_arr['indexFooterSotialSkype'];?>">followyourdream</a></li>
                    <li class="footer-messager__email"><a href="mailto:<?php echo $db_arr['indexFooterSotialEmail'];?>"><?php echo $db_arr['indexFooterSotialEmail'];?></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 footer-center">
                <div class="footer__sotial-form-wrap">
                    <form class="footer__sotial-form">
                        <div class="footer__sotial-thanks">
                            <span>ПОЗДРАВЛЯЕМ!</span> 
                            ТЕПЕРЬ ТВОЯ ЖИЗНЬ  НАПОЛНИТСЯ НЕОБЫКНОВЕННЫМИ ПУТЕШЕСТВИЯМИ И ЭМОЦИЯМИ!
                        </div>

                        <div class="animate-wrap">
                            <input type="hidden" name="tourname" id="Tour_Id" value="ПРИСОЕДИНИЛИСЬ К СООБЩЕСТВУ!" />
                            <input type="hidden" name="form-id" value="footer-form" />
                            <input type="hidden" name="name" value="" />
                            <input type="email" name="mail" required placeholder="Ваша электронная почта">
                            <input type="submit" value="Присоединиться">
                


                            <div class="fb-share-button" data-href="https://www.facebook.com/FollowYourDREAM2015/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FFollowYourDREAM2015%2F&amp;src=sdkpreparse"><img class="button-social" src="img/fb-footer.png" alt=""></a></div>
                            </br>
                        <p class="not-spam">Никакого спама. Только интересная информация о новых маршрутах, невероятных экспедициях и путешествиях.  </p>

                        </div>

                        <a href="#" class="button white">
                            <button class="tour_btn_takepart_blue tour_btn_witout_marginbottom button-join"><?php echo $db_arr['indexFooterButtonText'];?></button>
                        </a>
                        <div class="clearfix"></div>
                    </form>

                </div>

                <div class="footer-sotial">
                    <h4>Мы в соц.сетях</h4>
                    <ul>
                        <li class="footer-sotial__facebook"><a href="<?php echo $db_arr['indexFooterSotialFb'];?>" target="_blank"><img src="img/sotial-facebook.png" alt=""></a></li>
                        <li class="footer-sotial__instagram"><a href="<?php echo $db_arr['indexFooterSotialIn'];?>" target="_blank"><img src="img/sotial-instargam.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right">
                <div class="footer-phones">
                    <ul>
                        <li><a href="tel:+380 67 850 21 07"><?php echo $db_arr['indexFooterPhone'];?></a></li>
                        <?php
                        //данные по базе данных
                        $db_table = "followyourdream";
                        $db_select = mysql_select_db($db_table);
                        $db_query = mysql_query("SELECT * FROM indexFooter WHERE id=2");
                        $db_arr = mysql_fetch_array($db_query);
                        ?>
                        <li><a href="tel:+380 44 360 53 28"><?php echo $db_arr['indexFooterPhone'];?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>