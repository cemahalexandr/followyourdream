<?php
$carouselString = $db_arr['headerCarouselSrc'];
$carouselArr = explode(",", $carouselString);
?>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="header-owl-carousel">
                <?php for ($i = 0; $i < count($carouselArr)-1; $i++):?>
                    <div>
                        <img src="<?php echo $carouselArr[$i];?>" alt="">
                    </div>
                <?php endfor;?>
            </div>
        </div>
    </div>
    <div class="header-text"></div>
    <div class="header-text-small"><?php echo $db_arr['headerSmallText'];?></div>
    <div class="header-button">
        <a href="#contacts" class="button">
            <button><?php echo $db_arr['headerButtonText'];?></button>
        </a>
    </div>
</header>