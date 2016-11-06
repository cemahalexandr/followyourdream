<?php
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM indexHeader WHERE id=1");
$db_arr = mysql_fetch_array($db_query);
?>
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="<?php echo $db_arr['headerLogoLink'];?>" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <?php
                    $str = file_get_contents('admin/inc/json/nav.json');
                    $json = json_decode($str, true); // decode the JSON into an associative array
                ?>
                <?php foreach ($json as $json_key => $json_val):?>
                    <?php if ($json_val['class'] == "dropdown"):?>
                        <li class="dropdown">
                            <a href="/<?php echo $json_val['href']?>" style="display: inline-block;"><?php echo $json_val['title'];?><span class="caret "></span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($json_val['dropdown'] as $drop_key => $drop_val):?>
                                    <li><a tabindex="-1" href="/<?php echo $drop_val['href'];?>"><?php echo $drop_val['anchor']?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                    <?php else:?>
                        <li><a href="/<?php echo $json_val['href']?>"><?php echo $json_val['title'];?></a></li>
                    <?php endif;?>
                <?php endforeach;?>
            </ul>
            <ul class="nav navbar-nav navbar-right ul-nav-sotial">
                <li class="li-nav-sotial">
                    <a href="<?php echo $db_arr['headerLinkFb']; ?>" target="_blank">
                        <img src="img/sotial-facebook.png" alt="">
                    </a>
                    <span>facebook</span>
                </li>
                <li class="li-nav-sotial">
                    <a href="<?php echo $db_arr['headerLinkIn']; ?>" target="_blank">
                        <img src="img/sotial-instargam.png" alt="">
                    </a>
                    <span>instagram</span>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>