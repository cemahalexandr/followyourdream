<!--	RUN -->
	<?php include_once "inc/doctype.php";?>
    <?php include_once "inc/nav.php";?>
    <?php include_once "inc/header.php";?>

    <?
    //данные по базе данных
    $db_table = "followyourdream";
    $db_select = mysql_select_db($db_table);
    $db_query = mysql_query("SELECT * FROM indexOurTravel WHERE id=1");
    $db_arr = mysql_fetch_array($db_query);
    ?>
    <section id="travels" class="our-travels">
      <h3 class="heading"><?php echo $db_arr['ourtravelHeaderText'];?></h3>
      <span class="headind-detail"><?php echo $db_arr['ourtravelSubHeaderText'];?></span>
      <div class="our-travels__wrapper">
        <div class="container-fluid">
          <div class="row">
            <?php for ($i = 1; $i < 5; $i++):?>
              <?php
              $db_query = mysql_query("SELECT * FROM indexOurTravel WHERE id=++$i");
              $db_arr = mysql_fetch_array($db_query);
              ?>
              <div class="col-lg-3 col-md-3 col-sm-6 our-travels__wrapper-item">
                <a href="<?php echo $db_arr['ourtravelBlockImgLink'];?>" class="our-travels__wrapper-item-link">
                  <img src="<?php echo $db_arr['ourtravelBlockImgSrc'];?>" alt="">
                  <div class="our-travels__wrapper-item-hover">
                    <span><?php echo $db_arr['ourtravelBlockImgTitle'];?></span>
                  </div>
                </a>
              </div>
            <?php endfor;?>
          </div>
          <div class="row">
            <?php
            $db_query = mysql_query("SELECT * FROM indexOurTravel WHERE id=5");
            $db_arr = mysql_fetch_array($db_query);
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="our-travels__wrapper-calendar" style="background-image: url('<?php echo $db_arr['ourtravelBlockImgSrc'];?>');">
                <a href="<?php echo $db_arr['ourtravelBlockImgLink'];?>">
                  <img src="img/our-travel__img-calendar-icon.png" alt="">
                  <p><?php echo $db_arr['ourtravelBlockImgTitle'];?></p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="comunity" class="about-comunity">
      <?php
      //данные по базе данных
      $db_table = "followyourdream";
      $db_select = mysql_select_db($db_table);
      $db_query = mysql_query("SELECT * FROM indexAboutComunity WHERE id=1");
      $db_arr = mysql_fetch_array($db_query);
      ?>
      <h3 class="heading"><?php echo $db_arr['aboutComunityHeaderText'];?></h3>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="about-comunity-text">
              <?php echo $db_arr['aboutComunitySubHeaderText'];?>
              <span><?php echo $db_arr['aboutComunityYellowText'];?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid about-comunity__icons">
        <div class="row">
          <?php for ($i = 1; $i < 5; $i++):?>
            <?php
            $db_query = mysql_query("SELECT * FROM indexAboutComunity WHERE id=++$i");
            $db_arr = mysql_fetch_array($db_query);
            ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-comunity__icons-item">
              <div class="about-comunity__icons-item__img-wrapper">
                <img src="<?php echo $db_arr['aboutComunityImgSrc'];?>" alt="">
              </div>
              <h4><?php echo $db_arr['aboutComunityImgHeader'];?></h4>
              <p><?php echo $db_arr['aboutComunityImgText'];?></p>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </section>
    <section class="expectation">
      <?php
      //данные по базе данных
      $db_table = "followyourdream";
      $db_select = mysql_select_db($db_table);
      $db_query = mysql_query("SELECT * FROM indexWithUs WHERE id=1");
      $db_arr = mysql_fetch_array($db_query);
      ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 expectation__left-list">
            <h3 class="heading"><?php echo $db_arr['withUsHeaderText'];?></h3>
            <?php echo $db_arr['withUsTextarea'];?>
            <div class="clearfix"></div>
          </div>
          <div class="expectation__right-img" style="background-image: url('<?php echo $db_arr['withUsBgImg']; ?>');"></div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-lg-push-1 expectation__bottom">
            <p><?php echo $db_arr['withUsUnderText'];?></p>
            <a href="#contacts" class="button">
              <button><?php echo $db_arr['withUsUnderTextButton'];?></button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="upcoming-event" class="upcoming-event">
      <?php
      //данные по базе данных
      $db_table = "followyourdream";
      $db_select = mysql_select_db($db_table);
      $db_query = mysql_query("SELECT * FROM indexUpcomingEvents WHERE id=1");
      $db_arr = mysql_fetch_array($db_query);
      ?>
      <h3 class="heading"><?php echo $db_arr['upcomingEventsHeaderText'];?></h3>
      <div class="container-fluid">
        <div class="row">
          <?php for ($i = 1; $i < 7; $i++):?>
            <?php
            $db_query = mysql_query("SELECT * FROM indexUpcomingEvents WHERE id=++$i");
            $db_arr = mysql_fetch_array($db_query);
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 upcoming-event__item ">
              <div class="upcoming-event__item-img-wrapper">
                <img src="<?php echo $db_arr['upcomingEventsBlockImgSrc'];?>" alt="">
              </div>
              <div class="upcoming-event__item-hover-substrate"></div>
              <div class="upcoming-event__item-hover">
                <ul>
                  <li class="upcoming-event__item-hover__place"><?php echo $db_arr['upcomingEventsBlockImgCheckpoint'];?></li>
                  <li class="upcoming-event__item-hover__date"><?php echo $db_arr['upcomingEventsBlockImgDate'];?></li>
                  <li class="upcoming-event__item-hover__money"><?php echo $db_arr['upcomingEventsBlockImgPrice'];?></li>
                </ul>
                <div class="upcoming-event__item-hover_btn">
                  <a href="<?php echo $db_arr['upcomingEventsBlockImgLink'];?>" class="button yellow">
                    <button>Подробнее</button>
                  </a>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>

      <div class="container upcoming-event__bottom">
        <div class="row">
          <div class="col-lg-10 col-lg-push-1">
              <a class="button" href="#contacts">
                <button>хочу получать рассылку</button>
              </a>
              <p><?php
                $db_query = mysql_query("SELECT * FROM indexUpcomingEvents WHERE id=1");
                $db_arr = mysql_fetch_array($db_query);
                echo $db_arr['upcomingEventsTextButton'];
                ?></p>
          </div>
        </div>
      </div>
    </section>
    <section id="reviews" class="reviews">
      <?php
      //данные по базе данных
      $db_table = "followyourdream";
      $db_select = mysql_select_db($db_table);
      $db_query = mysql_query("SELECT * FROM indexReviews WHERE id=1");
      $db_arr = mysql_fetch_array($db_query);
      ?>
      <h3 class="heading"><?php echo $db_arr['reviewsHeaderText'];?></h3>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-push-2">
            <div class="reviews__wrapper">
              <?php for ($i = 1; $i < 7; $i++):?>
                <?php
                $db_query = mysql_query("SELECT * FROM indexReviews WHERE id=++$i");
                $db_arr = mysql_fetch_array($db_query);
                ?>
                <div class="reviews__item">
                  <img src="<?php echo $db_arr['reviewsImgSrc'];?>" alt="">
                  <p class="reviews__item-name"><?php echo $db_arr['reviewsReviewName'];?></p>
                  <p class="reviews__item-text"><?php echo $db_arr['reviewsReviewText'];?></p>
                </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="video" class="our-video">
      <?php
      //данные по базе данных
      $db_table = "followyourdream";
      $db_select = mysql_select_db($db_table);
      $db_query = mysql_query("SELECT * FROM indexOurVideo WHERE id=1");
      $db_arr = mysql_fetch_array($db_query);
      ?>
      <h3 class="heading blue"><?php echo $db_arr['ourVideoHeaderText'];?></h3>
      <div class="container-fluid">
        <div class="row">
          <?php
          $db_query = mysql_query("SELECT * FROM indexOurVideo WHERE id=1");
          $db_arr = mysql_fetch_array($db_query);
          ?>
          <div class="our-video__wrapper our-video__left" data-image="<?php echo $db_arr['ourVideoBgImg'];?>">
            <a href="<?php echo $db_arr['ourVideoImgLink'];?>" target="_blank"></a>
            <div class="our-video__wrapper-play"></div>
          </div>
          <?php
          $db_query = mysql_query("SELECT * FROM indexOurVideo WHERE id=2");
          $db_arr = mysql_fetch_array($db_query);
          ?>
          <div class="our-video__wrapper our-video__right" data-image="<?php echo $db_arr['ourVideoBgImg'];?>">
            <a href="<?php echo $db_arr['ourVideoImgLink'];?>" target="_blank"></a>
            <div class="our-video__wrapper-play"></div>
          </div>
          <?php
          $db_query = mysql_query("SELECT * FROM indexOurVideo WHERE id=3");
          $db_arr = mysql_fetch_array($db_query);
          ?>
          <div class="our-video__wrapper our-video__right" data-image="<?php echo $db_arr['ourVideoBgImg'];?>">
            <a href="<?php echo $db_arr['ourVideoImgLink'];?>" target="_blank"></a>
            <div class="our-video__wrapper-play"></div>
          </div>
        </div>
      </div>
    </section>


    
    <?php include_once "inc/footer.php";?>
    <?php
    $goal = "ПОДПИСАЛИСЬ НА РАССЫЛКУ! ГЛАВНАЯ СТРАНИЦА";
    include_once "inc/modal-index.php";
    ?>
    <?php include_once "inc/scripts.php";?>

</body>
</html>
