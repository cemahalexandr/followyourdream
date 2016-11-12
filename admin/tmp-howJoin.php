<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Module - how join</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <?
      //данные по базе данных
      $db_table = "followyourdream";
      $db_select = mysql_select_db($db_table);
      $db_query = mysql_query("SELECT * FROM tmpHowJoin WHERE tmpGeneralId='$generalId'");
      $db_arr = mysql_fetch_array($db_query);
      ?>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputFile">Header text</label>
          <input name="tmpJoinLeftHeader" type="text" class="form-control" id="exampleInputFile" value="<?php echo $db_arr['tmpJoinLeftHeader'];?>">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Image</label>
          <?php if($db_arr['tmpJoinLeftImgSrc'] != ""):?>
            <div class="form-group-img">
              <input type="hidden" name="tableName" value="tmpHowJoin">
              <input type="hidden" name="columnName" value="tmpJoinLeftImgSrc">
              <input type="hidden" name="imgCount" value="one">
              <input type="hidden" name="id" value="1">
              <img src="../<?php echo $db_arr['tmpJoinLeftImgSrc'];?>" alt="">
              <button type="button" class="del-img btn btn-danger">Удалить</button>
            </div>
          <?php endif;?>
          <div class="upload-img">
            <input name="tmpJoinLeftImgSrc" type="file" accept="image/*"  id="">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Text</label>
          <input name="tmpJoinLeftText" type="text" class="form-control" id="exampleInputFile" value="<?php echo $db_arr['tmpJoinLeftText'];?>">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputFile">Header text</label>
          <input name="tmpJoinRightHeader" type="text" class="form-control" id="exampleInputFile" value="<?php echo $db_arr['tmpJoinRightHeader'];?>">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Image</label>
          <?php if($db_arr['tmpJoinRightImgSrc'] != ""):?>
            <div class="form-group-img">
              <input type="hidden" name="tableName" value="tmpHowJoin">
              <input type="hidden" name="columnName" value="tmpJoinRightImgSrc">
              <input type="hidden" name="imgCount" value="one">
              <input type="hidden" name="id" value="1">
              <img src="../<?php echo $db_arr['tmpJoinRightImgSrc'];?>" alt="">
              <button type="button" class="del-img btn btn-danger">Удалить</button>
            </div>
          <?php endif;?>
          <div class="upload-img">
            <input name="tmpJoinRightImgSrc" type="file" accept="image/*"  id="">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Text</label>
          <input name="tmpJoinRightText" type="text" class="form-control" id="exampleInputFile" value="<?php echo $db_arr['tmpJoinRightText'];?>">
        </div>
      </div>
    </div>
  </div>
</div>