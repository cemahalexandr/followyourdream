<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Module - upcoming event</h3>
  </div>
  <div class="box-body">
    <div class="box-body index-our-travel-img">
      <div class="row">
        <?
        //данные по базе данных
        $db_table = "followyourdream";
        $db_select = mysql_select_db($db_table);
        $db_query = mysql_query("SELECT * FROM tmpUpcoming WHERE tmpGeneralId='$generalId'");
        $number_class = 0;
        ?>
        <?php while ($db_arr = mysql_fetch_array($db_query)):?>
          <div class="col-md-3">
            <input type="hidden" name="rowId-<?php echo $number_class;?>" value="<?php echo $db_arr['id'];?>">
            <div class="form-group">
              <?php if($db_arr['tmpImgSrc'] != ""):?>
                <div class="form-group-img">
                  <input type="hidden" name="tableName" value="tmpUpcoming">
                  <input type="hidden" name="columnName" value="tmpImgSrc">
                  <input type="hidden" name="imgCount" value="one">
                  <input type="hidden" name="id" value="<?php echo $db_arr['id'];?>">
                  <img src="../<?php echo $db_arr['tmpImgSrc'];?>" alt="">
                  <button type="button" class="del-img btn btn-danger">Удалить</button>
                </div>
              <?php endif;?>
              <div class="upload-img">
                <input name="tmpUpcomingImgSrc-<?php echo $number_class;?>" accept="image/*" type="file" id="">
              </div>
            </div>
            <div class="form-group">
              <label for="">Checkpoint</label>
              <input name="tmpUpcomingCheckpoint-<?php echo $number_class;?>" type="text" class="form-control"  value="<?php echo $db_arr['tmpCheckpoint'];?>">
            </div>
            <div class="form-group">
              <label for="">Date</label>
              <input name="tmpUpcomingDate-<?php echo $number_class;?>" type="text" class="form-control"  value="<?php echo $db_arr['tmpDate'];?>">
            </div>
            <div class="form-group">
              <label for="">Price</label>
              <input name="tmpUpcomingPrice-<?php echo $number_class;?>" type="text" class="form-control"  value="<?php echo $db_arr['tmpPrice'];?>">
            </div>
            <div class="form-group">
              <label for="">Link</label>
              <input name="tmpUpcomingLink-<?php echo $number_class;?>" type="text" class="form-control"  value="<?php echo $db_arr['tmpLink'];?>">
            </div>
          </div>

          <? $number_class++; ?>
        <?php endwhile;?>

        <?
        //данные по базе данных
        $db_table = "followyourdream";
        $db_select = mysql_select_db($db_table);
        $db_query = mysql_query("SELECT * FROM tmpUpcomingCalendar WHERE generalId='$generalId'");
        $db_arr = mysql_fetch_array($db_query);
        ?>
        <div class="col-md-3">
          <input type="hidden" name="generalId" value="<?php echo $db_arr['generalId'];?>">
          <div class="form-group">
            <?php if($db_arr['tmpCalendarBgImg'] != ""):?>
              <div class="form-group-img">
                <input type="hidden" name="tableName" value="tmpUpcomingCalendar">
                <input type="hidden" name="columnName" value="tmpCalendarBgImg">
                <input type="hidden" name="imgCount" value="one">
                <input type="hidden" name="id" value="1">
                <img src="../<?php echo $db_arr['tmpCalendarBgImg'];?>" alt="">
                <button type="button" class="del-img btn btn-danger">Удалить</button>
              </div>
            <?php endif;?>
            <div class="upload-img">
              <input name="tmpCalendarBgImg" accept="image/*" type="file" id="">
            </div>
          </div>
          <div class="form-group">
            <label for="">Title</label>
            <input name="tmpCalendarTitle" type="text" class="form-control"  value="<?php echo $db_arr['tmpCalendarTitle'];?>">
          </div>
          <div class="form-group">
            <label for="">Link</label>
            <input name="tmpCalendarLink" type="text" class="form-control"  value="<?php echo $db_arr['tmpCalendarLink'];?>">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>