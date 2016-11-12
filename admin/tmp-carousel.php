<?
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM tmpCarousel WHERE generalId='$generalId'");
$db_arr = mysql_fetch_array($db_query);
?>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Module - carousel</h3>
  </div>
  <div class="box-body">
    <div class="box-body index-our-travel-img">
      <div class="row">
        <? $arr_item = explode(",", $db_arr['tmpCarouselSrc']); ?>
        <?for ($i = 0; $i < 8; $i++):?>
        <div class="col-md-3">
          <div class="form-group">
            <div class="form-group-img">
              <input type="hidden" name="tmpCarouselSrcPost-<?php echo $i;?>" value="<?php echo $arr_item[$i];?>">
              <img src="../<?php echo $arr_item[$i];?>" alt="">
              <button type="button" class="tmp-del-img btn btn-danger">Удалить</button>
            </div>
            <div class="upload-img">
              <input name="tmpCarouselSrc-<?php echo $i;?>" type="file" id="">
            </div>
          </div>
        </div>
        <?endfor;?>
      </div>
    </div>
  </div>
</div>