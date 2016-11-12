<?php
$str = file_get_contents('admin/inc/json/nav.json');
$json = json_decode($str, true); // decode the JSON into an associative array
foreach ($json as $json_key => $json_val){
    echo "<div class='form-group'>";
    echo "<label for=''>$json_val[title]</label>";
    echo "<input type='text' name='$json_val[key]' class='form-control' id='$json_val[id]' value='$json_val[title]'>";
    echo "<input type='text' name='$json_val[key]-href' class='form-control' id='' value='$json_val[href]'>";
    if ($json_val['class'] == "dropdown"){
        foreach ($json_val['dropdown'] as $drop_key => $drop_val){
            echo "<div class='form-group_sub'>";
            echo "<input type='text' name='$drop_val[key]' class='form-control' id='' value='$drop_val[anchor]'>";
            echo "<input type='text' name='$drop_val[key]-href' class='form-control' id='' value='$drop_val[href]'>";
            echo "</div>";
        }
    }
    echo "</div>";
}
?>



<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="img/logo-header.png" alt="">
      </a>
    </div>
   <div id="navbar" class="navbar-collapse collapse">


      <ul class="nav navbar-nav navbar-left">
          
        <li class="dropdown">
          <a href="/#travels" style="display: inline-block;">
            Путешествия
            <span class="caret " ></span>
          </a>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="/#travels">Путешествия</a></li>
            <li><a tabindex="-1" href="arctic.php">Арктические экспедиции</a></li>
            <li><a tabindex="-1" href="yachting.php">Яхтинг</a></li>
            <li><a tabindex="-1" href="adventure.php">Приключения</a></li>
            <li><a tabindex="-1" href="">Dream Bus</a></li>
            <li><a tabindex="-1" href="calendar.php">Календарь</a></li>
          </ul>
        </li>
        <li><a href="/#comunity">Сообщество</a></li>
        <li><a href="/#upcoming-event">Ближайшие экспедиции</a></li>
        <li><a href="/#reviews">Отзывы</a></li>
        <li><a href="/#contacts">Контакты</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right ul-nav-sotial">
        <li class="li-nav-sotial"><a href="https://www.facebook.com/FollowYourDREAM2015" target="_blank"><img src="img/sotial-facebook.png" alt=""></a><span>facebook</span></li>
        <li class="li-nav-sotial"><a href="https://www.instagram.com/follow_your_dream_kiev" target="_blank"><img src="img/sotial-instargam.png" alt=""></a><span>instagram</span></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>